<?php       
        $connection = require_once 'includes/dbconn.php';
        
        function Display_products(){
            global $connection;
            // vreau sa afisez 4 produse, afisez intai ultimele adaugate
             $strSql = "SELECT * from products order by 1 DESC limit 0,4";
             $run_products =  mysqli_query($connection, $strSql); 
          
            while($row_products = mysqli_fetch_array($run_products))
            {
                $product_id = $row_products['product_id'];
                $product_title = $row_products['product_name'];
                $product_price = $row_products['price'];
                $product_image1 = $row_products['product_image1'];
                
                echo <<<EOD
                    <div class="col-md-4 col-sm-6 single">
                            <div class="product">
                                <a href="details.php?pro_id=$product_id">
                                    <img class="img-responsive" src="admin_area/product_images/$product_image1">
                                </a>
                                <div class="text">
                                    <h3>
                                        <a href="details.php?pro_id=$product_id"> $product_title </a>
                                    </h3>
                                    <p class="price">
                                        $ $product_price
                                    </p>
                                    <p class="button">

                                        <a href="details.php?pro_id=$product_id"" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"> Details </span></a>
                                        <a href="details.php?pro_id=$product_id" class= "btn btn-primary">
                                            <i class="fa fa-shopping-cart">
                                                    Add To cart
                                            </i>
                                        </a>
                                    </p>
                                </div>


                            </div>
                    </div>
EOD;
            }
        }

        function GetCategories() {
            global $connection;
            $strSql = "SELECT * from category_products";
            $run_products =  mysqli_query($connection, $strSql); 
            while($row_product = mysqli_fetch_array($run_products)){
                $category_id = $row_product['category_id'];
                $category_name = $row_product['category_name'];
                             
                echo <<<EOD
                    <li><a href="shop.php?category_id=$category_id"> $category_name </a></li>
                 EOD;

            }

        }

        function GetProductsFromCategory(){
            global $connection;
            if(isset($_GET['category_id'])){   
                    $a= $_GET['category_id'];      
                    //afisez in box-ul de sus numele categoriei si descrierea acesteia
                    $strSql = "SELECT * from category_products where category_id=$a";
                    $run_products =  mysqli_query($connection, $strSql);   
                    $row_products = mysqli_fetch_array($run_products);               
                    $category_name = $row_products['category_name'];
                    $description=$row_products['description'];
                    
                    $strSql = "SELECT * from products p
                                JOIN category_products cp
                                    ON p.category = cp.category_id
                                WHERE category_id=$a
                                order by 1 DESC limit 0,6";
                    $run_products =  mysqli_query($connection, $strSql); 
                    $rows = mysqli_num_rows($run_products);

                    
                    if($rows ==0 ){
                        echo <<<EOD
                            <div class='box' id="text_special">
                                <h1> No products here </h1>
                            </div>
                        EOD;
                    }else{
                        echo <<<EOD
                            <div class="box">
                                <h1 id="text_special"> $category_name <h1>
                                <p id="text_special"> $description </p>
                            </div>
                        EOD;

                        while($row_products = mysqli_fetch_array($run_products))
                        {
                            $product_id = $row_products['product_id'];
                            $product_title = $row_products['product_name'];
                            $product_price = $row_products['price'];
                            $product_image1 = $row_products['product_image1'];
                            
                            echo <<<EOD
                                <div class="col-md-4 col-sm-6 center-responsive">
                                        <div class="product">
                                            <a href="details.php?pro_id=$product_id">
                                                <img class="img-responsive" src="admin_area/product_images/$product_image1">
                                            </a>
                                            <div class="text">
                                                <h3>
                                                    <a href="details.php?pro_id=$product_id"> $product_title </a>
                                                </h3>
                                                <p class="price">
                                                    $ $product_price
                                                </p>
                                                <p class="button">
                                                    <a href="details.php?pro_id=$product_id"" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"> Details </span></a>
                                                    <a href="details.php?pro_id=$product_id" class= "btn btn-primary">
                                                        <i class="fa fa-shopping-cart">
                                                                Add To cart
                                                        </i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                </div>
            EOD;
                        }
                    }
            }
        }
        
        function GetDetails(){
            global $connection;
            if(isset($_GET['pro_id'])){ 
                    $product_id= $_GET['pro_id'];                 
                                        
                    $strSql = "SELECT p.product_id, cp.category_name, p.product_name, p.product_image1, p.product_image2, p.product_image3, p.price, p.description, p.keywords from products p
                        JOIN category_products cp
                        ON p.category = cp.category_id
                         WHERE product_id=$product_id";
                    $run_products =  mysqli_query($connection, $strSql);                
                    
                    $row_products = mysqli_fetch_array($run_products);                    
                            
                            $product_id = $row_products['product_id'];
                            $category_name = $row_products['category_name'];
                            $product_title = $row_products['product_name'];
                            $product_price = $row_products['price'];
                            $product_image1 = $row_products['product_image1'];
                            $product_image2 = $row_products['product_image2'];
                            $product_image3 = $row_products['product_image3'];
                            $description = $row_products['description'];
                            $keywords = $row_products['keywords'];                           
                            
                            echo <<<EOD
                                <h2> $product_title </h2>                          
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
                                                        <center><img class="img-responsive" src="admin_area/product_images/$product_image1"></center>
                                                    </div>            
                                                    <div class="item">
                                                    <center><img class="img-responsive"  src="admin_area/product_images/$product_image2"></center>
                                                    </div>            
                                                    <div class="item">
                                                    <center><img class="img-responsive"  src="admin_area/product_images/$product_image3"></center>
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
                                            $description
                                        </p>
                                        <div id="box"> 
                                            <i class="fa fa-dollar" style="font-size:24px">
                                            $product_price
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
                                                $category_name                                           
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
                            
                                EOD;   
                                
                                    $get_products = "SELECT * from products order by 1 LIMIT 0,3";
                                    $run_products = mysqli_query($connection, $get_products);
                                    while($row_product = mysqli_fetch_array($run_products)){
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


                            
                                }

                                
                            
            
                        
                
        }

        


        

?>
