<?php
include_once 'config.php';

/**************************************************** USERS *******************************************/
function getUsers($nLimit = -1,){
    $oCon = db();
    $sQuery = "Select * FROM user";
    $sQuery .= ' ORDER BY id DESC';
    if($nLimit > 0) $sQuery .= ' LIMIT '.$nLimit;
    $stmt = $oCon->prepare($sQuery);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function setUser($aData){
    $oCon = db();
    if(isset($aData['id']) && $aData['id']){
        $sQuery = "UPDATE user SET email=:email Where id=:id";
    }else{
        $sQuery = "INSERT INTO user SET email=:email, password=:password, admin=:admin";
    }

    $sPassword = password_hash($aData['password'], PASSWORD_BCRYPT, ['cost' => 12]);

    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":email", $aData['mail']);
    $stmt->bindParam(":password", $sPassword);
    $bIsAdmin = isset($aData['admin']) ? 1 : 0;
    $stmt->bindParam(":admin", $bIsAdmin);
    if(isset($aData['id']) && $aData['id'])
        $stmt->bindParam(":id", $aData['id']);
    $stmt->execute();
}

function deleteUser($nId){
    $oCon = db();
    $sQuery = "DELETE FROM user Where id=:id";
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":id", $nId);
    $stmt->execute();
}

/**************************************************** CATEGORIES *******************************************/

function getCategories($nLimit = -1,){
    $oCon = db();
    $sQuery = "Select * FROM category";
    $sQuery .= ' ORDER BY id DESC';
    if($nLimit > 0) $sQuery .= ' LIMIT '.$nLimit;
    $stmt = $oCon->prepare($sQuery);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCategory($nId = 0){
    $oCon = db();
    $sQuery = "Select * FROM category";
    if($nId > 0){
        $sQuery .= ' Where id=:id';
    } 
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":id", $nId);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function setCategories($aData){
    $oCon = db();
    if(isset($aData['id']) && $aData['id']){
        $sQuery = "UPDATE category SET name=:name Where id=:id";
    }else{
        $sQuery = "INSERT INTO category SET name=:name";
    }
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":name", $aData['name']);
    if(isset($aData['id']) && $aData['id'])
        $stmt->bindParam(":id", $aData['id']);
    $stmt->execute();
}

function deleteCategory($nId){
    $oCon = db();
    $sQuery = "DELETE FROM category Where id=:id";
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":id", $nId);
    $stmt->execute();
}

/**************************************************** PRODUCTS *******************************************/
function getProducts($nLimit = -1,){
    $oCon = db();
    $sQuery = "Select * FROM product";
    $sQuery .= ' ORDER BY id DESC';
    if($nLimit > 0) $sQuery .= ' LIMIT '.$nLimit;
    $stmt = $oCon->prepare($sQuery);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function setProduct($aData){
    $oCon = db();
    if(isset($aData['id']) && $aData['id']){
        $sQuery = "UPDATE product SET name=:name, description=:description, price=:price, category=:category, filename=:filename Where id=:id";
    }else{
        $sQuery = "INSERT INTO product SET name=:name, description=:description, price=:price, category=:category, filename=:filename";
    }
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":name", $aData['name']);
    $stmt->bindParam(":description", $aData['description']);
    $stmt->bindParam(":price", $aData['price']);
    $stmt->bindParam(":category", $aData['category']);
    $sFilename = "N/A";
    $stmt->bindParam(":filename", $sFilename);
    if(isset($aData['id']) && $aData['id'])
        $stmt->bindParam(":id", $aData['id']);
    $stmt->execute();
}

function getProduct($nId = 0){
    $oCon = db();
    $sQuery = "Select * FROM product";
    if($nId > 0){
        $sQuery .= ' Where id=:id';
    } 
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":id", $nId);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function deleteProduct($nId){
    $oCon = db();
    $sQuery = "DELETE FROM product Where id=:id";
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":id", $nId);
    $stmt->execute();
}
