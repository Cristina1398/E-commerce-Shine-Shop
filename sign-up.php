<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shine</title>
    <!-- Bootstrap 4 for this page -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css"> 
    

<script>
function Validation() {		
		document.getElementById("nameErr").innerHTML ="";
		document.getElementById("EmailErr").innerHTML ="";
        document.getElementById("CountryErr").innerHTML ="";
        document.getElementById("PasswordErr").innerHTML ="";
        document.getElementById("RePasswordErr").innerHTML ="";
        document.getElementById("AddressErr").innerHTML ="";
        document.getElementById("PhoneErr").innerHTML ="";

		var name = document.forms["sign-up-form"]["name"];  
		var email = document.forms["sign-up-form"]["email"];    
        var country = document.forms["sign-up-form"]["country"];  
        var password= document.forms["sign-up-form"]["psw"];
        var repassword= document.forms["sign-up-form"]["psw-repeat"];
        var address = document.forms["sign-up-form"]["address"];  
        var phone = document.forms["sign-up-form"]["phone"];  
		
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        
		var validate = true;
		   
		if (name.value == "")                                  
		{ 
			document.getElementById("nameErr").innerHTML = "Please enter your name." ;
			//window.alert("Please enter your name."); 
			name.focus(); 
			validate = false;
		} 
		   
		if (email.value == "")                          
		{ 
			document.getElementById("EmailErr").innerHTML = "Please enter a valid e-mail address.";
			//window.alert("Please enter a valid e-mail address."); 
			email.focus(); 
			validate = false; 
		} else {
			if(email.value.match(mailformat))
			{
				email.focus();
				validate = true;
			}
			else
			{
				document.getElementById("EmailErr").innerHTML = "You have entered an invalid email address!";
				email.focus();
				validate = false;
			}
        }
        
        if (password.value == "")                          
		{ 
			document.getElementById("PasswordErr").innerHTML = "Please enter a password.";
			//window.alert("Please enter a valid e-mail address."); 
			password.focus(); 
			validate = false; 
		} 
		if (repassword.value == "" || repassword.value != password.value)                          
		{ 
			document.getElementById("RePasswordErr").innerHTML = "Please re-enter your password.";
			//window.alert("Please enter a valid e-mail address."); 
			repassword.focus(); 
			validate = false; 
		}       
        
		if (country.value == "")                           
		{ 
				document.getElementById("CountryErr").innerHTML = "Please enter your contry.";
				country.focus(); 
				validate = false;
        }
        if (phone.value == "")                           
		{ 
				document.getElementById("PhoneErr").innerHTML = "Please enter your phone-number.";
				phone.focus(); 
				validate = false;
        }
        if (address.value == "")                           
		{ 
				document.getElementById("AddressErr").innerHTML = "Please enter your address.";
				address.focus(); 
				validate = false;
		}
		 //daca toate campurile sunt completate corespunzator, cream un obiect XMLHttpRequest()
		 //in momentul in care apasam butonul de inregistrare a mesajului se face o cerere (in spatele scenei,fara
		 //sa reincarcam pagina catre o pagina php iar raspunsul primit il pune intr-un paragraf;
		if(validate == true) {  	  
		
			var nm = document.getElementById("name").value;
			var ml = document.getElementById("email").value;
		
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
			  if (this.readyState == 4 && this.status == 200) {
				document.getElementById("precizare").innerHTML = " Your registration for the name: '" +  this.responseText + " ' is done. Thanks for being here! " ;
			  }
			};
		
			xmlhttp.open("GET", "login.php?" + "name=" + nm + "&email=" + ml , true);
			xmlhttp.send();
		}
	}
</script>

</head>
<body>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    

    <nav class="navbar navbar-inverse"> <!--Begin navbar navbar-inverse -->
        <div class="container-fluid"> <!-- Begin container-fluid -->
            <div class="navbar-header"> <!-- Begin navbar-header -->
                <!--in case of Xs pages, the nav appears just when we click on a button list-->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="glyphicon glyphicon-list"></span>                       
                </button>
                <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->                        
                            <img src="images/logo_shine_desktop.png" alt="M-dev-Store Logo" class="hidden-xs">
                            <img src="images/logo_shine_desktop.png" alt="M-dev-Store Logo Mobile" class="visible-xs">                        
                </a><!-- navbar-brand home Finish -->
                              
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">                   
                   <span class="sr-only">Toggle Search</span>                   
                   <i class="fa fa-search"></i>                   
               </button>
            </div> <!-- Finish navbar-header -->

            <div class="collapse navbar-collapse padding-nav" id="myNavbar"> <!-- Begin collapse navbar-collapse-->
                <ul class="nav navbar-nav left">                      
                    <li>
                        <a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                    <li>
                        <a href="customer/myaccount.php"><span class="glyphicon glyphicon-user"></span> My Account</a>
                    </li>
                    <li>
                        <a href="shop.php"><span class="glyphicon glyphicon-euro"></span> Shop</a>
                    </li>
                   
                    <li>
                        <a href="shopping-cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a>
                    </li>
                    <li>
                        <a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us </a>
                    </li>                            
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="sign-up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div> <!-- Finish collapse navbar collapse-->
        </div> <!-- Finish container-fluid -->
    </nav><!--Finish navbar navbar-inverse -->

    <div id="content-sign"> <!-- content-product Begin -->
        <div class="container-fluid"><!--Container begin-->
            <div class="col-md-12"><!--col-md-12 begin-->
                <ul class="breadcrumb"> <!--breadcrumb Begin-->
                    <li>
                        <a href="index.php"> Home </a>
                    </li>
                    <li>
                        Sign Up
                    </li>      
                </ul>
            </div> <!--col-md-12 finish--> 
            <div class="col-md-12" > <!--col-md-12 begin-->                               
                <form  enctype="multipart/form-data" method="post" name="sign-up-form" class="modal-content" > 
                    <div clas="container" >
                        <h1>Sign Up</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>
                        <div class="form-element">
                            <label>Name</label>
                            <input type="text"  placeholder="Enter your name" name="name"  id="name" pattern="[a-zA-Z0-9]+" required /><span class="error" id="nameErr">*</span>
                            
                        </div>
                        
                        <div class="form-element">
                            <label for="email">Email:</label>
                            <input type="email" placeholder="Enter your email" id="email" name="email">
                            <span class="error" id="EmailErr">*</span>
                        </div>

                        <div class="form-element">
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>
                            <span class="error" id="PasswordErr">*</span>
                        </div>

                        <div class="form-element">
                            <label for="psw-repeat"><b>Repeat Password</b></label>
                            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                            <span class="error" id="RePasswordErr">*</span>
                        </div>

                        <div class="form-element">
                            <label for="text"> Country:</label>
                            <input type="text" placeholder="Enter your country" id="country" name="country">
                            <span class="error" id="CountryErr">*</span>
                        </div>
                        
                        <div class="form-element">
                            <label for="text"> Address:</label>
                            <input type="text" placeholder="Enter your address" id="address" name="address">
                            <span class="error" id="AddressErr">*</span>
                        </div>

                        <div class="form-element">
                            <label> Phone:</label>
                            <input type="text" placeholder="Enter your phone" id="phone" name="phone">
                            <span class="error" id="PhoneErr">*</span>
                        </div>

                        <div class="form-element">
                            <label>Photo</label>
                            <input name ="myfile" type="file" id="fileSelect"/>
                            <span class="error" id="ImageErr"></span>
                            <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 2 MB.</p>
                        </div>
                    
                        <div>
                            <p id="precizare"> <p/> 
                        </div>
                       
                        <hr>
                        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                        <button type="button" name="comment" value="register" onclick="Validation()" > Rigister on Shine! </button>
                    </div> <!-- container finish -->
                    <div class="container-fluid signin">
                        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
                    </div>
                </form> 
            </div><!--col-md-12 finish-->


        </div> <!--container-fluid finish -->    
    </div> <!--content-sign finish -->      


    <?php 
        include("includes/footer.php");
    ?>

    
   
    
    
</body>
</html>