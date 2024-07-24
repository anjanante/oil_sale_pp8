<?php 
include_once "modele.php";
include_once "controllers.php";

ob_start();
$sUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if(strpos($sUri, "admin") !== false){
    include_once "_partials/header_admin.php";
}else{
    include_once "_partials/header.php";
}

//manage rooting to get content
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
}elseif($sUri === '/index.php/admin/category/edit'){
    editCategoryAdmin($_GET['id']);
}elseif($sUri === '/index.php/admin/category/del'){
    deleteCategoryAdmin($_GET['id']);
}elseif($sUri === '/index.php/admin/products'){
    productsAdmin();
}elseif($sUri === '/index.php/admin/product/add'){
    addProductAdmin();
}elseif($sUri === '/index.php/admin/product/edit'){
    editProductAdmin($_GET['id']);
}elseif($sUri === '/index.php/admin/product/del'){
    deleteProductAdmin($_GET['id']);
}else{
    index();
}
echo ob_get_clean();

include_once "_partials/footer.php";
?>