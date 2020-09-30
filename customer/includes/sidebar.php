<div class="panel panel-default sidebar-menu"> <!-- panel panel-default sidebar-menu begin -->
    <div class="panel-heading"> <!-- panel-heading begin  -->
        <center> <!--center begin-->
            <img src="custumer_images/customer1.jpeg" width="70" class="img-fluid rounded shadow-sm" alt="hg">
        </center> <!--center finish-->
        <br/>
        <h3 align="center" class="panel-title"> <!--panel-title begin-->
            Name: Rotariu Lavinia-Cristina
        </h3> <!--panel-title finish-->
    </div><!-- panel-heading finish  -->

    <div class="panel-body"> <!-- panel-body begin -->
        <ul class="nav-pills nav-stacked nav"> <!-- nav-pills nav-stacked-nav begin -->
            <li class="<?php if(isset($_GET['my_orders'])){echo 'active';} ?>">
                <a href="myaccount.php?my_orders">
                    <i class="fa fa-list"> </i> My Bag
                </a>
            </li>

            <li class="<?php if(isset($_GET['pay_offline'])){echo 'active';} ?>">
                <a href="myaccount.php?pay_offline">
                    <i class="fa fa-bolt"> </i> Pay_offline
                </a>
            </li>
            <li class="<?php if(isset($_GET['edit_account'])){echo 'active';} ?>">
                <a href="myaccount.php?edit_account">
                    <i class="fa fa-pencil"> </i> Edit Account
                </a>
            </li>

            <li class="<?php if(isset($_GET['change_pass'])){echo 'active';} ?>">
                <a href="myaccount.php?change_pass">
                    <i class="fa fa-user"> </i> Change Password
                </a>
            </li>
            <li class="<?php if(isset($_GET['delete_account'])){echo 'active';} ?>">
                <a href="myaccount.php?delete_account">
                    <i class="fa fa-trash-o"> </i> Delete Account
                </a>
            </li>

            <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out"> </i> Log Out
                </a>
            </li>
        </ul>
    </div> <!-- panel-body finish -->
</div> <!-- panel panel-default sidebar-menu finish-->