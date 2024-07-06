 <html>
 <head>
 
<style>
#grad1 {
  height:740px;
  background-image: linear-gradient(to bottom,#05f7d3,#f7fafa);
}
</style>
</head>

 <title>FeedBack (Consumer Bank)</title>
  <link rel =" shortcut icon" href="img/assets/log.png" type="image">
  
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/no-ui-slider/jquery.nouislider.css" type="text/css" />
<body>
<div id="grad1">
 <link rel="stylesheet" href="Feedback.css">
 
 <!-- Start FeedBack Form Section -->
<section id="feedback">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
               <h3 class="section-title wow fadeInUp">FeedBack</h3>
               <p class="subheading wow fadeInUp"> Let's Grow Together. </p>
            </div>
			
            <div class="col-md-12 wow fadeInUp text-center">
               <div id="message"></div>
               <form method="post" action="feedback.php" name="feedback" id="feedback">
                  <fieldset>
						<input name="fullname" type="text" id="fullname" placeholder="Enter Your Full-Name"/>
						<input name="email" type="email" id="email" placeholder="Enter Your Email Address"/>
						<input name="date" type="date" id="date" placeholder="Enter Today's Date"/>
						<input name="message" type="text" id="message" placeholder="Enter Your Message"/>
                  </fieldset>
						<input type="submit" class="submit" id="submit" name="submit" value="SUBMIT" />
               </form>
            </div>
        </div>
    </div>
</section>
   <!-- End feedback Form Section -->
   
     <!-- Start Footer 1 -->
   <footer id="footer">
      <!-- End Footer Widgets -->
      
      <div class="footer-copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h3 class="section-title wow fadeInUp">Consumer Bank</h3>
                  <p class="wow fadeInUp"> All Rights Reserved. Copyright © 2021 
                  <a href="">Consumer Bank</a> 
                  </p>
                  <ul class="social-icons subheading">
                     <li>
                        <a href="#">
                           <i class="icon ion-social-twitter"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-facebook"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-googleplus"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-instagram-outline"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-pinterest"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-skype"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-linkedin"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-dropbox"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-vimeo"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-youtube"></i>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- End Footer Copyright -->
      
   </footer>
   <!-- End Footer 1 -->
   
 </div>
 
 
<?php
include "Connect.php";
 
if(isset($_POST['submit']))
{
$nm=$_POST['fullname'];
$mail=$_POST['email'];
$date=$_POST['date'];
$msg=$_POST['message'];
$Query ="INSERT INTO feedback VALUES ('$nm','$mail','$date','$msg');";
$abc=mysqli_query($conn,$Query) or die(mysqli_error($conn));
echo "<script>alert('We got your feedback! Thanks for your feedback.')</script>";
}									
?>
</body>
</html>