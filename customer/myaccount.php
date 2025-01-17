<?php
    include("includes/header.php");
?>
  
    <div id="content-shop"> <!-- content-shop Begin -->
        <div class="container"><!--Container begin-->
            <div class="col-md-12"><!--col-md-12 begin-->
                <ul class="breadcrumb"> <!--breadcrumb Begin-->
                    <li>
                        <a href="index.php"> Home </a>
                    </li>
                    <li>
                        My Account
                    </li>   
                </ul>
            </div> <!--col-md-12 finish-->
            
            <div class="col-md-3"> <!--col-md-3 Begin -->
                <?php 
                     include("includes/sidebar.php");
                ?>
            </div> <!--col-md-3 Finish -->

            <div class="col-md-9"> <!-- col-md-9 begin -->
                <div class="box"> <!-- box begin -->
                    <?php
                        if( isset($_GET['my_orders'])){
                            include("my_orders.php");
                        }
                        if( isset($_GET['pay_offline'])){
                            include("pay_offline.php");
                        }
                        if( isset($_GET['edit_account'])){
                            include("edit_account.php");
                        }
                        if( isset($_GET['change_pass'])){
                            include("change_pass.php");
                        }
                        if( isset($_GET['delete_account'])){
                            include("delete_account.php");
                        }

                    ?>
                </div> <!--box finish -->
            </div> <!-- col-md-9 finish -->


        </div> <!-- container finish -->
    </div> <!-- content-shop finish-->

    <?php 
        include("includes/footer.php");
    ?>

    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
</body>
</html>