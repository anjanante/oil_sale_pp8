<?php
include_once 'config.php';

/**************************************************** USERS *******************************************/
function getUsers($nLimit = -1,)
{
    $oCon = db();
    $sQuery = "Select * FROM user";
    $sQuery .= ' ORDER BY id DESC';
    if ($nLimit > 0) $sQuery .= ' LIMIT ' . $nLimit;
    $stmt = $oCon->prepare($sQuery);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function findConnectedUser($aPost, $bCheckEmail = false)
{
    $oCon = db();
    $sQuery = "Select * FROM user where email=:email";
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":email", $aPost['mail']);
    $stmt->execute();
    $aUser = $stmt->fetch(PDO::FETCH_ASSOC);
    if($bCheckEmail) return $aUser;
    if($aUser){
        $bPassVerify = password_verify($aPost['password'], $aUser['password']);
        if($bPassVerify) return $aUser;
    }
    return [];
}

function setUser($aData)
{
    $oCon = db();
    $bUserExist = false;
    if (isset($aData['id']) && $aData['id']) {
        $sQuery = "UPDATE user SET email=:email Where id=:id";
    } else {
        $sQuery = "INSERT INTO user SET email=:email, password=:password, admin=:admin";
        if(findConnectedUser($aData, true)){
            echo "<code>The user ".$aData["mail"]." already exist</code>";
            $bUserExist = true;
        } 
    }

    $sPassword = password_hash($aData['password'], PASSWORD_BCRYPT, ['cost' => 12]);

    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":email", $aData['mail']);
    $stmt->bindParam(":password", $sPassword);
    $bIsAdmin = isset($aData['admin']) && $aData['admin'] == '1' ? 1 : 0;
    $stmt->bindParam(":admin", $bIsAdmin);
    if (isset($aData['id']) && $aData['id'])
        $stmt->bindParam(":id", $aData['id']);
    if(!$bUserExist)    
        $stmt->execute();
}

function deleteUser($nId)
{
    $oCon = db();
    $sQuery = "DELETE FROM user Where id=:id";
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":id", $nId);
    $stmt->execute();
}

/**************************************************** CATEGORIES *******************************************/

function getCategories($nLimit = -1,)
{
    $oCon = db();
    $sQuery = "Select * FROM category";
    $sQuery .= ' ORDER BY id DESC';
    if ($nLimit > 0) $sQuery .= ' LIMIT ' . $nLimit;
    $stmt = $oCon->prepare($sQuery);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCategory($nId = 0)
{
    $oCon = db();
    $sQuery = "Select * FROM category";
    if ($nId > 0) {
        $sQuery .= ' Where id=:id';
    }
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":id", $nId);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function setCategories($aData)
{
    $oCon = db();
    if (isset($aData['id']) && $aData['id']) {
        $sQuery = "UPDATE category SET name=:name Where id=:id";
    } else {
        $sQuery = "INSERT INTO category SET name=:name";
    }
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":name", $aData['name']);
    if (isset($aData['id']) && $aData['id'])
        $stmt->bindParam(":id", $aData['id']);
    $stmt->execute();
}

function deleteCategory($nId)
{
    $oCon = db();
    $sQuery = "DELETE FROM category Where id=:id";
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":id", $nId);
    $stmt->execute();
}

/**************************************************** PRODUCTS *******************************************/
function getProducts($nLimit = -1, $nCategory = 0)
{
    $oCon = db();
    $sQuery = "Select * FROM product";
    if($nCategory) $sQuery .= " Where category=:category";
    $sQuery .= ' ORDER BY id DESC';

    if ($nLimit > 0) $sQuery .= ' LIMIT ' . $nLimit;
    $stmt = $oCon->prepare($sQuery);
    if($nCategory) $stmt->bindParam(":category", $nCategory);

    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function setProduct($aData, $aFile)
{
    $oCon = db();
    if (isset($aData['id']) && $aData['id']) {
        $sQuery = "UPDATE product SET name=:name, description=:description, price=:price, category=:category, filename=:filename Where id=:id";
    } else {
        $sQuery = "INSERT INTO product SET name=:name, description=:description, price=:price, category=:category, filename=:filename";
    }
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":name", $aData['name']);
    $stmt->bindParam(":description", $aData['description']);
    $stmt->bindParam(":price", $aData['price']);
    $stmt->bindParam(":category", $aData['category']);
    $sFilename = getFileNameUploaded($aFile);
    $stmt->bindParam(":filename", $sFilename);
    if (isset($aData['id']) && $aData['id'])
        $stmt->bindParam(":id", $aData['id']);
    $stmt->execute();
}

function getFileNameUploaded($aFile)
{
    $sFilename = basename($aFile['file']['name']);
    $sUploadDir = __DIR__ . '/uploads/';
    if (!is_dir($sUploadDir)) mkdir($sUploadDir, 0777);
    $sUploadedFilename = $sUploadDir . $sFilename;
    if (move_uploaded_file($aFile['file']['tmp_name'], $sUploadedFilename))
        return $sFilename;
    return ERROR_FILE;
}

function getProduct($nId = 0)
{
    $oCon = db();
    $sQuery = "Select * FROM product";
    if ($nId > 0) {
        $sQuery .= ' Where id=:id';
    }
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":id", $nId);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function deleteProduct($nId)
{
    $oCon = db();
    $sQuery = "DELETE FROM product Where id=:id";
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":id", $nId);
    $stmt->execute();
}
