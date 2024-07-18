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

//manage rooting to get content
ob_start();
if($sUri === '/index.php'){
    index();
}elseif($sUri === '/index.php/category'){
    category();
}elseif($sUri === '/index.php/admin'){
    indexAdmin();
}elseif($sUri === '/index.php/admin/categories'){
    categoriesAdmin();
}elseif($sUri === '/index.php/admin/category/add'){
    addCategoryAdmin();
}else{
    index();
}
echo ob_get_clean();

include_once "_partials/footer.php";