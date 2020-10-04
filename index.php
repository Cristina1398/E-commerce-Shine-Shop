<?php
    $active='Home';
    include("includes/header.php");    
?>

    <div class="container" id="photos" ><!--Begin container -->
 
            <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <?php

                        // assigning the array to the $data varaible
                     
                        $strSql = "SELECT * FROM SLIDER LIMIT 0,1";                         
                        $result = mysqli_query($connection,$strSql);                         
                        // assigning records to $data varaible, after executing the query
                        while($rs = mysqli_fetch_array($result))
                        { 
                            $slide_name = $rs['slide_name'];
                            $slide_image = $rs['slide_image'];
                            echo "
                                <div class='item active'>
                                    <img src='admin_area/slides_images/$slide_image' class='center'>
                                </div>
                            ";
                        }
                        $strSql = "SELECT * FROM SLIDER LIMIT 1,2";                         
                        $result = mysqli_query($connection,$strSql);                         
                        // assigning records to $data varaible, after executing the query
                        while($rs = mysqli_fetch_array($result))
                        { 
                            $slide_name = $rs['slide_name'];
                            $slide_image = $rs['slide_image'];
                            echo "
                                <div class='item'>
                                    <img src='admin_area/slides_images/$slide_image' class='center'>
                                </div>
                            ";
                        }
                    
                    ?>
            
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
                </a>
        </div>
    </div><!--Finish container -->

    <div id="notes"> <!-- notes advantages -->
        <div class="container"> <!--container begin -->

            <div class="same-height-row"> <!-- same-height-row begin -->
                <div class="col-sm-4"> <!--col-sm-4 Begin -->
                        <div class="icon"> <!--icon begin-->
                            <i class="fa fa-heart" style="font-size:48px;color:green"></i>
                        </div><!--icon finish-->
                    <div class="box same-height"> <!--box same-height begin-->
                       
                        <h3><a href="#"> We want to make you shine </a></h3>
                        <p> And to become your own muse.  </p>                    
                    </div> <!--box same-height finish-->
                </div> <!-- col-sm-4 Finish -->
                <div class="col-sm-4"> <!--col-sm-4 Begin -->
                        <div class="icon"> <!--icon begin-->
                           <i class="fa fa-truck" style="font-size:48px;color:green"></i>
                        </div><!--icon finish-->
                    <div class="box same-height"> <!--box same-height begin-->
                        <h3><a href="#"> Free Shipping NO Minimum  </a></h3>
                        <p> on every purchase. </p>                    
                    </div> <!--box same-height finish-->
                </div> <!-- col-sm-4 Finish -->

                <div class="col-sm-4"> <!--col-sm-4 Begin -->
                     <div class="icon"> <!--icon begin-->
                              <i class="fa fa-refresh" style="font-size:48px;color:green"></i>
                    </div><!--icon finish-->
                    <div class="box same-height"> <!--box same-height begin-->
                        <h3><a href="#"> Easy Return </a></h3>
                        <p> If your jewlery doesn't suit you, order a new one. </p>                    
                    </div> <!--box same-height finish-->
                </div> <!-- col-sm-4 Finish -->

            </div> <!--same-height-row finish-->
        </div> <!--container finish-->
    </div> <!--Finish notes -->

    <div id="categories"> <!--categories begin-->
        <div class="box"> <!--Box begin -->
            <div class="container"> <!--container begin-->
                <div class="col-md-12" ><!-- col-md-12 begin-->
                    <h2>
                        Shop By Category
                    </h2>
                </div><!-- col-md-12 finish-->
            </div><!--Container finish-->
        </div><!-- box finish --> 
    </div> <!-- categories finish-->
    
    <!--    -->
    <div id="content1" class="container"><!---container begin-->
        <div class="row"><!--row begin-->
            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"> <!--product begin-->
                    <div class="text"> <!--text begin -->
                        <h3>
                            <a href="details.php">
                                Necklace
                            </a>
                        </h3>
                    </div> <!-- text finish-->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/admin_images/necklace.png" alt="Product 1">
                    </a>
                </div><!-- product finish-->
            </div><!--col-sm-4 col-sm-6 single finish-->
            <div class="col-sm-4  col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"> <!--product begin-->
                    <div class="text"> <!--text begin -->
                        <h3>
                            <a href="details.php">
                                Ring
                            </a>
                        </h3>
                    </div> <!-- text finish-->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/admin_images/ring.png" alt="Product 1">
                    </a>
                </div><!-- product finish-->
            </div><!--col-sm-4 col-sm-6 single finish-->
            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"> <!--product begin-->
                    <div class="text"> <!--text begin -->
                        <h3>
                            <a href="details.php">
                                Earring
                            </a>
                        </h3>
                    </div> <!-- text finish-->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/admin_images/earing.png" alt="Product 1">
                    </a>
                </div><!-- product finish-->
            </div><!--col-sm-4 col-sm-6 single finish-->
            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"> <!--product begin-->
                    <div class="text"> <!--text begin -->
                        <h3>
                            <a href="details.php">
                                Watch
                            </a>
                        </h3>
                    </div> <!-- text finish-->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/admin_images/watches.png" alt="Product 1">
                    </a>
                </div><!-- product finish-->
            </div><!--col-sm-4 col-sm-6 single finish-->
        </div> <!--row finish-->
    </div> <!--container finish-->

    <div id="latest"> <!--categories begin-->
        <div class="box"> <!--Box begin -->
            <div class="container"> <!--container begin-->
                <div class="col-md-12" ><!-- col-md-12 begin-->
                    <h2>
                        New Entry 
                    </h2>
                </div><!-- col-md-12 finish-->
            </div><!--Container finish-->
        </div><!-- box finish --> 
    </div> <!-- categories finish-->

    <div id="content2" class="container"><!---container begin-->
        <div class="row"><!--row begin-->
            <?php
                Display_products();
            ?>
        </div> <!--row finish-->
    </div> <!--container finish-->

    <?php 
        include("includes/footer.php");
    ?>

    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
</body>
</html>