<?php       
        $connection = require_once 'includes/dbconn.php';

        
    
        function getIpAddress(){
            switch(true){
                case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
                case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
                case(!empty($_SERVER['HTTP_X_FORWARDED_IP'])) : return $_SERVER['HTTP_FORWORDED_IP'];
                default : return $_SERVER['REMOTE_ADDR'];
            }
        }
        
        function add_cart() {
            
            global $connection;
            if(isset($_GET['add_cart'])){
                echo 'aici';
                $ip_addre = getIpAddress();
                $product_id = $_GET['add_cart'];
                $product_quantity = $_POST['product_qty'];
                $product_size = $_POST['product_size'];
                //verific daca nu adaug de 2 ori in cos acelasi produs (atentionez)
                $check_product = "SELECT * from bag where ip_addre = $ip_addre AND product_id = $product_id";
                $run_check = mysqli_query(connection, $check_product);
                
                
                if(mysqli_num_rows($run_check)>0){
                    echo "<script> alert('This product has already added in cart') </script>";
                    
                    
                }else{
                
                    $query = "INSERT into bag (product_id,ip_addre,quantity,size) values ('$product_id', '$ip_addre', '$product_quantity', '$product_size')";
                    $run_query = mysqli_query($connection, $query);                    
            
                }
                    
            }
                
        }

        

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
                    $description = $row_products['description'];
                    
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
                                                                Add To Bag
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

        function NumberofItems(){
    
            global $connection;            
            $ip_addre = getIpAddress();           
            $sql = "SELECT * from bag WHERE ip_addre = '$ip_addre'";            
            $run_items = mysqli_query($connection, $sql);            
            $count_items = mysqli_num_rows($run_items);            
            echo $count_items;            
        }
        
        
        
        function ComputeThePrice(){
            
            global $connection;            
            $ip_addre = getIpAddress();            
            $total = 0;            
            $sql = "SELECT * from products p
                    JOIN bag b
                        on p.product_id = b.product_id
                        WHERE ip_addre = '$ip_addre'";
            
            $run_cart = mysqli_query($connection,$sql);
            
            while($row=mysqli_fetch_array($run_cart)){
                            
                $quantity = $row['quantity'];
                $price = $row['price'];
                
                
                $sub_total = $row['quantity'] * $row['price'];                    
                $total += $sub_total;
                    
                }
                echo $total;
        }             

        
?>
