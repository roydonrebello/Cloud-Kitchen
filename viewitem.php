<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title id=title>AryaDhurgaCloudKitchen</title>
    <link  rel="icon" type="image" href="catering_food_dinner_20584.ico">
    <style>
    #cont {
        min-height : 578px;
        
    }
    .row{
        margin-top:100px;
    }
    body{
        background-image: url("Studio_Project_V0.png"); 
  background-position: center; 
  background-repeat: no-repeat;
  background-size: 100% ; 
    }
   .image{
    -webkit-box-shadow: 12px 13px 30px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 12px 13px 30px 0px rgba(0,0,0,0.75);
box-shadow: 12px 13px 30px 0px rgba(0,0,0,0.75);
cursor:pointer;

   }
    </style>
</head>
<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php require 'partials/_nav.php' ?>

    <div class="container " id="cont">
        <div class="row jumbotron">
        <?php
            $itemId = $_GET['itemid'];
            $sql = "SELECT * FROM `item` WHERE itemId = $itemId";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $itemName = $row['itemName'];
            $itemPrice = $row['itemPrice'];
            $itemDesc = $row['itemDesc'];
            $itemCategorieId = $row['itemCategorieId'];
        ?>
        <script> document.getElementById("title").innerHTML = "<?php echo $itemName; ?>"; </script> 
        <?php
        echo  '<div class="col " >
   
                <img src="img/food-'.$itemId. '.jpg" class="image "  width="400px" height="400px">
            
            </div>
            <div class="col" style="padding-left:20px;">
                <h3 style="color:blue;font-size:50px;font-family: Georgia, serif;">' . $itemName . '</h3>
                <h5 style="color: #ff0000;font-size:30px;">₹ '.$itemPrice. '/-</h5>
                <p class="mb-0">' .$itemDesc .'</p>';

                if($loggedin){
                    $quaSql = "SELECT `itemQuantity` FROM `viewcart` WHERE itemId = '$itemId' AND `userId`='$userId'";
                    $quaresult = mysqli_query($conn, $quaSql);
                    $quaExistRows = mysqli_num_rows($quaresult);
                    if($quaExistRows == 0) {
                        echo '<form action="partials/_manageCart.php" method="POST">
                              <input type="hidden" name="itemId" value="'.$itemId. '">
                              <button type="submit" name="addToCart" style="margin-top:20px;" class="btn  btn-outline-primary btn-lg">Add to Cart</button>';
                    }else {
                        echo '<a href="viewCart.php"><button class="btn btn-outline-primary btn-lg" style="margin-top:20px;" >Go to Cart</button></a>';
                    }
                }
                else{
                    echo '<button class="btn btn-outline-primary btn-lg" data-toggle="modal" data-target="#loginModal" style="margin-top:20px;" >Add to Cart</button>';
                }
                echo '</form>
                <h6 class="my-1" style="color:red;padding-top:50px;"> View </h6>
                <div class="mx-4" >
                    <a href="itemlist.php?catid=' . $itemCategorieId . '" class="active text-dark">
                    <i class="fas fa-qrcode"></i>
                        <span>All Items</span>
                    </a>
                </div>
                <div class="mx-4">
                    <a href="index.php" class="active text-dark">
                    <i class="fas fa-qrcode"></i>
                        <span>All Category</span>
                    </a>
                </div>
            </div>'
        ?>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</body>
</html>