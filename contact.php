<?php
    $active = 'ContactUs';
    include("includes/header.php");
?>

    <div id="content-contact"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Contact Us
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
                      
            <div class="col-md-12"><!-- col-md-9 Begin -->               
                <div id="contact" class="container-fluid">
                    <h3 class="text-center">Contact</h3>
                    <p class="text-center"><em>Contact us and we'll get back to you within 24 hours.</em></p>

                    <div class="row">
                        <div class="col-md-4">
                            <p><span class="glyphicon glyphicon-map-marker"></span> Cluj-Napoca,Romania</p>
                            <p><span class="glyphicon glyphicon-phone"></span> Phone: 0231622312</p>
                            <p><span class="glyphicon glyphicon-envelope"></span> Email: myemail@shine.com</p>
                        </div>

                        <div class="col-md-8">
                        <form action="contact.php" method="post"><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Name</label>
                               
                               <input type="text" class="form-control" name="name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Email</label>
                               
                               <input type="text" class="form-control" name="email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Subject</label>
                               
                               <input type="text" class="form-control" name="subject" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Message</label>
                               
                               <textarea name="message" class="form-control"></textarea>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="submit" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i>Send Message
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                        </div>
                    </div>
                </div>
               
            </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>