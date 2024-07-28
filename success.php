<?php
    if(!empty($_GET['tid']) && !empty($_GET['product'])){
        $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

        $tid = $GET['tid'];
        $product = $_GET['product'];
    }else{
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
    <link  rel="icon" type="image" href="catering_food_dinner_20584.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
    .container {
  margin: auto;
  width: 60%;
  border: 3px dashed #73AD21;
  margin-top: 100px;
}
h2{
    color:green;
    font-size:40px;
    font-weight:bold;
}
p{
    color:orange;
    font-weight:bold;
    font-size:20px;
}
</style>
</head>

<body>
    <div class="container mt-4" >
        <h2>Thank you for purchasing </h2>
        <hr>
        <p>Your transaction ID id&nbsp;&nbsp;:&nbsp;&nbsp;<b><?php echo $tid; ?></b></p>
        <P >Click on checkout to confirm the order user need to fill details <button onclick="redirect()">click here</button></p>
    </div>
    <script>
       function redirect() {
      window.location.href = "http://localhost/AryaDhurga/viewCart.php";
    }
    </script>  
</body>

</html>