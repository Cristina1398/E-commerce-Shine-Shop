<?php
    $active='details';
    include("includes/header.php");

?>
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
                        <a href="shop.php?category_id=$category"> <?php echo $category_name; ?> </a>
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
         
            <div class="col-md-9"> <!--col-md-9 begin -->
                <?php
                    GetDetails();
                ?>               
            </div><!--col-md-9 finish-->    
        </div><!--container finish-->
    </div><!--content-product finish-->
    <hr>
    
    <?php 
        include("includes/footer.php");
    ?>

    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
    
    
</body>
</html>