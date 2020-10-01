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
?>