
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shine</title>
    <!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
</head>

<body>

<div class="row"> <!-- row begin-->
    <div class="col-lg-12"> <!--col-lg-12 begin -->
        <ol class="breadcrumb"> <!--breadcrumb begin -->
            <li class="active"> 
                <i class="fa fa-dashboard"></i> Dashboard / Insert Products 
            </li>
        </ol> <!--breadcrumb finish -->
    </div> <!--col-lg-12 -->
</div> <!-- row finish -->

<div class="row"> <!-- row begin -->
    <div class="col-lg-12"> <!-- col-lg-12 begin -->
        <div class="panel panel-default"> <!-- panel panel-default -->
            <div class="panel-heading"> <!--panel-heading begin -->
                <h3 class="panel-title"> <!-- panel-title begin -->
                    <i class="fa fa-money fa-fw"></i> Insert Product
                </h3>
            </div> <!--panel-heading finish -->
        </div> <!--panel panel-default finish -->
        <div class="panel-body"> <!-- panel-body begin-->
            <form method="post" class="form-horizontal" enctype="multipart/form-data"> <!--form-horizontal-->
                <div class="form-group"> <!--form-group begin -->
                    <label class="col-md-3 control-label"> Product Name </label>
                    <div class="col-md-6"> <!--col-md-6 begin -->
                        <input name="product_name" type="text" class="form-control" required>
                    </div>
                </div> <!--form-group finish-->

                <div class="form-group"> <!--form-group begin -->
                    <label class="col-md-3 control-label"> Product Category </label>
                    <div class="col-md-6"> <!--col-md-6 begin -->
                        <select name="category" class="form-control"> <!--form-control begin-->
                            <option> Select a Category Product </option> 
                                                     
                            <?php
                                //ne conectam la baza de date
                                $connection = require_once 'includes/dbconn.php';

                                //luam din baza de date categoriile
                                $strSql = "SELECT * FROM category_products";                         
                                $result = mysqli_query($connection, $strSql); 
                               
                                while($row_category = mysqli_fetch_array($result)){                                   
                                    $category_id = $row_category['category_id'];
                                    $category_name = $row_category['category_name'];

                                    echo "
                                        <option value='$category_id'> $category_name </option>
                                    ";
                                }
                            ?>
                       </select> <!--form-control finish-->
                    </div>
                </div> <!--form-group finish-->

                <div class="form-group"> <!--form-group begin -->
                    <label class="col-md-3 control-label">Image nr.1 </label>
                    <div class="col-md-6"> <!--col-md-6 begin -->
                        <input name="product_img1" type="file" class="form-control" required>
                    </div>
                </div> <!--form-group finish-->

                <div class="form-group"> <!--form-group begin -->
                    <label class="col-md-3 control-label">Image nr.2 </label>
                    <div class="col-md-6"> <!--col-md-6 begin -->
                        <input name="product_img2" type="file" class="form-control" required>
                    </div>
                </div> <!--form-group finish-->

                <div class="form-group"> <!--form-group begin -->
                    <label class="col-md-3 control-label">Image nr.3 </label>
                    <div class="col-md-6"> <!--col-md-6 begin -->
                        <input name="product_img3" type="file" class="form-control" required>
                    </div>
                </div> <!--form-group finish-->

                
                <div class="form-group"> <!--form-group begin -->
                    <label class="col-md-3 control-label">Price </label>
                    <div class="col-md-6"> <!--col-md-6 begin -->
                        <input name="product_price" type="text" class="form-control">
                    </div>
                </div> <!--form-group finish-->

                
                <div class="form-group"> <!--form-group begin -->
                    <label class="col-md-3 control-label">Keywords</label>
                    <div class="col-md-6"> <!--col-md-6 begin -->
                        <input name="product_keyword" type="text" class="form-control">
                    </div>
                </div> <!--form-group finish-->

                <div class="form-group"> <!--form-group begin -->
                    <label class="col-md-3 control-label">Description</label>
                    <div class="col-md-6"> <!--col-md-6 begin -->
                       <textarea name="product_desc" cols="19" rows="6" class="form-control"> </textarea>
                    </div>
                </div> <!--form-group finish-->

                <div class="form-group"> <!--form-group begin -->
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-6"> <!--col-md-6 begin -->
                        <input type="submit" name="submit" value="Insert product" class="btn btn-primary form-control">
                    </div>
                </div> <!--form-group finish-->
                
            </form>
        </div> <!--panel-body finish-->
    </div> <!--col-lg-12 finish -->
</div> <!--row finish -->


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   

</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $product_name = $_POST['product_name'];
        $category = $_POST['category'];
        $product_price = $_POST['product_price'];
        $product_keyword = $_POST['product_keyword'];
        $description = $_POST['product_desc'];


        //Elementul tmp_name este calea absolută către fișierul efectiv. Atunci când utilizatorul uploadează
        //un fișier, acesta primește un nume temporar aleatoriu, și este salvat acolo unde specifică directiva de
        //configurare php.ini upload_tmp_dir.
        //Numele real al fișierului, așa cum a fost uploadat de utilizator, se află în 'name'.
        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];

        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];

        //mut fisierul la destinatia dorita

        move_uploaded_file($temp_name1, "product_images/$product_img1");
        move_uploaded_file($temp_name2, "product_images/$product_img2");
        move_uploaded_file($temp_name3, "product_images/$product_img3");
        
        $insert_product = "insert into products(category, date, product_name, product_image1, product_image2, product_image3, price, description, keywords) values ('$category', NOW(), '$product_name', '$product_img1','$product_img2','$product_img3','$product_price','$description','$product_keyword')";
        $run_product = mysqli_query($connection, $insert_product);
        if($run_product){
            echo "<script> alert('Product has been inserted successfully')</script>";
            echo "<script> window.open('insert_product.php','_self')</script>";
        }
    }
?>