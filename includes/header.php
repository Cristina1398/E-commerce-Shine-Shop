<?php
    require_once 'functions/Display.php';    

    if(isset($_GET['pro_id'])){
        $product_id= $_GET['pro_id'];

        $strSql = "SELECT p.product_id, p.category, cp.category_name, p.product_name, p.product_image1, p.product_image2, p.product_image3, p.price, p.description, p.keywords from products p
        JOIN category_products cp
        ON p.category = cp.category_id
         WHERE product_id=$product_id";
    
        $run_products = mysqli_query($connection, $strSql);
        $row_product = mysqli_fetch_array($run_products);
      
        $product_id = $row_product['product_id'];
        $category = $row_product['category'];
        $product_name = $row_product['product_name'];
        $product_price = $row_product['price'];
        $product_image1 = $row_product['product_image1'];
        $product_image2 = $row_product['product_image2'];
        $product_image3 = $row_product['product_image3'];
        $description = $row_product['description'];
        $keywords = $row_product['keywords'];      
        $category_name = $row_product['category_name'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shine</title>
    <!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
   
    <nav class="navbar navbar-inverse"> <!--Begin navbar navbar-inverse -->
        <div class="container-fluid"> <!-- Begin container-fluid -->
            <div class="navbar-header"> <!-- Begin navbar-header -->
                <!--in case of Xs pages, the nav appears just when we click on a button list-->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="glyphicon glyphicon-list"></span>                       
                </button>
                <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->                        
                            <img src="images/logo_shine_desktop.png" alt="M-dev-Store Logo" class="hidden-xs">
                            <img src="images/logo_shine_desktop.png" alt="M-dev-Store Logo Mobile" class="visible-xs">                        
                </a><!-- navbar-brand home Finish -->
                              
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">                   
                   <span class="sr-only">Toggle Search</span>                   
                   <i class="fa fa-search"></i>                   
               </button>
            </div> <!-- Finish navbar-header -->

            <div class="collapse navbar-collapse padding-nav" id="myNavbar"> <!-- Begin collapse navbar-collapse-->
                <ul class="nav navbar-nav left">                      
                    <li class="<?php if($active=='Home')echo"active";?>">
                        <a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                    <li class="<?php if($active=='myaccount')echo"active";?>">
                        <a href="customer/myaccount.php"><span class="glyphicon glyphicon-user"></span> My Account</a>
                    </li>
                    <li class="<?php if($active=='Shop')echo"active";?>">
                        <a href="shop.php"><span class="glyphicon glyphicon-euro"></span> Shop</a>
                    </li>
                   
                    <li class="<?php if($active=='Shopping-cart')echo"active";?>">
                        <a href="shopping-cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a>
                    </li>
                    <li class="<?php if($active=='ContactUs')echo"active";?>">
                        <a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us </a>
                    </li>                            
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php if($active=='SignUp')echo"active";?>"><a href="sign-up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li class="<?php if($active=='Login')echo"active";?>"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div> <!-- Finish collapse navbar collapse-->
        </div> <!-- Finish container-fluid -->
    </nav><!--Finish navbar navbar-inverse -->    
  
    <div id="top"><!-- Top Begin -->       
       <div class="container"><!-- container Begin -->           
           <a href="shopping-cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->                   
                   <i class="fa fa-shopping-cart"></i>                   
                   <span> <?php NumberofItems(); ?> Items In Your Cart | </span>      
                   <span> <?php ComputeThePrice(); ?> </span>                
            </a><!-- btn navbar-btn btn-primary Finish -->
            
            <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                    <span class="sr-only">Toggle Search</span>                       
                    <i class="fa fa-search"></i>                       
            </button><!-- btn btn-primary navbar-btn Finish -->                   
                  
            <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->                       
                       <div class="input-group"><!-- input-group Begin -->                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->                               
                               <i class="fa fa-search"></i>                               
                           </button><!-- btn btn-primary Finish -->                           
                           </span><!-- input-group-btn Finish -->                           
                       </div><!-- input-group Finish -->                       
                   </form><!-- navbar-form Finish -->                   
            </div><!-- collapse clearfix Finish -->
       </div><!-- container Finish -->
       
    </div><!-- Top Finish -->
