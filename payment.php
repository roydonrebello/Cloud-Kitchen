<!DOCTYPE html>
<html lang="en">
  <?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paypage</title>
    <link  rel="icon" type="image" href="catering_food_dinner_20584.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css1/style.css">
    <style>
        /*--------------------
General Style
---------------------*/
*,
*::before,
*::after {
  box-sizing: border-box;
}

body,
html {
  height: 100%;
  font-family: 'Quicksand', sans-serif;
  font-weight: 400;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body {
  background: rgba(37,44,65,1);
  background: -moz-linear-gradient(top, rgba(37,44,65,1) 0%, rgba(37,44,65,1) 60%, rgba(221,223,230,1) 60%, rgba(221,223,230,1) 100%);
  background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(37,44,65,1)), color-stop(60%, rgba(37,44,65,1)), color-stop(60%, rgba(221,223,230,1)), color-stop(100%, rgba(221,223,230,1)));
  background: -webkit-linear-gradient(top, rgba(37,44,65,1) 0%, rgba(37,44,65,1) 60%, rgba(221,223,230,1) 60%, rgba(221,223,230,1) 100%);
  background: -o-linear-gradient(top, rgba(37,44,65,1) 0%, rgba(37,44,65,1) 60%, rgba(221,223,230,1) 60%, rgba(221,223,230,1) 100%);
  background: -ms-linear-gradient(top, rgba(37,44,65,1) 0%, rgba(37,44,65,1) 60%, rgba(221,223,230,1) 60%, rgba(221,223,230,1) 100%);
  background: linear-gradient(to bottom, rgba(37,44,65,1) 0%, rgba(37,44,65,1) 60%, rgba(221,223,230,1) 60%, rgba(221,223,230,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#252c41', endColorstr='#dddfe6', GradientType=0 );
}

.subject {
  font-family: 'Playfair Display', serif;
  color: rgba(255,255,255,0.02);
  font-size: 180px;
  font-size: 16vw;
  letter-spacing: -4px;
  line-height: 0.9;
  z-index: -1;
}

/*--------------------
Text
---------------------*/
h1, h2, h3, h4, h5, h6 {
  margin: 0;
  line-height: 1.4;
}

h1 {
  font-size: 42px;
	color: #6d819c;
	text-align: left;
}

h2 {
  font-size: 28px;
  letter-spacing: -2px;
	color: #6d819c;
	text-align: center;
  line-height: 2.8;
}

h3 {
  font-size: 16px;
	color: #dddfe6;
  letter-spacing: 1px;
	text-align: left;
}

h4 {
  font-size: 16px;
	color: #7495aa;
  letter-spacing: 1px;
	text-align: left;
  line-height: 2;
}

h5 {
  font-size: 11px;
  font-weight: 700;
	color: #c9d6de;
  letter-spacing: 1px;
	text-align: left;
  text-transform: uppercase;
}

h5 > span {
  margin-left: 87px;
}

h5.total {
  margin-top: 20px;
}

h6 {
  font-family: 'PT Mono';
  font-size: 18px;
  font-weight: 400;
	color: #f4f5f9;
  letter-spacing: 0px;
	text-align: left;
  text-transform: uppercase;
  line-height: 1.8;
}

h6 > span {
  margin-left: 64px;
}

/*--------------------
Checkout
---------------------*/

.checkout {
  width: 900px;
  height: 485px;
  position: absolute;
  top: 50%;
  left: 50%;
  background-color: #dddfe6;
  overflow: hidden;
  
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  
  -webkit-border-radius: 12px;
     -moz-border-radius: 12px;
          border-radius: 12px;
  
  -webkit-box-shadow: 0 30px 48px rgba(37,44,65,0.32);
     -moz-box-shadow: 0 30px 48px rgba(37,44,65,0.32);
          box-shadow: 0 30px 48px rgba(37,44,65,0.32);
}

.order {
  width: 300px;
  height: 485px;
  padding: 0 30px;
  float: left;
  background-color: #f4f5f9;
  z-index: 1;
  
  -webkit-box-shadow: 0 15px 24px rgba(37,44,65,0.16);
     -moz-box-shadow: 0 15px 24px rgba(37,44,65,0.16);
          box-shadow: 0 15px 24px rgba(37,44,65,0.16);
}

ul.order-list {
  width: 100%;
  height: 205px;
  list-style: none;
  overflow-y: scroll;
  padding-right: 12px;
}

ul.order-list li {
  height: 60px;
  margin-left: -40px;
  overflow: hidden;
  border-bottom: 1px solid #e9ebf2;
}

ul.order-list li > img {
  width: 60px;
  height: 60px;
  float: left;
}

ul.order-list li > h4 {
  margin-top: 16px;
  line-height: 1;
  letter-spacing: 1px;
  text-align: right;
  
  -webkit-transition: all 0.3s;
     -moz-transition: all 0.3s;
      -ms-transition: all 0.3s;
       -o-transition: all 0.3s;
          transition: all 0.3s;
}

ul.order-list li:hover > h4 {
  margin-top: 8px;
}

ul.order-list li > h5 {
  margin-top: 0px;
  text-align: right;
  display: none;
  
  -webkit-transition: all 0.3s;
     -moz-transition: all 0.3s;
      -ms-transition: all 0.3s;
       -o-transition: all 0.3s;
          transition: all 0.3s;
}

ul.order-list li:hover > h5 {
  margin-top: 3px;
  display: block; 
}

/*--------------------
Payment
---------------------*/

.payment {
  z-index: 0;
  width: 370px;
  position: relative;
  float: left;
}

.card {
  width: 300px;
  height: 178px;
  position: relative;
  margin-left:150px;
  background-color: #f1404b;
  overflow: hidden;
  z-index: 1;
  
  -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
  
  -webkit-box-shadow: 0 15px 24px rgba(37,44,65,0.32);
     -moz-box-shadow: 0 15px 24px rgba(37,44,65,0.32);
          box-shadow: 0 15px 24px rgba(37,44,65,0.32);
}

.card-content {
  width: 100%;
  padding: 20px;
  position: relative;
  float: left;
  z-index: 1;
}

#logo-visa {
  position: relative;
  margin-top: -20px;
  left: 190px;
}

.card-form {
  width: 100%;
  position: relative;
  float: right;
  padding: 15px 35px;
}

.card-form > p.field {
  height: 48px;
  padding: 2px 10px;
  margin-bottom: 2px;
  background-color: #f4f5f9;
  border: 1px solid #d2d4de;
  display: inline-block;
  
  -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
}



input[type=text]:focus {
    outline: none;
}

::-webkit-input-placeholder { color: #dddfe6; }
:-moz-placeholder { color: #dddfe6; }
::-moz-placeholder {  color: #dddfe6; }
:-ms-input-placeholder {  color: #dddfe6; }

#i-cardfront, #i-cardback, #i-calendar {
  position: relative;
  top: 8px;
  z-index: 1;
}

#cardnumber {
  width: 244px;
}

#cardexpiration {
  width: 114px;
}

#cardcvc {
  width: 60px;
}

.space {
  margin-right: 10px;  
}

button:focus { outline:0; }

.button-cta {
  width: 100%;
  height: 65px;
  position: absolute;
  float: right;
  right: 0px;
  bottom: -68px;
  padding: 10px 20px;
  background-color: #f1404b;
  border: 1px solid #f1404b;
  font-family: 'Quicksand', sans-serif;
  font-weight: 700;
  font-size: 24px;
  color: #f4f5f9;
  z-index: -1;
  
  -webkit-transition: all 0.3s;
     -moz-transition: all 0.3s;
      -ms-transition: all 0.3s;
       -o-transition: all 0.3s;
          transition: all 0.3s;
}

.button-cta:hover {
  background: rgba(193,14,26,1);
  border: 1px solid rgba(193,14,26,1);
}

.button-cta span {
  display: inline-block;
  position: relative;
  
  -webkit-transition: all 0.3s;
     -moz-transition: all 0.3s;
      -ms-transition: all 0.3s;
       -o-transition: all 0.3s;
          transition: all 0.3s;
}

.button-cta span:after {
  content: '→';
  color: #f4f5f9;
  position: absolute;
  opacity: 0;
  top: 0;
  right: -40px;
}

.button-cta:hover span {
  padding-right: 45px;
}

.button-cta:hover span:after {
  opacity: 1;
  right: 0;
}

/*--------------------
Credit Card Background
---------------------*/

.wave {
  height: 300px;
  width: 300px;
  position: relative;
  background: #780910;
  z-index: -1;
}

.wave:before, .wave:after {
  content: "";
  display: block;
  position: absolute;
  background: rgba(193,14,26,1);
  background: -moz-linear-gradient(top, rgba(193,14,26,1) 0%, rgba(241,64,76,0.3) 100%);
  background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(193,14,26,1)), color-stop(100%, rgba(241,64,76,0.3)));
  background: -webkit-linear-gradient(top, rgba(193,14,26,1) 0%, rgba(241,64,76,0.3) 100%);
  background: -o-linear-gradient(top, rgba(193,14,26,1) 0%, rgba(241,64,76,0.3) 100%);
  background: -ms-linear-gradient(top, rgba(193,14,26,1) 0%, rgba(241,64,76,0.3) 100%);
  background: linear-gradient(to bottom, rgba(193,14,26,1) 0%, rgba(241,64,76,0.3) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c10e1a', endColorstr='#f1404c', GradientType=0 );
  
  -webkit-border-radius: 50% 50%;
     -moz-border-radius: 50% 50%;
          border-radius: 50% 50%;
}

.wave:after {
  height: 300px;
  width: 300px;
  left: 30%;
  top: 20%;
  opacity: 0.8;
}

.wave:before {
  height: 360px;
  width: 360px;
  left: -5%;
  top: -70%;
}

/*--------------------
Payment Notification
---------------------*/

.paid {
  z-index: 0;
  width: 370px;
  position: relative;
  float: right;
  padding: 30px;
  text-align: center;
  display: none;
}

.paid > h2 {
  line-height: 1;
  margin-top: 10px;
  color: #3ac569;
}

/*--------------------
Credits
---------------------*/

.icon-credits {
  width: 100%;
  position: absolute;
  bottom: 4px;
  font-family:'Open Sans', 'Helvetica Neue', Helvetica, sans-serif;
  font-size: 12px;
  color: rgba(0,0,0,0.08);
  text-align: center;
  z-index: -1;
}

.icon-credits a {
  text-decoration: none;
  color: rgba(0,0,0,0.12);
}
#payment-form{
    margin-left:70px;
}

        </style>
</head>

<body>
    
<?php
$conn = mysqli_connect("localhost", "root", "", "opd");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



  $userId = $_SESSION['userId'];
                                $sql = "SELECT * FROM `viewcart` where userId = $userId ";
                                $result = mysqli_query($conn, $sql);
                                $counter = 0;
                                $totalPrice = 0;
                                while($row = mysqli_fetch_assoc($result)){
                                  
                                    $itemId = $row['itemId'];
                                    $Quantity = $row['itemQuantity'];
                                    $mysql = "SELECT * FROM `item` WHERE itemId = $itemId";
                                    $myresult = mysqli_query($conn, $mysql);
                                    $myrow = mysqli_fetch_assoc($myresult);
                                    $itemName = $myrow['itemName'];
                                    $itemPrice = $myrow['itemPrice'];
                                    $total = $itemPrice * $Quantity;
                                    $counter++;
                                    $totalPrice = $totalPrice + $total;
                                }
                              
                                ?>

    <div class="container">
    <div class='checkout'>
  <div class='order'>
    <h2>Order Summary</h2>
    <h5 class='total'>Total</h5><h4>₹ <?php echo $totalPrice; ?></h4>
    <h5>Shipping</h5><h4>₹ 0</h4>
    <hr style="width:250px;border:1px solid lightgrey;"></hr>
    <h5 class='total'>GRAND Total</h5><h1>₹ <?php echo $totalPrice; ?></h1>
  </div>
  <h2>Payment</h2>
  <div id='payment' class='payment'>
    <div class='card'>
      <div class='card-content'>
        <svg id='logo-visa' enable-background="new 0 0 50 70" height="70px" version="1.1" viewBox="0 0 50 50" width="70px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><polygon clip-rule="evenodd" fill="#f4f5f9" fill-rule="evenodd" points="17.197,32.598 19.711,17.592 23.733,17.592     21.214,32.598   "/><path clip-rule="evenodd" d="M35.768,17.967c-0.797-0.287-2.053-0.621-3.596-0.621    c-3.977,0-6.752,2.029-6.776,4.945c-0.023,2.154,1.987,3.358,3.507,4.08c1.568,0.738,2.096,1.201,2.076,1.861    c0,1.018-1.238,1.471-2.395,1.471c-1.604,0-2.455-0.232-3.773-0.787l-0.53-0.248l-0.547,3.348    c0.929,0.441,2.659,0.789,4.462,0.811c4.217,0,6.943-2.012,6.979-5.135c0.025-1.692-1.053-2.999-3.369-4.071    c-1.393-0.685-2.246-1.134-2.246-1.844c0-0.645,0.723-1.306,2.295-1.306c1.314-0.024,2.268,0.271,3.002,0.58l0.365,0.167    L35.768,17.967z" fill="#f4f5f9" fill-rule="evenodd"/><path clip-rule="evenodd" d="M46.055,17.616h-3.102c-0.955,0-1.688,0.272-2.117,1.24    l-5.941,13.767h4.201c0,0,0.688-1.869,0.852-2.262c0.469,0,4.547,0,5.133,0c0.123,0.518,0.49,2.262,0.49,2.262h3.711    L46.055,17.616 M41.1,27.277c0.328-0.842,1.609-4.175,1.609-4.175c-0.041,0.043,0.328-0.871,0.529-1.43l0.256,1.281    c0,0,0.773,3.582,0.938,4.324H41.1z" fill="#f4f5f9" fill-rule="evenodd"/><path clip-rule="evenodd" d="M13.843,17.616L9.905,27.842l-0.404-2.076    c-0.948-2.467-2.836-4.634-5.53-6.163l3.564,12.995h4.243l6.312-14.982H13.843z" fill="#f4f5f9" fill-rule="evenodd"/><path clip-rule="evenodd" d="M7.232,17.174H0.755l-0.037,0.333    c5.014,1.242,8.358,4.237,9.742,7.841l-1.42-6.884C8.798,17.507,8.105,17.223,7.232,17.174L7.232,17.174z" fill="#f4f5f9" fill-rule="evenodd"/></g></g></svg>
        <h5>Card Number</h5>
        <h6 id='label-cardnumber'>0000 0000 0000 0000</h6>
        <h5>Expiration<span>CVC</span></h5>
        <h6 id='label-cardexpiration'>00 / 0000<span>000</span></h6>
      </div>
      <div class='wave'></div>
    </div>
        <form action="charge.php" method="post" id="payment-form">
            <div class="form-group col-sm-6 col-md-12 col-lg-12  mx-3 ">
                <input type="text" name="first_name" class="form-control StripeElement StripeElement--empty" placeholder="Card Holder Name">
                
                <input type="email" name="email_address" class="form-control  StripeElement StripeElement--empty" placeholder="Email address">
                <div id="card-element" class="form-group ">
                    <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
            </div>
            <button>PAY NOW  ₹ <?php echo $totalPrice; ?></button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="js1/charge.js"></script>
    <script>
        $(function() {
  $('#cardnumber').payment('formatCardNumber');
  $('#cardexpiration').payment('formatCardExpiry');
  $('#cardcvc').payment('formatCardCVC');
  
  $('#cardnumber').keyup(function(event) {
    $('#label-cardnumber').empty().append($(this).val());
  });
  
  $('#cardexpiration').keyup(function(event) {
    var data = $(this).val() + '<span>' + $('#cardcvc').val() + '</span>';
    $('#label-cardexpiration').empty().append(data);
  });
  
  $('#cardcvc').keyup(function(event) {
    var data = $('#cardexpiration').val() + '<span>' + $(this).val() + '</span>';
    $('#label-cardexpiration').empty().append(data);
  });
  
  $('.button-cta').on('click', function () { 
    var proceed = true;
    $(".field input").each(function(){
      $(this).parent().find('path').each(function(){
        $(this).attr('fill', '#dddfe6');
      });
      
      if(!$.trim($(this).val())){
        $(this).parent().find('path').each(function(){
          $(this).attr('fill', '#f1404b');
          proceed = false;
        });
        
        if(!proceed){
          $(this).parent().find('svg').animate({opacity: '0.1'}, "slow");
          $(this).parent().find('svg').animate({opacity: '1'}, "slow");
          $(this).parent().find('svg').animate({opacity: '0.1'}, "slow");
          $(this).parent().find('svg').animate({opacity: '1'}, "slow");
        }
      }
    });
       
    if(proceed) //everything looks good! proceed purchase...
    {
      $('.field').find('path').each(function(){
        $(this).attr('fill', '#3ac569');
      });
      $('.payment').fadeToggle('slow', function() {
        $('.paid').fadeToggle('slow', 'linear');
      });
    }
  });
});
        </script>
</body>

</html>
