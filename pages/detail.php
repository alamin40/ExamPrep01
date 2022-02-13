<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav>
    <div class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="action.php?pages=home" class="navbar-brand">Logo</a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">Password Reset</a></li>
                <li><a href="" class="nav-link">All Blogs</a></li>
                <li><a href="action.php?pages=file-upload" class="nav-link">File upload</a></li>
                <li><a href="action.php?pages=product" class="nav-link">All Products</a></li>
                <li><a href="?pages=pattern" class="nav-link">Pattern</a></li>
            </ul>
        </div>
    </div>
</nav>


<section class="py-5 bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <img src="assets/img/<?php echo $result['image']; ?>" alt=""/>
            </div>
            <div class="col-md-6">
                <h1><?php echo $result['name']; ?></h1>
                <h3><?php echo $result['price']; ?></h3>
                <p><?php echo $result['category']; ?></p>
                <p><?php echo $result['brand']; ?></p>
                <p><?php echo $result['description']; ?></p>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php';?>
