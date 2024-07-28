<?php
  session_start();
  
require_once("./vendor/autoload.php");
require_once("./config1/db.php");
require_once("./lib1/pdo_db.php");
require_once("./modals/Customer.php");
require_once("./modals/Transaction.php");

\Stripe\Stripe::setApiKey("sk_test_51HvJhyAKyiNbhJfoktZacSvdyFLz7Fypt8ejdilbkN4uoTdRdQmzEePpJS6dIDfYApX8m0n6Ketzt30VvvqfNIfM00iCuOIOoS");


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
            

//Sanitize post array

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $POST['first_name'];
$email = $POST['email_address'];
$token = $POST['stripeToken'];

//Create Customer in stripe
$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
));

//Charge Customer
$charge = \Stripe\Charge::create(array(
    "amount" =>  $totalPrice,
    "currency" => "inr",
    "description" => "$itemName ",
    "customer" => $customer->id
));

//instantiate customer
$customer = new Customer();

//customer data
$customerData = [
    'id' => $charge -> customer,
    'first_name' => $first_name,

    'email' => $email
];

//call customer method
$customer -> addCustomer($customerData);

//instantiate transaction
$transaction = new Transaction();

//transaction data
$transactionData = [
    'id' => $charge -> id,
    'customer_id' => $charge -> customer,
    'product' => $charge -> description,
    'amount' => $charge -> amount,
    'currency' => $charge -> currency,
    'status' => $charge -> status
];

//call transaction method
$transaction -> addTransaction($transactionData);

//redirect to successs
header("Location:success.php?tid=" . $charge->id . "&product=" . $charge->description);
