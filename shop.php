<?php
    $active = 'Shop';
    require_once 'includes/header.php';
?>

    <div id="content-shop"> <!-- content-shop Begin -->
        <div class="container"><!--Container begin-->
            <div class="col-md-12"><!--col-md-12 begin-->
                <ul class="breadcrumb"> <!--breadcrumb Begin-->
                    <li>
                        <a href="index.php"> Home </a>
                    </li>
                    <li>
                        Shop
                    </li>   
                </ul>
            </div> <!--col-md-12 finish-->
            <div class="col-md-3"> <!--col-md-3 Begin -->
                <?php 
                     include("includes/sidebar.php");
                ?>
            </div> <!--col-md-3 Finish -->

            <div class="col-md-9"> <!--col-md-9 begin -->
                <?php 
                    if(!isset($_GET['category_id'])){
                        echo <<<EOD
                            <div class="box">
                                <p id="text_special">
                                    Make your special moments last forever with a Shine jewelery. Add the charms that tell your unique story and change them as often as you like to keep your look fresh and fun. Capture the highlights of your story.
                                </p>
                            </div> <!-- box finish-->
                        EOD;
                    }                
                ?>
                <div class="row"> <!-- row begin -->
                    <?php
                        //daca nu am ales nicio categrie, pun cate 8 produse pe pagina
                        if(!isset($_GET['category_id'])){
                           
                            $per_page = 6;
                            //daca am o pagina trimisa ca parametru in URL
                            if(isset($_GET['page'])){                            
                                $page = $_GET['page'];
                            }else{
                                $page=1;
                            }
                            $start_from = ($page-1) * $per_page;                      

                            $get_products = "SELECT * from products order by 1 LIMIT $start_from, $per_page";
                            $display_products = mysqli_query($connection, $get_products);
                            while($row_products = mysqli_fetch_array($display_products)){
                                $product_id = $row_products['product_id'];
                                $product_title = $row_products['product_name'];
                                $product_price = $row_products['price'];
                                $product_image1 = $row_products['product_image1'];
                                echo <<<EOD
                                    <div class="col-md-4 col-sm-6 center-responsive"> <!--col md-4 col-sm-6 center-responsive begin-->
                                        <div class="product"> <!--product begin-->
                                            <div class="text"> <!--text begin -->
                                                <h3>
                                                    <a href="details.php?pro_id=$product_id">
                                                        $product_title
                                                    </a>
                                                </h3>
                                            </div> <!-- text finish-->                
                                            <a href="details.php?pro_id=$product_id">
                                                <img class="img-responsive" src="admin_area/product_images/$product_image1">
                                            </a>
                                            <p class="price"> $$product_price </p>
                                            <p class="button">
                                             <a href="details.php?pro_id=$product_id" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"> Details </span></a>
                                                <a href="details.php" class= "btn btn-primary">
                                                    <i class="fa fa-shopping-cart">
                                                            Add To cart
                                                    </i>
                                                </a>
                                            </p>
                                        </div><!-- product finish-->
                                    
                                    </div> <!--col md-4 col-sm-6 center-responsive finish-->                                                      
                        
                                EOD;
                            }                        
                    ?>
                   
                </div> <!-- row finish-->
                <div class="center-block"> <!-- center-block begin -->
                    <ul class="pagination"> <!-- pagination begin -->
                        <?php
                            $sql_query = "SELECT * from products";
                            $result = mysqli_query($connection,$sql_query);
                            //total number of rows
                            $total_rows = mysqli_num_rows($result);
                            //Round fractions up
                            $total_pages = ceil($total_rows/$per_page);
                            echo <<<EOD
                                <li> 
                                    <a href='shop.php?page=1'> <<< </a>
                                </li>
                            EOD;
                         
                            for($i=1; $i<=$total_pages; $i++)
                            {
                                echo <<<EOD
                                <li> 
                                    <a href='shop.php?page=$i'> $i </a>
                                </li>
                            EOD;

                            }
                            echo <<<EOD
                                <li> 
                                    <a href='shop.php?page=$total_pages'> >>> </a>
                                </li>
                            EOD;
                        }
                        ?>
                    </ul> <!-- pagination finish --> 
                    
                </div> <!-- center-block finish -->

                
                        <?php GetProductsFromCategory();?>
                

            </div><!-- col-md-9 finish-->

        </div><!--container finish-->
    </div><!--content-shop finish-->
    
    <?php 
        include("includes/footer.php");
    ?>

    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
</body>
</html>