<?php
function index(){
    require_once 'front/index.php';
}

function category(){
    $aProduct = getProducts();
    require_once 'front/category.php';
}

function indexAdmin(){
    $aCategories = getCategories(5);
    require_once 'admin/index.php';
}

function categoriesAdmin(){
    $aCategories = getCategories();
    require_once 'admin/categories.php';
}

function addCategoryAdmin(){
    if(!empty($_POST)){
        setCategories($_POST);
        header('Location: /index.php/admin/categories');
        exit();
    }else{
        require_once 'admin/category_add.php';
    }
}

function deleteCategoryAdmin($nId){
    require_once 'admin/category_add.php';
}