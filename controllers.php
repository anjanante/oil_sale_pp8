<?php

function index(){
    require_once 'front/index.php';
}

function category(){
    $aProduct = getProducts();
    require_once 'front/category.php';
}

function indexAdmin(){
    require_once 'admin/index.php';
}

function categoriesAdmin(){
    $aCategories = getCategories();
    require_once 'admin/categories.php';
}

function addCategoryAdmin(){
    require_once 'admin/category_add.php';
}

