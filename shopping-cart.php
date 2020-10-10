<?php
    $active = 'Shopping-cart';
    require_once 'includes/header.php';
?>



    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
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
                <h3> You Have <b><?php echo NumberofItems(); ?> </b> Products In your Bag </h4>

               
                <div class="container"><!-- box Begin -->                   
                   <form action="shopping-cart.php" method="post" enctype="multipart/form-data"><!-- form Begin -->         
                                      
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
                                       
                                    <?php 
                                        $ip_addre = getIpAddress();  
                                        $sql = "SELECT *
                                                from products p
                                                join bag b
                                                     on p.product_id = b.product_id
                                                join category_products cp
                                                     on p.category = cp.category_id
                                                WHERE ip_addre = '$ip_addre'";                                    
                                        $run_cart = mysqli_query($connection,$sql);                                    
                                        while($row=mysqli_fetch_array($run_cart)){
                                            $product_id = $row['product_id'];
                                            $product_name = $row['product_name'];
                                            $category_name = $row['category_name'];                                              
                                            $quantity = $row['quantity'];
                                            $price = $row['price']; 
                                            $size = $row['size']; 
                                            $product_image1 = $row['product_image1'];
                                            $subtotal = $quantity * $price; 
                                            echo <<<EOD
                                            <tr>
                                            <th scope="row">
                                                <div class="p-2">
                                                <img src="admin_area/product_images/$product_image1" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                <div class="ml-3 d-inline-block align-middle">
                                                    <h5 class="mb-0"> <a href="details.php?pro_id=$product_id" class="text-dark d-inline-block">$product_name</a></h5><span class="text-muted font-weight-normal font-italic">Category: $category_name </span>
                                                </div>
                                                </div>
                                            </th>
                                            <td class="align-middle"><strong>$ $price</strong></td>
                                            <td class="align-middle"><strong>$quantity</strong></td>
                                            <td class="align-middle"><button type="submit" name="update" value="$product_id" style="font-size:24px"><i class="fa fa-trash"></i></button></td>
                                            <td class="border-0 align-middle"><strong>$size</strong></td>
                                            <td class="border-0 align-middle"><strong>$ $subtotal</strong></td>
                                            </tr>
                                            EOD;
                                        }
                                    ?>

                                        
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
                                                                 
                                    <a href="checkout.php" class="btn btn-primary">                                   
                                        Proceed Checkout <i class="fa fa-chevron-right"></i>                                   
                                    </a>                               
                                </div><!-- pull-right Finish -->
                           
                            </div><!-- box-footer Finish -->
                       
                    </form><!-- form Finish -->
                    <?php
                    function UpdateBag(){
                        global $connection; 
                        if(isset($_POST['update'])){                            
                            $a= $_POST['update'];
                            echo $a;                             
                            $ip_addre = getIpAddress();          
                            $sql = "DELETE from bag where product_id =$a AND ip_addre = '$ip_addre'";
                            $run_delete = mysqli_query($connection, $sql);
                            if($run_delete){
                                
                                echo "<script> window.open('shopping-cart.php','_self')</script>";
                                
                            }
                            
                        }
                        
                    }
                    
                
               
                    echo @$up_cart = UpdateBag();
                
                    ?>
                   
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
                                    <th> <?php ComputeThePrice(); ?> </th>
                                    
                                </tr><!-- tr Finish -->
                                
                                <tr><!-- tr Begin -->
                                    
                                    <td> Delivery </td>
                                    <td> $10 </td>
                                    
                                </tr><!-- tr Finish -->
                                
                                <tr><!-- tr Begin -->
                                    
                                    <td> Delivery Discount </td>
                                    <th> $0 </th>
                                    
                                </tr><!-- tr Finish -->
                                
                                <tr class="total"><!-- tr Begin -->
                                    
                                    <td> Total </td>                                    
                                    <th> <?php ComputeThePrice();?> </th>
                                    
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