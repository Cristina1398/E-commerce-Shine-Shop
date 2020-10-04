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
                                <a href="details.php?product_id=$product_id">
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
                                        <a href="details.php?product_id=$product_id" class= "btn btn-primary">
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
                                            <a href="details.php?product_id=$product_id">
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
                                                    <a href="details.php?product_id=$product_id" class= "btn btn-primary">
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
?>