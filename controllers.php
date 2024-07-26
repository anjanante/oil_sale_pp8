<?php
function index()
{
    require_once 'front/index.php';
}

function checkLogged(){
    if(isset($_SESSION['logged']) && $_SESSION['logged']){
        if($_SESSION['admin'] != 1){
            header('Location: /');
        }else{
            header('Location: /index.php/admin');
        }
    }else{
        header('Location: /index.php/login');
    }
    exit();
}
function login()
{
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $aUser = findConnectedUser($_POST);
        if (!empty($aUser)) {
            $_SESSION['logged'] = true;
            $_SESSION['id'] = $aUser['id'];
            $_SESSION['email'] = $aUser['email'];
            $_SESSION['admin'] = $aUser['admin'];
            if ($aUser['admin'] == 1) {
                header('Location: /index.php/admin');
            }else{
                header('Location: /');
            }
            exit();
        }else{
            $aErrors = ['error' => 'Incorrect email or password'];
            require_once 'front/login.php';
        }
    } else {
        checkLogged();
    }
}

function logout()
{
    session_destroy();
    header('Location: /index.php');
    exit();
}

function register()
{
    require_once 'front/register.php';
}

function category()
{
    $aProduct = getProducts();
    require_once 'front/category.php';
}

function indexAdmin()
{
    $aCategories = getCategories(5);
    $aProducts  = getProducts(5);
    require_once 'admin/index.php';
}

/**************************************************** USERS *******************************************/


function usersAdmin()
{
    $aUsers = getUsers();
    require_once 'admin/users.php';
}

function addUserAdmin()
{
    if (!empty($_POST)) {
        setUser($_POST);
        header('Location: /index.php/admin/users');
        exit();
    } else {
        require_once 'admin/user_add.php';
    }
}

function deleteUserAdmin($nId)
{
    if (!empty($_GET) && $nId) {
        deleteUser($nId);
    }
    header('Location: /index.php/admin/users');
    exit();
}

/**************************************************** CATEGORIES *******************************************/

function categoriesAdmin()
{
    $aCategories = getCategories();
    require_once 'admin/categories.php';
}

function addCategoryAdmin()
{
    if (!empty($_POST)) {
        setCategories($_POST);
        header('Location: /index.php/admin/categories');
        exit();
    } else {
        require_once 'admin/category_add.php';
    }
}

function editCategoryAdmin($nId)
{
    $aCategories = getCategory($nId);
    require_once 'admin/category_add.php';
}

function deleteCategoryAdmin($nId)
{
    if (!empty($_GET) && $nId) {
        deleteCategory($nId);
    }
    header('Location: /index.php/admin/categories');
    exit();
}

/**************************************************** PRODUCTS *******************************************/

function productsAdmin()
{
    $aProducts = getProducts();
    require_once 'admin/products.php';
}

function addProductAdmin()
{
    $aCategories = getCategories();
    if (!empty($_POST)) {
        setProduct($_POST, $_FILES);
        header('Location: /index.php/admin/products');
        exit();
    } else {
        require_once 'admin/product_add.php';
    }
}

function editProductAdmin($nId)
{
    $aCategories = getCategories();
    $aProduct = getProduct($nId);
    require_once 'admin/product_add.php';
}

function deleteProductAdmin($nId)
{
    if (!empty($_GET) && $nId) {
        deleteProduct($nId);
    }
    header('Location: /index.php/admin/products');
    exit();
}
