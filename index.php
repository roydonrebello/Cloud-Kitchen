<!DOCTYPE html>
<html lang="en">
<head>

     <title>Arya Dhurga Cloud Kitchen</title>
     <link  rel="icon" type="image" href="catering_food_dinner_20584.ico">
<!-- 

Eatery Cafe Template 

http://www.templatemo.com/tm-515-eatery

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
      <style>
          body{
               cursor: cell;
          }
        .card{
         -webkit-box-shadow: 18px 26px 45px 6px rgba(0,0,0,0.75);
-moz-box-shadow: 18px 26px 45px 6px rgba(0,0,0,0.75);
box-shadow: 18px 26px 45px 6px rgba(0,0,0,0.75);
margin-bottom:30px;
        }
        .card:hover{
          -webkit-box-shadow: 10px 17px 56px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 17px 56px 0px rgba(0,0,0,0.75);
box-shadow: 10px 17px 56px 0px rgba(0,0,0,0.75);
        }   
        .preloader  {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 99999;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-flow: row nowrap;
            -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
        -webkit-justify-content: center;
            -ms-flex-pack: center;
                justify-content: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        background: none repeat scroll 0 0 #fff;
    }
.sk-spinner-pulse {
  width: 40px;
  height: 40px;
  background-color: #F6D76B;
  border-radius: 100%;
  -webkit-animation: sk-pulseScaleOut 1s infinite ease-in-out;
          animation: sk-pulseScaleOut 1s infinite ease-in-out; }

@-webkit-keyframes sk-pulseScaleOut {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0); }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 0; } }

@keyframes sk-pulseScaleOut {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0); }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 0; } 
}
    #back-to-top {
    position: fixed;
    background-color:red;
    color:white;
    bottom: 40px;
    right: 40px;
    display: none;
}
footer{
     background:linear-gradient(to right,rgb(0 0 0 / 1),rgb(0 0 0 /0)),url('pexels-devon-rockola-954677 (1).jpg') repeat fixed 100%;
     background-size: cover;
}

#loader-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1001;
}
#loader-wrapper .loader-section {
  position: fixed;
  top: 0;
  width: 51%;
  height: 100%;
  background: #fff;
  z-index: 1000;
  -webkit-transform: translateX(0);
          transform: translateX(0);
}
#loader-wrapper .loader-section.section-left {
  left: 0;
}
#loader-wrapper .loader-section.section-right {
  right: 0;
}
#loader {
  display: block;
  position: relative;
  left: 50%;
  top: 50%;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border-radius: 50%;
  border: 3px solid transparent;
  border-top-color: #3498db;
  -webkit-animation: spin 2s linear infinite;
          animation: spin 2s linear infinite;
  z-index: 99999;
}
#loader:before {
  content: "";
  position: absolute;
  top: 5px;
  left: 5px;
  right: 5px;
  bottom: 5px;
  border-radius: 50%;
  border: 3px solid transparent;
  border-top-color: #e74c3c;
  -webkit-animation: spin 3s linear infinite;
          animation: spin 3s linear infinite;
}
#loader:after {
  content: "";
  position: absolute;
  top: 15px;
  left: 15px;
  right: 15px;
  bottom: 15px;
  border-radius: 50%;
  border: 3px solid transparent;
  border-top-color: #f9c922;
  -webkit-animation: spin 1.5s linear infinite;
          animation: spin 1.5s linear infinite;
}
.loaded #loader-wrapper {
  visibility: hidden;
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
  -webkit-transition: all 0.3s 1s ease-out;
  transition: all 0.3s 1s ease-out;
}
.loaded #loader-wrapper .loader-section.section-left {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
  -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
}
.loaded #loader-wrapper .loader-section.section-right {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
  -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
}
.loaded #loader {
  opacity: 0;
  -webkit-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}
@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
</style>
</head>
<body>
  <?php include 'partials/_dbconnect.php';?>
  <div id="loader-wrapper">
  <div id="loader"></div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
</div>
     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="" class="navbar-brand"><b style="font-size:40px;">A</b><sup>rya Dhurga</sup><br><sup> Cloud Kitchen</sup> </a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="#team" class="smoothScroll">Category</a></li>
                         <li><a href="contact.php" class="smoothScroll">Contact</a></li>
                         <li><a href="viewOrder.php" class="smoothScroll">Your Order</a></li>
                         <li><a href="viewCart.php" class="smoothScroll">Cart</a></li>
                         <li><a href="rating.php" class="smoothScroll">Feedback</a></li>
                         
            </ul>

            
              </div>

         </div>
    </section>
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Arya Dhurga Cloud Kitchen</h3>
                                             <h1>Our mission is to provide an unforgettable experience</h1>
                                             <a href="#top" class="section-btn btn btn-default smoothScroll">View Menu</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Your Perfect Breakfast</h3>
                                             <h1>The best dinning quality can be here too!</h1>
                                             <a href="#top" class="section-btn btn btn-default smoothScroll">Discover menu</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h1>Enjoy our special menus every Sunday and Friday</h1>
                                             <a href="#contact" class="section-btn btn btn-default smoothScroll">Order Now</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h4>Read our story</h4>
                                   <h2>We've been Making The Delicious Foods</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>From last 30 years we have been managing restaurant ,catering and also bakery. We provide excellent food and services. </p>
                                   <p> <a href="https://plus.google.com/+templatemo" target="_parent">Having a loyal and repeated customers helps us to make progress and provide delicious food for them. Better the quality of food , more the customers approach. A good dine having a pleasent environment also the moment to share</a>. Thank you.</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="images/about-image.jpg" class="img-responsive" alt="">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>

<a id="top"></a>
     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Our Category</h2>
                         </div>
                    </div>
                    <?php 
        $sql = "SELECT * FROM `categories`"; 
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
          $id = $row['categorieId'];
          $cat = $row['categorieName'];
          $desc = $row['categorieDesc'];
          echo '<div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="img/menu-'.$id. '.jpg" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4><a href="itemlist.php?catid=' . $id . '">' . $cat . '</a></h4> 
                                             <a href="itemlist.php?catid=' . $id . '" class="btn btn-light"><button class="button">
                                                View Menu
                                   </button></a>
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3><a href="itemlist.php?catid=' . $id . '">' . $cat . '</a></h3>
                         </div>
                    </div>';
               }
               ?>
                    
                    
               </div>
          </div>
     </section>


     <!-- MENU-->
    


     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Developers</h2>
                         </div>
                    </div>  

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                         <div class="owl-carousel owl-theme">
                              <div class="item">
                                   <!--<img src="p.jpg" height="200px" width="20%" style="border-radius:50%;">-->
                                        <div class="tst-author">
                                             <p>Planning and Structure</p><br>
                                             <h4>**Puneeth Pandith**</h4>
                                        </div>
                              </div>

                              <div class="item">
                                   <img src="">
                                        <div class="tst-author">
                                             <p>Front-End and Theme design</p><br>
                                             <h4>>>Gaurav R<<</h4>
                                        </div>
                              </div>

                              <div class="item">
                                   <!--<img src="r.jpg" height="200px" width="100px">-->
                                        <div class="tst-author">
                                             <p>Content writing and Back-End</p><br>
                                             <h4>**Roydon Rebello**</h4>
                                        </div>
                              </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>  


     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.1237566925947!2d75.04192187494209!3d12.89976288740906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba4a61335097761%3A0xe20789bceb2ff48e!2sHotel%20Aryadurga!5e0!3m2!1sen!2sin!4v1683541211853!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    </div>    

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Contact Us</h2>
                              </div>
                         </div>

                         <!-- CONTACT FORM -->
                         <form action="https://formsubmit.co/bhavishgaurav@gmail.com" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                              <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                              <h6 class="text-success">Your message has been sent successfully.</h6>
                              
                              <!-- IF MAIL NOT SENT -->
                              <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                                   <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>          


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Find us</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>V2XV+WQ5, ಬಡ್ಡಕಟ್ಟೆ ಬಂಟ್ವಾಳ, <br>Amtady, Karnataka</p>
                              </address>
                         </div>
                    </div>


                    <div class="col-md-4 col-sm-8">
                         <div class="footer-info footer-open-hour">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Open Hours</h2>
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Sunday: Closed</p>
                                   <div>
                                        <strong>Monday to Friday</strong>
                                        <p>5:00 AM - 7:00 PM</p>
                                   </div>
                                   <div>
                                        <strong>Saturday</strong>
                                        <p>7:00 AM - 5:00 PM</p>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4">
                         <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                              <li><a href="#" class="fab fa-instagram" attr="facebook icon"></a></li>
                              <li><a href="#" class="fab fa-twitter"></a></li>
                              <li><a href="#" class="fab fa-instagram"></a></li>
                              <li><a href="#" class="fab fa-google"></a></li>
                         </ul>

                    </div>
                    
               </div>
          </div>
     </footer>
     <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
   

   


  




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
    
    <script>
document.addEventListener("DOMContentLoaded", function() {
  setTimeout(function() {
      document.querySelector("body").classList.add("loaded");
  }, 10)
});
        </script>
<script>
$(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});
</script>
</body>
</html>