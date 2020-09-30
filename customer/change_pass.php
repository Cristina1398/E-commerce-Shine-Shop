<h1 align="center"> Change Password </h1>

<form action="" method="post" enctype="multipart/form-data"> <!--form begin -->
    <div class="form-group"> <!-- form-group begin-->
        <label> Your Old Password: </label>
        <input type="text" name="old_pass" class="form-control" required>
    </div> <!-- form-group finish -->

    <div class="form-group"> <!-- form-group begin-->
        <label> Your New Password: </label>
        <input type="text" name="new_pass" class="form-control" required>
    </div> <!-- form-group finish -->

    <div class="form-group"> <!-- form-group begin-->
        <label> Confirm Your New Password: </label>
        <input type="text" name="conf_new_password" class="form-control" required>
    </div> <!-- form-group finish -->
    

    <div class="text-center" > <!-- text-center begin -->
        <button type="submit" name="submit" class="btn btn-primary">
            <i class="fa fa-user-md"></i> Update Now
        </button>
    </div> <!-- text-center finish -->
</form> <!-- form finish-->