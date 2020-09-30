<h1 align="center"> Edit Your Acccount </h1>

<form action="" method="post" enctype="multipart/form-data"> <!--form begin -->
    <div class="form-group"> <!-- form-group begin-->
        <label> Customer Name: </label>
        <input type="text" name="c_name" class="form-control" required>
    </div> <!-- form-group finish -->

    <div class="form-group"> <!-- form-group begin-->
        <label> Customer Email: </label>
        <input type="text" name="c_email" class="form-control" required>
    </div> <!-- form-group finish -->

    <div class="form-group"> <!-- form-group begin-->
        <label> Customer Country: </label>
        <input type="text" name="c_country" class="form-control" required>
    </div> <!-- form-group finish -->
    <div class="form-group"> <!-- form-group begin-->
        <label> Customer Address: </label>
        <input type="text" name="c_address" class="form-control" required>
    </div> <!-- form-group finish -->
    <div class="form-group"> <!-- form-group begin-->
        <label> Customer Image: </label>
        <input type="file" name="c_image" class="form-control" required>
        <img class="img-responsive" src="custumer_images/customer1.jpeg" width="70" class="img-fluid rounded shadow-sm" alt="">
    </div> <!-- form-group finish -->

    <div class="text-center" > <!-- text-center begin -->
        <button name="update" class="btn btn-primary">
            <i class="fa fa-user-md"></i> Update Now
        </button>
    </div> <!-- text-center finish -->
</form> <!-- form finish-->