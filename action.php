<?php
session_start();

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Auth;
use App\classes\UploadImage;
use App\classes\Product;
use App\classes\User;




if (isset($_GET['pages']))
{

    if ($_GET['pages'] == 'product')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/product.php';
    }

    elseif ($_GET['pages'] == 'home')
    {
        if (isset($_SESSION['id']))
        {
            $product = new Product();
            $products = $product->getAllProduct();
            include 'pages/home.php';
        }
        else
        {
            $auth = new Auth();
            $auth->login();
        }

    }

    elseif ($_GET['pages'] == 'detail')
    {

        $product = new Product();
        $result = $product->getProductById($_GET['id']);
        include 'pages/detail.php';
    }

    elseif ($_GET['pages'] == 'AllUser')
    {
        if (isset($_SESSION['id']))
        {
            $user = new User();
            $users = $user->getAllUser();
            include 'pages/AllUser.php';
        }
        else
        {
            $auth = new Auth();
            $auth->login();
        }
    }

    elseif ($_GET['pages'] == 'uploadImage')
    {
        if (isset($_SESSION['id']))
        {
            include 'pages/uploadImage.php';
        }
        else
        {
            $auth = new Auth();
            $auth->login();
        }
    }



    elseif ($_GET['pages'] == 'login')
    {
        if (isset($_SESSION['id']))
        {
            $home = new Home();
            $home->index();
        }
        else
            {
            include 'pages/login.php';

        }
    }

    elseif ($_GET['pages'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
    }

    else
    {
        if (isset($_SESSION['id'])){
            $home = new Home();
            $home->index();
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }
}


elseif(isset($_POST['search_btn'])){
    $product = new Product($_POST);
    $result = $product->getAllProductBySearchText();
    include 'pages/searchResult.php';
}


elseif (isset($_POST['login_btn'])){

    $auth = new Auth($_POST);
    $message = $auth->verify();
    include 'pages/login.php';

}

elseif (isset($_POST['product_btn'])){
    $product = new UploadImage($_POST, $_FILES);
    $result = $product->newProduct();
    include 'pages/uploadImage.php';
}


else
{
    $home = new Home();
    $home->index();
}

