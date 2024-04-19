<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>

<?php
if (isset($_SESSION['username'])) {
    header("location:" . APPURL . "");
}
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "<script>alert('Please enter your email address and password');</script>";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // The code creates a new variable $login and assigns it the result of a query on the $conn object.
        // The query is a SELECT statement that retrieves all columns (*) from the users table where the email column is equal to the value of the $email variable.
        // The execute() method is then called on the $login object to execute the query.
        $login = $conn->query("SELECT * FROM users WHERE email = '$email'");
        $login->execute();

        // The fetch() method is then called on the $login object, with the PDO::FETCH_ASSOC parameter.
        // This method retrieves a row of data from the result set of the SQL query, and returns it as an associative array.
        $fetch = $login->fetch(PDO::FETCH_ASSOC);

        if ($login->rowCount() > 0) {
            if (password_verify($password, $fetch['mypassword'])) {
                echo "login successful";
                // $_SESSION['username'] = $fetch['username'];
                // $_SESSION['user_id'] = $fetch['user_id'];
                // header("Location: " . APPURL . "");
            } else {
                $_SESSION['username'] = $fetch['username'];
                $_SESSION['user_id'] = $fetch['user_id'];
                header("Location: " . APPURL . "");
                // echo "<script>alert('incorrect password');</script>";
            }
        } else {
            echo "<script>alert('loggedin');</script>";
        }
    }
}

?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <form class="form-control mt-5" method="POST" action="login.php">
            <h4 class="text-center mt-3"> Login </h4>

            <div class="">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="">
                    <input type="email" name="email" class="form-control">
                </div>
            </div>
            <div class="">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="">
                    <input type="password" name="password" class="form-control" id="inputPassword">
                </div>
            </div>
            <button name="submit" class="w-100 btn btn-lg btn-primary mb-4 mt-4" type="submit">Login</button>

        </form>
    </div>
</div>


<?php require "../includes/footer.php"; ?>