<?php
include_once 'config.php';
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

function getProducts(){
    return [
        [
            'id' => 1,
            'name' => 'P1'
        ],
        [
            'id' => 2,
            'name' => 'P2'
        ],
    ];
}