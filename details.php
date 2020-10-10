<?php
    $active='details';
    require_once 'includes/header.php';

?>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
    <div id="content-product"> <!-- content-product Begin -->
        <div class="container-fluid"><!--Container begin-->
            <div class="col-md-12"><!--col-md-12 begin-->
                <ul class="breadcrumb"> <!--breadcrumb Begin-->
                    <li>
                        <a href="index.php"> Home </a>
                    </li>
                    <li>
                        <a href="shop.php"> Shop </a>
                    </li>   
                    <li>                        
                        <a href="shop.php?category_id=<?php echo $category ?>"> <?php echo $category_name;?> </a>
                    </li>   
                    <li>
                        <?php echo $product_name; ?>
                    </li>  
                </ul>
            </div> <!--col-md-12 finish-->
           
            <div class="col-md-3"> <!--col-md-3 Begin -->
                <?php 
                     include("includes/sidebar.php");
                ?>
            </div> <!--col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               <h2> <?php echo $product_name; ?> </h2>  
               <div id="productMain" class="row"><!-- row Begin -->
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div id="mainImage"><!-- #mainImage Begin -->
                       <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!--carousel slide begin-->
                            <ol class="carousel-indicators"> <!-- carousel-indicators begin-->
                                <li data-target="#myCarousel" data-slide-to="0" class="active"> </li>
                                <li data-target="#myCarousel" data-slide-to="1"> </li>
                                <li data-target="#myCarousel" data-slide-to="2"> </li>
                            </ol> <!--carousel-indicators finish-->            
                            <div class="carousel-inner">
                                <div class="item active">
                                    <center><img class="img-responsive" src="admin_area/product_images/<?php echo $product_image1;?>"></center>
                                </div>            
                                <div class="item">
                                    <center><img class="img-responsive"  src="admin_area/product_images/<?php echo $product_image2;?>"></center>
                                </div>            
                                <div class="item">
                                    <center><img class="img-responsive"  src="admin_area/product_images/<?php echo $product_image3;?>"></center>
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
                       </div><!-- mainImage Finish -->
                   </div><!-- col-sm-6 Finish -->
                   
                   <div class="col-sm-6" > <!--col-sm-6 begin -->
                        <p> 
                             <?php echo $description; ?>
                        </p>
                        <div id="box"> 
                            <i class="fa fa-dollar" style="font-size:24px">
                                <?php echo $product_price ?>
                            </i>
                        </div>
                        <hr>
                           
                           <?php add_cart(); ?>
                           
                           <form action="details.php?add_cart=<?php echo $product_id; ?>"" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
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
                                                    <select name="product_size" class="form-control" required><!-- form-control Begin -->
                                                            <option disabled selected>Select A Size</option>
                                                            <option> Small</option>
                                                            <option> Medium</option>
                                                            <option> Large</option>
                                                        </select> 
                                                    </div> <!--col-md-4 finish -->
                                                    <div class="space col-md-4"> 
                                                        <i class="fa fa-info" style="font-size:10px"></i>
                                                        <a href="#"> Size Chart</a>
                                                    </div>                                                
                                                                   
                                </div><!-- form-group finish -->                        
                               
                               
                               <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>
                               
                           </form><!-- form-horizontal Finish -->
                           
                       
                       
                       
                   </div><!-- col-sm-6 Finish -->
                   
                   
               </div><!-- row Finish -->
               
                <hr id="separator">                        
                <div id="details"><!-- details Begin -->
                    <div class="row">
                    <h2> Product Information </h2>                
                        <div class="col-md-7">
                            <h4>Collection</h4>                       
                                Shine Signature 2020                     
                            <h4>Product Type</h4>                 
                                <?php echo $category_name  ;?>                                        
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
                    </div> <!--row finish -->   

                 <hr id="separator">
                </div> <!--details finish -->
               
               <div id="row same-heigh-row"> <!-- #row same-heigh-row Begin -->  
                    <h2> You may also like </h2>    
                   
                   <?php 
                   
                    $get_products = "select * from products order by rand() LIMIT 0,3";
                   
                    $run_products = mysqli_query($connection,$get_products);
                   
                   while($row_product=mysqli_fetch_array($run_products)){
                       
                        $product_id = $row_product['product_id'];
                        $product_name = $row_product['product_name'];
                        $product_image1 = $row_product['product_image1'];
                        $product_price = $row_product ['price'];
                       
                        echo <<<EOD
                        <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                            <div class="product same-height"><!-- product same-height Begin -->
                                <a href="details.php?pro_id=$product_id">
                                    <img class="img-responsive" src="admin_area/product_images/$product_image1">
                                    </a>
                                    
                                    <div class="text"><!-- text Begin -->
                                        <h3><a href="details.php?pro_id=$product_id">$product_name</a></h3>
                                        <p class='price'> $ $product_price </p>
                                        
                                    </div><!-- text Finish -->
                                    
                            </div><!-- product same-height Finish -->                         
                                      
                     </div><!-- #row same-heigh-row Finish -->

                    EOD;
                       
                   }
                   
                   ?>
                   
               
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
   
    
    
</body>
</html>
