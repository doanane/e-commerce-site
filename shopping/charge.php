<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php require "../vendor/autoload.php"; ?>

<?php
if(isset($_POST["email"])){
  
  if (empty($_POST['email']) || empty($_POST['username']) || empty($_POST['lname']) || empty($_POST['lname']) || empty($_POST['password']) || empty($_POST['password']) || empty($_POST['password']) || empty($_POST['password'])) {
    echo "<script>alert('Please enter your email address and password');</script>";
} else {
}
}

\Stripe\Stripe::setApiKey($secret_key);

$charge = \Stripe\Charge::create([
    'source' => $_POST['stripeToken'],
    'description' => "ebook shopping",
    'amount' => $_SESSION['price'] * 100,
    //multiplied by 100 because by default it pays with cents
    'currency' => 'usd',

]);

echo "paid";
if(empty($_POST['email']) OR empty($_POST['username']) OR empty($_POST['fname'])
OR empty($_POST['lname'])) {
  echo "<script>alert('one or more inputs are empty');</script>";
} else {

$email = $_POST['email'];
$username = $_POST['username'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$price = $_SESSION['price'];
$token = $_POST['stripeToken'];
$user_id = $_SESSION['user_id'];

$insert = $conn->prepare("INSERT INTO orders (email, username, fname, lname, token, price, user_id)
VALUES(:email, :username, :fname, :lname, :token, :price, :user_id)");

$insert->execute([
  ':email' => $email,
  ':username' => $username,
  ':fname' => $fname,
  ':lname' => $lname,
  ':token' => $token,
  ':price' => $price,
  ':user_id' => $user_id,
]);

header("location: ".APPURL."/download.php");

}
?>