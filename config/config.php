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

// if ($conn) {
//     echo "succussful";
// } else {
//     echo "failed";
// }