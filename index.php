<?php
include_once "modele.php";
include_once "controllers.php";

$sUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if(strpos($sUri, "admin") !== false){
    include_once "_partials/header_admin.php";
}else{
    include_once "_partials/header.php";
}

var_dump($sUri);

//manage rooter
if($sUri === '/index.php'){
    echo index();
}elseif($sUri === '/index.php/category'){
    echo category();
}else{
    echo index();
}

include_once "_partials/footer.php";