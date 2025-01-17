<?php
function index()
{
    $aProducts = getProducts(4);
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
    $_SESSION['logged'] = null;
    $_SESSION['id']     = null;
    $_SESSION['email']  = null;
    $_SESSION['admin']  = null;
    header('Location: /index.php');
    exit();
}

function register()
{
    if (!empty($_POST)) {
        setUser($_POST);
        header('Location: /');
        exit();
    } else {
        require_once 'front/register.php';
    }
}

function products()
{
    $nIdCategorie = (!empty($_GET) && !empty($_GET['id'])) ? $_GET['id'] : 0;
    $aProducts = getProducts(-1, $nIdCategorie);
    require_once 'front/products.php';
}

function productDetails($nId){
    $aProduct = $nId ? getProduct($nId) : [];
    require_once 'front/product_details.php';
}

function category()
{
    $aCategories = getCategories(5);
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

function importUserAdmin(){
    if (!empty($_FILES)) {
        $sFile = $_FILES['file']['tmp_name'];
        $handle = fopen($sFile, "r");
        $i = 0;
        while (($aData = fgetcsv($handle)) !== FALSE) {
            if($i > 0){
                setUser([
                    'mail'      => $aData[0],
                    'password'  => $aData[1],
                    'admin'     => $aData[2],
                ]);
            }
            $i++;
        }
        header('Location: /index.php/admin/users');
        exit();
    }
    require_once 'admin/import.php';
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

function importCategoriesAdmin(){
    if (!empty($_FILES)) {
        $sFile = $_FILES['file']['tmp_name'];
        $handle = fopen($sFile, "r");
        $i = 0;
        while (($aData = fgetcsv($handle)) !== FALSE) {
            if($i > 0){
                setCategories(['name' => $aData[0]]);
            }
            $i++;
        }
        header('Location: /index.php/admin/categories');
        exit();
    }
    require_once 'admin/import.php';
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
/***********************************************CART*********************************************/
function indexCart(){
    require_once 'front/cart.php';
}

function addCart($nId) {
    $aProduct = getProduct($nId);
    if (!empty($aProduct)) {
        if (!isset($_SESSION['cart']) || (empty($_SESSION['cart']))) {
            $nPrice = $aProduct['price'];
            $_SESSION['cart'] = [];
            $_SESSION['cart'][$nId]['quantity'] = 1;
            $_SESSION['cart'][$nId]['name']     = $aProduct['name'];
            $_SESSION['cart'][$nId]['price']    = $nPrice;
            $_SESSION['cart'][$nId]['filename'] = $aProduct['filename'];
            $_SESSION['total-cart-price'] = $nPrice;
        } else {
            if (isset($_SESSION['cart'][$nId])) {
                $_SESSION['cart'][$nId]['quantity'] = $_SESSION['cart'][$nId]['quantity']  + 1;
                $nPrice = $_SESSION['cart'][$nId]['price'];
            } else {
                $nPrice = $aProduct['price'];
                $_SESSION['cart'][$nId]['quantity'] = 1;
                $_SESSION['cart'][$nId]['name'] = $aProduct['name'];
                $_SESSION['cart'][$nId]['price']    = $nPrice;
                $_SESSION['cart'][$nId]['filename'] = $aProduct['filename'];
            }
            $_SESSION['total-cart-price'] += $nPrice;
        }
    }
    header('Location: /index.php/cart');     
    exit();
}

function delCart($id) {
    if (!empty($_SESSION['cart'][$id])) {
        $_SESSION['total-cart-price'] = $_SESSION['total-cart-price'] > 0 ? $_SESSION['total-cart-price'] - ($_SESSION['cart'][$id]['quantity'] * $_SESSION['cart'][$id]['price']) : 0;
        unset($_SESSION['cart'][$id]);
    }
    header('Location: /index.php/cart');     
    exit();
}

function checkoutPayment(){
    $aItems = [];
    if (isset($_SESSION['cart']) && $_SESSION['cart']){
        $aItems = array_map(function($aData){
            return [
                'name' => $aData['name'],
                'quantity' => $aData['quantity'],
                'unit_amount' => [
                    'value' => round($aData['price']/DOLLAR_RATE, 2),
                    'currency_code' => 'USD',
                ]
            ];
        }, $_SESSION['cart']);
        $aItems = array_values($aItems);
    }
    $sCurrencyUsed  = 'USD';
    $nTotalAmount   = isset($_SESSION['total-cart-price']) ? round($_SESSION['total-cart-price']/DOLLAR_RATE, 2) : 1;
    $aOrder = [
        'purchase_units' => [
            [
                'description' => 'Cart first',
                'items'     => $aItems,
                'amount'    => [
                    'currency_code' => $sCurrencyUsed,
                    'value'     => $nTotalAmount,
                    'breakdown' => [
                        'item_total'=> [
                            'currency_code' => $sCurrencyUsed,
                            'value' => $nTotalAmount
                        ]
                    ]
                ]
            ]
        ]
    ];
    require_once 'front/checkout-payment.php';
}

function payAmount(){
    $content = trim(file_get_contents("php://input"));
    $aDatas = json_decode($content, true);
    $nAuthorizationId = $aDatas['authorizationId'];
    require __DIR__ . '/vendor/autoload.php';
    if(ENV == 'PROD'){
        $oEnvironment   = new \PayPalCheckoutSdk\Core\ProductionEnvironment(PAYPAL_ID, PAYPAL_SECRET);
    }else{
        $oEnvironment   = new \PayPalCheckoutSdk\Core\SandboxEnvironment(PAYPAL_ID, PAYPAL_SECRET);
    }
    $oClient        = new \PayPalCheckoutSdk\Core\PayPalHttpClient($oEnvironment);
    $oRequestAuth   = new \PayPalCheckoutSdk\Payments\AuthorizationsGetRequest($nAuthorizationId);
    $oAuthResponse  = $oClient->execute($oRequestAuth);
    //Check Amount change
    $nTotalAmountAuth = (int)(floatval($oAuthResponse->result->amount->value));
    $nTotalAmount   = isset($_SESSION['total-cart-price']) ? (int)(round($_SESSION['total-cart-price']/DOLLAR_RATE, 2)) : 1;
    if($nTotalAmountAuth !== $nTotalAmount){
        throw new Exception("YOU ARE A HACKER");
    }
    $nOrderId = $oAuthResponse->result->supplementary_data->related_ids->order_id;
    // $oRequestOrder  = new \PayPalCheckoutSdk\Orders\OrdersGetRequest($nOrderId);
    // $oOrderResponse = $oClient->execute($oRequestOrder);
    //Check Available Stock
    //Capture payment
    $oRequestAuth   = new \PayPalCheckoutSdk\Payments\AuthorizationsCaptureRequest($nAuthorizationId);
    $oAuthResponse  = $oClient->execute($oRequestAuth);
    if($oAuthResponse->result->status !== "COMPLETED"){
        throw new Exception("AUTHORIZATION ALREADY CAPTURED");
    }
    echo 'COMPLETED';
}