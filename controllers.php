<?php

function index(){
    return require_once 'front/index.php';
}

function category(){
    $aProduct = getProducts();
    return require_once 'front/category.php';
}