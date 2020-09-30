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
                    <li class="active">
                        <a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                    <li>
                        <a href="customer/myaccount.php"><span class="glyphicon glyphicon-user"></span> My Account</a>
                    </li>
                    <li>
                        <a href="shop.php"><span class="glyphicon glyphicon-euro"></span> Shop</a>
                    </li>
                   
                    <li>
                        <a href="shopping-cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a>
                    </li>
                    <li>
                        <a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us </a>
                    </li>                            
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="sign-up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div> <!-- Finish collapse navbar collapse-->
        </div> <!-- Finish container-fluid -->
    </nav><!--Finish navbar navbar-inverse -->    
  
    <div id="top"><!-- Top Begin -->       
       <div class="container"><!-- container Begin -->           
           <a href="shopping-cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->                   
                   <i class="fa fa-shopping-cart"></i>                   
                   <span>4 Items In Your Cart</span>                   
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

    <div class="container" id="photos" ><!--Begin container -->
 
            <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <?php

                        //ne conectam la baza de date
                        $connection = require_once 'includes/dbconn.php';

                        // assigning the array to the $data varaible
                     
                        $strSql = "SELECT * FROM SLIDER LIMIT 0,1";                         
                        $result = mysqli_query($connection,$strSql);                         
                        // assigning records to $data varaible, after executing the query
                        while($rs = mysqli_fetch_array($result))
                        { 
                            $slide_name = $rs['slide_name'];
                            $slide_image = $rs['slide_image'];
                            echo "
                                <div class='item active'>
                                    <img src='admin_area/slides_images/$slide_image' class='center'>
                                </div>
                            ";
                        }
                        $strSql = "SELECT * FROM SLIDER LIMIT 1,2";                         
                        $result = mysqli_query($connection,$strSql);                         
                        // assigning records to $data varaible, after executing the query
                        while($rs = mysqli_fetch_array($result))
                        { 
                            $slide_name = $rs['slide_name'];
                            $slide_image = $rs['slide_image'];
                            echo "
                                <div class='item'>
                                    <img src='admin_area/slides_images/$slide_image' class='center'>
                                </div>
                            ";
                        }
                    
                    ?>
            
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
                </a>
        </div>
    </div><!--Finish container -->

    <div id="notes"> <!-- notes advantages -->
        <div class="container"> <!--container begin -->

            <div class="same-height-row"> <!-- same-height-row begin -->
                <div class="col-sm-4"> <!--col-sm-4 Begin -->
                        <div class="icon"> <!--icon begin-->
                            <i class="fa fa-heart" style="font-size:48px;color:green"></i>
                        </div><!--icon finish-->
                    <div class="box same-height"> <!--box same-height begin-->
                       
                        <h3><a href="#"> We want to make you shine </a></h3>
                        <p> And to become your own muse.  </p>                    
                    </div> <!--box same-height finish-->
                </div> <!-- col-sm-4 Finish -->
                <div class="col-sm-4"> <!--col-sm-4 Begin -->
                        <div class="icon"> <!--icon begin-->
                           <i class="fa fa-truck" style="font-size:48px;color:green"></i>
                        </div><!--icon finish-->
                    <div class="box same-height"> <!--box same-height begin-->
                        <h3><a href="#"> Free Shipping NO Minimum  </a></h3>
                        <p> on every purchase. </p>                    
                    </div> <!--box same-height finish-->
                </div> <!-- col-sm-4 Finish -->

                <div class="col-sm-4"> <!--col-sm-4 Begin -->
                     <div class="icon"> <!--icon begin-->
                              <i class="fa fa-refresh" style="font-size:48px;color:green"></i>
                    </div><!--icon finish-->
                    <div class="box same-height"> <!--box same-height begin-->
                        <h3><a href="#"> Easy Return </a></h3>
                        <p> If your jewlery doesn't suit you, order a new one. </p>                    
                    </div> <!--box same-height finish-->
                </div> <!-- col-sm-4 Finish -->

            </div> <!--same-height-row finish-->
        </div> <!--container finish-->
    </div> <!--Finish notes -->

    <div id="categories"> <!--categories begin-->
        <div class="box"> <!--Box begin -->
            <div class="container"> <!--container begin-->
                <div class="col-md-12" ><!-- col-md-12 begin-->
                    <h2>
                        Shop By Category
                    </h2>
                </div><!-- col-md-12 finish-->
            </div><!--Container finish-->
        </div><!-- box finish --> 
    </div> <!-- categories finish-->
    
    <!--    -->
    <div id="content1" class="container"><!---container begin-->
        <div class="row"><!--row begin-->
            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"> <!--product begin-->
                    <div class="text"> <!--text begin -->
                        <h3>
                            <a href="details.php">
                                Necklace
                            </a>
                        </h3>
                    </div> <!-- text finish-->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/admin_images/necklace.png" alt="Product 1">
                    </a>
                </div><!-- product finish-->
            </div><!--col-sm-4 col-sm-6 single finish-->
            <div class="col-sm-4  col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"> <!--product begin-->
                    <div class="text"> <!--text begin -->
                        <h3>
                            <a href="details.php">
                                Ring
                            </a>
                        </h3>
                    </div> <!-- text finish-->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/admin_images/ring.png" alt="Product 1">
                    </a>
                </div><!-- product finish-->
            </div><!--col-sm-4 col-sm-6 single finish-->
            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"> <!--product begin-->
                    <div class="text"> <!--text begin -->
                        <h3>
                            <a href="details.php">
                                Earring
                            </a>
                        </h3>
                    </div> <!-- text finish-->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/admin_images/earing.png" alt="Product 1">
                    </a>
                </div><!-- product finish-->
            </div><!--col-sm-4 col-sm-6 single finish-->
            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"> <!--product begin-->
                    <div class="text"> <!--text begin -->
                        <h3>
                            <a href="details.php">
                                Watch
                            </a>
                        </h3>
                    </div> <!-- text finish-->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/admin_images/watches.png" alt="Product 1">
                    </a>
                </div><!-- product finish-->
            </div><!--col-sm-4 col-sm-6 single finish-->
        </div> <!--row finish-->
    </div> <!--container finish-->

    <div id="latest"> <!--categories begin-->
        <div class="box"> <!--Box begin -->
            <div class="container"> <!--container begin-->
                <div class="col-md-12" ><!-- col-md-12 begin-->
                    <h2>
                        Shine 2020 
                    </h2>
                </div><!-- col-md-12 finish-->
            </div><!--Container finish-->
        </div><!-- box finish --> 
    </div> <!-- categories finish-->

    <div id="content2" class="container"><!---container begin-->
        <div class="row"><!--row begin-->
            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"> <!--product begin-->
                    <div class="text"> <!--text begin -->
                        <h3>
                            <a href="details.php">
                                Diamond Earring
                            </a>
                        </h3>
                    </div> <!-- text finish-->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/earring2020.png" alt="Product 1">
                    </a>
                    <p class="price">$100 </p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"> Details </span></a>
                        <a href="details.php" class= "btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                    Add To cart
                            </i>
                        </a>
                    </p>
                </div><!-- product finish-->
            </div><!--col-sm-4 col-sm-6 single finish-->
            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"> <!--product begin-->
                    <div class="text"> <!--text begin -->
                        <h3>
                            <a href="details.php">
                                Diamond Ring
                            </a>
                        </h3>
                    </div> <!-- text finish-->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/ring2020.png" alt="Product 1">
                    </a>
                    <p class="price">$115 </p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"> Details </a>                       
                        <a href="details.php" class= "btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                    Add To cart
                            </i>
                        </a>
                    </p>
                </div><!-- product finish-->
            </div><!--col-sm-4 col-sm-6 single finish-->
            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"> <!--product begin-->
                    <div class="text"> <!--text begin -->
                        <h3>
                            <a href="details.php">
                                Diamond Watch
                            </a>
                        </h3>
                    </div> <!-- text finish-->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/watch2020.png" alt="Product 1">
                    </a>
                    <p class="price">$150 </p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"> Details </a>
                        <a href="details.php" class= "btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                    Add To cart
                            </i>
                        </a>
                    </p>
                </div><!-- product finish-->
            </div><!--col-sm-4 col-sm-6 single finish-->
            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"> <!--product begin-->
                    <div class="text"> <!--text begin -->
                        <h3>
                            <a href="details.php">
                                Diamond Necklace
                            </a>
                        </h3>
                    </div> <!-- text finish-->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/necklace2020.png" alt="Product 1">
                    </a>
                    <p class="price">$200 </p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"> Details </a>
                        <a href="details.php" class= "btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                    Add To cart
                            </i>
                        </a>
                    </p>
                </div><!-- product finish-->
            </div><!--col-sm-4 col-sm-6 single finish-->
        </div> <!--row finish-->
    </div> <!--container finish-->

    <?php 
        include("includes/footer.php");
    ?>

    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
</body>
</html>