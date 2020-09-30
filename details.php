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

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
                    <li>
                        <a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                    <li>
                        <a href="customer/myaccount.php"><span class="glyphicon glyphicon-user"></span> My Account</a>
                    </li>
                    <li class="active">
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
    <!--style="background-color:blue" -->

    <div id="content-product"> <!-- content-product Begin -->
        <div class="container-fluid"><!--Container begin-->
            <div class="col-md-12"><!--col-md-12 begin-->
                <ul class="breadcrumb"> <!--breadcrumb Begin-->
                    <li>
                        <a href="index.php"> Home </a>
                    </li>
                    <li>
                        Shop
                    </li>   
                    <li>
                        Ring 2020
                    </li>   
                </ul>
            </div> <!--col-md-12 finish-->
            <div class="col-md-3"> <!--col-md-3 Begin -->
                <?php 
                     include("includes/sidebar.php");
                ?>
            </div> <!--col-md-3 Finish -->
         
            <div class="col-md-9"> <!--col-md-9 begin -->
                <h2> Ring 2020 </h2>
                <div id="productMain" class="row"> <!--productMain begin -->                
                    <div class="col-sm-6"> <!--col-sm-6 begin-->
                        <div id="mainImage"> <!--mainImage begin-->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!--carousel slide begin-->
                                <ol class="carousel-indicators"> <!-- carousel-indicators begin-->
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"> </li>
                                    <li data-target="#myCarousel" data-slide-to="1"> </li>
                                    <li data-target="#myCarousel" data-slide-to="2"> </li>
                                </ol> <!--carousel-indicators finish-->

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center><img class="img-responsive" src="admin_area/product_images/ring2020.png" alt="ring2"></center>
                                    </div>

                                    <div class="item">
                                    <center><img class="img-responsive"  src="admin_area/product_images/ring2020.png" alt="ring2"></center>
                                    </div>

                                    <div class="item">
                                    <center><img class="img-responsive"  src="admin_area/product_images/ring2020.png" alt="ring2"></center>
                                    </div>
                                </div>

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!--left carousel-control begin -->
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only"> Previous </span>
                                </a> <!--left carousel-control finish-->

                                <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!--right carousel-control begin -->
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only"> Next </span>
                                </a> <!--right carousel-control finish -->
                            </div><!--carousel slide finish-->
                        </div><!--mainImage finish-->
                    </div><!--col-sm-6 finish-->                
                    
                    <div class="col-sm-6" > <!--col-sm-6 begin -->
                        <p> 
                             Bring a touch of shimmer in the Pink Sparkling Crown Stud Earrings. Hand-finished (14k rose gold-plated unique metal blend), these delicate studs are inspired by the crown detail in the Crown O monogram. Each of the two blush pink crystals is claw-set in a setting made to resemble a crown. Wear these with other pieces hand-finished in Rose for a look fit for a queen.
                        </p>
                        <div id="box"> 
                            <i class="fa fa-dollar" style="font-size:24px">
                            200
                            </i>
                        </div>
                        <hr>
                        <form action="details.php" class="form-horizontal" method="post"><!-- form-horizontal begin-->
                            <div class="form-group"> <!-- form-group begin -->
                                <label for="" class="col-md-3 control-label"> Quantity </label>
                                <div class="col-md-5"> <!-- col-md-7 begin-->
                                        <select name="product_qty" id="" class="form-control">
                                            <option>1 </option>
                                            <option>2</option>
                                            <option>3 </option>
                                            <option>4</option>
                                            <option>5 </option>
                                        </select> <!-- select finish -->
                                </div> <!-- col-md-7 finish -->
                            </div> <!-- form-group finish -->

                            <div class="form-group"> <!-- form-group begin -->
                                     <label class="col-md-3 control-label"> Product Size </label>
                               
                                    <div class="col-md-5"> <!-- col-md-4 begin-->
                                        <select name="product_size" class="form-control">
                                            <option>Select A Size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select> 
                                    </div> <!--col-md-4 finish -->
                                    <div class="space col-md-4"> 
                                        <i class="fa fa-info" style="font-size:10px"></i>
                                        <a href="#"> Size Chart</a>
                                    </div> 
                                    
                                                        
                            </div><!-- form-group finish -->   
                            
                            <p class="button">
                                <a href="details.php" class= "btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                            Add To Bag
                                    </i>
                                </a>
                            </p>

                        </form> <!-- form-horizontal finish-->
                    </div><!--col-sm-6 finish -->
                </div><!--row finish-->

                <hr id="separator">
            
                <div id="details"><!-- details Begin -->
                    <div class="row">
                       <h2> Product Information </h2>                
                       <div class="col-md-7">
                            <h4>Collection</h4>                       
                                Shine Signature 2020                           

                            <h4>Product Type</h4>                 
                                Ring                                                  

                            <h4>Metal</h4>                 
                                14k Rose Gold-plated unique metal blend                             
                        </div>
                        <div class="col-md-5">
                            <h4>Stone</h4>                       
                                Crystals                         

                            <h4>Dimensions</h4>
                                Depth:2.8 mm
                                Height:5 mm
                                Width: 6mm                           

                            <h4> Occasion </h4>
                                Anniversary, Graduation, Wedding                        
                        </div>          
                    </div>

                    <hr id="separator">
                              
                </div> <!--details finish -->  

                <div id="row same-heigh-row"> <!-- #row same-heigh-row Begin -->  
                    <h2> You may also like </h2>                                  
                    <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/watch1.png" alt="Product 1">
                            </a>
                            
                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">Watch 2020 Collection</a></h3>
                                
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                   <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/earring2020.png" alt="Product 2">
                            </a>
                            
                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">Earring 2020 Collection</a></h3>
                               
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                   <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/necklace1.jpg" alt="Product 6">
                            </a>
                            
                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">Bianca's necklace</a></h3>
                                
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
               </div><!-- #row same-heigh-row Finish -->
                
               
            </div><!--col-md-9 finish-->    
        </div><!--container finish-->
    </div><!--content-product finish-->
    <hr>
    
    <?php 
        include("includes/footer.php");
    ?>

    
   
    
    
</body>
</html>