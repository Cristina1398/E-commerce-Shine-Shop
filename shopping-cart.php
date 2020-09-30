<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shine</title>
    <!-- Bootstrap 4 for this page -->
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
                    <li>
                        <a href="shop.php"><span class="glyphicon glyphicon-euro"></span> Shop</a>
                    </li>
                   
                    <li class="active">
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
  

    <!-- style="background-color:blue"-->

    <div id="content-cart"> <!-- content-product Begin -->
        <div class="container-fluid"><!--Container begin-->
            <div class="col-md-12"><!--col-md-12 begin-->
                <ul class="breadcrumb"> <!--breadcrumb Begin-->
                    <li>
                        <a href="index.php"> Home </a>
                    </li>
                    <li>
                        Your Bag
                    </li>      
                </ul>
            </div> <!--col-md-12 finish-->            

            <div id="cart" class="col-md-12"><!-- col-md-12 Begin -->
                <h1> Your Bag </h1>
                <h2>  Contact-free delivery. </h2>
                <h3>  All online orders contain a gift receipt | price will not be displayed </h3>
               
                <div class="container"><!-- box Begin -->                   
                   <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form Begin -->         
                                      
                            <div class="table-responsive"> <!-- table-responsive begin -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="p-2 px-3 text-uppercase">Product</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Price</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Quantity</div>
                                            </th>
                                          
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Remove</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Size</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Sub-Total</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="border-0">
                                                <div class="p-2">
                                                    <img src="admin_area/product_images/ring1.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex Originals</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="border-0 align-middle"><strong>$79.00</strong></td>
                                            <td class="border-0 align-middle"><strong>3</strong></td>
                                            <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                                            <td class="border-0 align-middle"><strong>Medium</strong></td>
                                            <td class="border-0 align-middle"><strong>$79.00</strong></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">
                                                    <div class="p-2">
                                                    <img src="admin_area/product_images/ring2020.png" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Lumix camera lense</a></h5><span class="text-muted font-weight-normal font-italic">Category: Electronics</span>
                                                    </div>
                                                    </div>
                                            </th>
                                            <td class="align-middle"><strong>$79.00</strong></td>
                                            <td class="align-middle"><strong>3</strong></td>
                                            <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a> </td>
                                            <td class="border-0 align-middle"><strong>Medium</strong></td>
                                            <td class="border-0 align-middle"><strong>$79.00</strong></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">
                                                <div class="p-2">
                                                <img src="admin_area/product_images/necklace3.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                <div class="ml-3 d-inline-block align-middle">
                                                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Gray Nike running shoe</a></h5><span class="text-muted font-weight-normal font-italic">Category: Fashion</span>
                                                </div>
                                                </div>
                                            </th>
                                            <td class="align-middle"><strong>$79.00</strong></td>
                                            <td class="align-middle"><strong>3</strong></td>
                                            <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a> </td>
                                            <td class="border-0 align-middle"><strong>Medium</strong></td>
                                            <td class="border-0 align-middle"><strong>$79.00</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- table-responsive finish -->
                       
                            <div class="box-footer"><!-- box-footer Begin -->
                           
                                <div class="pull-left"> <!-- pull-left Begin -->
                                        <a href="index.php" class="btn btn-default"><!-- btn btn-default Begin -->
                                                <i class="fa fa-chevron-left"></i> Continue Shopping                                    
                                        </a><!-- btn btn-default Finish -->                               
                                </div> <!-- pull-left Finish -->
                                
                                <div class="pull-right"><!-- pull-right Begin -->                               
                                    <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!-- btn btn-default Begin -->                                   
                                        <i class="fa fa-refresh"></i> Update Cart                                   
                                    </button><!-- btn btn-default Finish -->                               
                                    <a href="checkout.php" class="btn btn-primary">                                   
                                        Proceed Checkout <i class="fa fa-chevron-right"></i>                                   
                                    </a>                               
                                </div><!-- pull-right Finish -->
                           
                            </div><!-- box-footer Finish -->
                       
                    </form><!-- form Finish -->
                   
                </div><!-- container Finish -->          
            </div><!-- col-md-12 Finish -->         
        </div><!-- container Finish -->
        <hr id="separator">
        <div class="container"> <!--container Begin -->         
            <div class="row"> 
                <div id="summary" class="col-md-7"> <!--box Begin -->
                    
                    <div class="box-header"><!-- box-header Begin -->
                        
                        <h2>Summary</h3>
                        
                    </div><!-- box-header Finish -->
                    
                    <p class="text-muted"><!-- text-muted Begin -->
                        
                        Shipping and additional costs are calculated based on value you have entered
                        
                    </p><!-- text-muted Finish -->
                    
                    <div class="table-responsive"><!-- table-responsive Begin -->
                        
                        <table class="table"><!-- table Begin -->
                            
                            <tbody><!-- tbody Begin -->
                                
                                <tr><!-- tr Begin -->
                                    
                                    <td> Subtotal </td>
                                    <th> $200 </th>
                                    
                                </tr><!-- tr Finish -->
                                
                                <tr><!-- tr Begin -->
                                    
                                    <td> Delivery </td>
                                    <td> $0 </td>
                                    
                                </tr><!-- tr Finish -->
                                
                                <tr><!-- tr Begin -->
                                    
                                    <td> Delivery Discount </td>
                                    <th> $0 </th>
                                    
                                </tr><!-- tr Finish -->
                                
                                <tr class="total"><!-- tr Begin -->
                                    
                                    <td> Total </td>
                                    <th> $200 </th>
                                    
                                </tr><!-- tr Finish -->
                                
                            </tbody><!-- tbody Finish -->
                            
                        </table><!-- table Finish -->
                        
                    </div><!-- table-responsive Finish -->
                    
                </div><!-- box Finish -->

                <div class="col-md-5" id="coupon"> <!-- col-md-4 begin -->
                        <h2>Coupon code</h2> 
                        <div>
                            <p>If you have a coupon code, please enter it in the box below</p>
                                <div class="input-group center-block border rounded-pill"> <!-- input-group mb-4 border rounded-pill p-2 begin  -->
                                    <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                                        <div> <!-- input-group-append border-0 begin -->
                                            <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                                        </div> <!-- input-group-append border-0 finish -->
                                </div> <!-- input-group mb-4 border rounded-pill p-2 finish  -->
                        </div> <!-- box finish -->
                </div>
                        
               
            </div> <!-- row finish -->

        </div> <!--container finish -->             
    </div> <!-- content-product Begin -->


    
    <?php 
        include("includes/footer.php");
    ?>  
</body>
</html>