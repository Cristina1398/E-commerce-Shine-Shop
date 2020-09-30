<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shine</title>
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
                <a href="../index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->                        
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
                    <li>
                        <a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                    <li class="active">
                        <a href="myaccount.php"><span class="glyphicon glyphicon-user"></span> My Account</a>
                    </li>
                    <li>
                        <a href="../shop.php"><span class="glyphicon glyphicon-euro"></span> Shop</a>
                    </li>
                   
                    <li>
                        <a href="../shopping-cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a>
                    </li>
                    <li>
                        <a href="../contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us </a>
                    </li>                            
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../sign-up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div> <!-- Finish collapse navbar collapse-->
        </div> <!-- Finish container-fluid -->
    </nav><!--Finish navbar navbar-inverse -->
  
    <div id="content-shop"> <!-- content-shop Begin -->
        <div class="container"><!--Container begin-->
            <div class="col-md-12"><!--col-md-12 begin-->
                <ul class="breadcrumb"> <!--breadcrumb Begin-->
                    <li>
                        <a href="index.php"> Home </a>
                    </li>
                    <li>
                        My Account
                    </li>   
                </ul>
            </div> <!--col-md-12 finish-->
            
            <div class="col-md-3"> <!--col-md-3 Begin -->
                <?php 
                     include("includes/sidebar.php");
                ?>
            </div> <!--col-md-3 Finish -->

            <div class="col-md-9"> <!-- col-md-9 begin -->
                <div class="box"> <!-- box begin -->
                    <?php
                        if( isset($_GET['my_orders'])){
                            include("my_orders.php");
                        }
                        if( isset($_GET['pay_offline'])){
                            include("pay_offline.php");
                        }
                        if( isset($_GET['edit_account'])){
                            include("edit_account.php");
                        }
                        if( isset($_GET['change_pass'])){
                            include("change_pass.php");
                        }
                        if( isset($_GET['delete_account'])){
                            include("delete_account.php");
                        }

                    ?>
                </div> <!--box finish -->
            </div> <!-- col-md-9 finish -->


        </div> <!-- container finish -->
    </div> <!-- content-shop finish-->

    <?php 
        include("includes/footer.php");
    ?>

    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
</body>
</html>