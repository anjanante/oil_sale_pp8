<?php
include_once 'config.php';
function getCategories($nLimit = -1){
    $oCon = db();
    $sQuery = "Select * FROM category";
    $sQuery .= ' ORDER BY id DESC';
    if($nLimit > 0) $sQuery .= ' LIMIT '.$nLimit;
    $stmt = $oCon->prepare($sQuery);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function setCategories($aData){
    $oCon = db();
    $sQuery = "INSERT INTO category SET name=:name";
    $stmt = $oCon->prepare($sQuery);
    $stmt->bindParam(":name", $aData['name']);
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