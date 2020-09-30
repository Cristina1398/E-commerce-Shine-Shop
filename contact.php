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
   
    <div id="content-contact"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Contact Us
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
                      
            <div class="col-md-12"><!-- col-md-9 Begin -->               
                <div id="contact" class="container-fluid">
                    <h3 class="text-center">Contact</h3>
                    <p class="text-center"><em>Contact us and we'll get back to you within 24 hours.</em></p>

                    <div class="row">
                        <div class="col-md-4">
                            <p><span class="glyphicon glyphicon-map-marker"></span> Cluj-Napoca,Romania</p>
                            <p><span class="glyphicon glyphicon-phone"></span> Phone: 0231622312</p>
                            <p><span class="glyphicon glyphicon-envelope"></span> Email: myemail@shine.com</p>
                        </div>

                        <div class="col-md-8">
                        <form action="contact.php" method="post"><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Name</label>
                               
                               <input type="text" class="form-control" name="name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Email</label>
                               
                               <input type="text" class="form-control" name="email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Subject</label>
                               
                               <input type="text" class="form-control" name="subject" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Message</label>
                               
                               <textarea name="message" class="form-control"></textarea>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="submit" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i>Send Message
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                        </div>
                    </div>
                </div>
               
            </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>