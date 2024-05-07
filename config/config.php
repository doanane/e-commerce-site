<?php
//host
$host = "localhost";

//dbname
$dbname = "BookStore";

//username

$user = "root";

//password
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$secret_key = 'sk_test_51PCI9dBHoNv7perQuxEqiuUyZxZlBeUUuvErRnWdHf7LI9cplzRLsqxDlZgvdipN32KDd59rh2H34rmeX2RrBIB100I8wsvMFN';
// if ($conn) {
//     echo "successful";
// } else {
//     echo "failed";
// }