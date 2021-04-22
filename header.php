<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Acces Store</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" 
             href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php  
          require('functions.php');
        ?>

    </head>

    <!-- HOME SECTION -->
    <body>
        <!-- header div -->
        <div class="header">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <img src="images/logo.png" alt="This is logo" width="170px">
                    </div>
                    <!-- Navigation bar -->
                    <nav>
                        <ul id="menuBar">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="product.php">Products</a></li>
                            <li><a href="service.php">Services</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Account</a></li>
                        </ul>
                    </nav>
                    <img src="images/cart.png" alt="This Is Cart" height="30px" width="30px">
                    <img src="images/menu.png" alt="menu" class="menu-icon" onclick="menuToggal()">
                </div>
                <div class="row">
                    <div class="col-2">
                        <h1>
                            Welcome To Acces Store
                        </h1>
                        <p>GET IT FIX HERE </p>
                        <a href="product.php" class="btn"> Explore Now &#8594;</a>
                    </div>
                    <div class="col-2">
                        <img src="images/img1.png" alt="VIEW">
                    </div>
                </div>
            </div>
        </div>


