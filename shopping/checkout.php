<?php require  "../includes/header.php"; ?>
<?php require  "../config/config.php"; ?>

<?php
/* at the top of 'check.php' */
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    /* 
         Up to you which header to send, some prefer 404 even if 
         the files does exist for security
      */
    header('HTTP/1.0 403 Forbidden', TRUE, 403);

    /* choose the appropriate page to redirect users */
    die(header('location: ' . APPURL . ''));
}

if (!isset($_SERVER['HTTP_REFERER'])) {
    // redirect them to your desired location
    header('location: cart.php');
    exit;
}


if (!isset($_SESSION['username'])) {
    header("location: " . APPURL . "");
}


?>
<!-- Heading -->

<h2 class="my-5 h2 text-center">Checkout</h2>

<!--Grid row-->
<div class="row d-flex justify-content-center align-items-center h-100 mt-5 mt-5">

    <!--Grid column-->
    <div class="col-md-12 mb-4">

        <!--Card-->
        <div class="card">

            <!--Card content-->
            <form class="card-body" method="POST" action="charge.php">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-2">

                        <!--firstName-->
                        <div class="md-form">
                            <label for="firstName" class="">First name</label>

                            <input type="text" name="fname" id="firstName" class="form-control">
                        </div>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-2">

                        <!--lastName-->
                        <div class="md-form">
                            <label for="lastName" class="">Last name</label>

                            <input type="text" name="lname" id="lastName" class="form-control">
                        </div>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Username-->
                <div class="md-form mb-5">
                    <label for="email" class="">Username</label>

                    <input type="text" name="username" class="form-control" placeholder="Username"
                        aria-describedby="basic-addon1">
                </div>

                <!--email-->
                <div class="md-form mb-5">
                    <label for="email" class="">Email</label>

                    <input type="text" name="email" id="email" class="form-control" placeholder="youremail@example.com">
                </div>



                <!--Grid row-->
                <!--address-->
                <div class="md-form mb-5">
                    <label for="landmark" class="">Landmark</label>

                    <input type="text" name="landmark" id="landmark" class="form-control" placeholder="1234 Main St">
                </div>

                <div class="md-form mb-5">
                    <label for="phone" class="">Phone</label>

                    <input type="text" name="phone" id="phone" class="form-control" placeholder="+233 12 345 679">
                </div>


                <!--Grid row-->
                <div class="row">



                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <label for="city" class="">City</label>

                        <input type="text" name="city" id="city" class="form-control" placeholder="City">

                        <select class="form-select" name="city" aria-label="Default select example">

                            <option selected>Choose City</option>
                            <option value="1">London</option>
                            <option value="2">Berlin</option>
                            <option value="3">Cairo</option>
                            <option value="Abidjan">Abidjan</option>
                            <option value="Abuja">Abuja</option>
                            <option value="Accra">Accra</option>
                            <option value="Addis Ababa">Addis Ababa</option>
                            <option value="Alexandria">Alexandria</option>
                            <option value="Algiers">Algiers</option>
                            <option value="Antananarivo">Antananarivo</option>
                            <option value="Asmara">Asmara</option>
                            <option value="Bamako">Bamako</option>
                            <option value="Bangui">Bangui</option>
                            <option value="Banjul">Banjul</option>
                            <option value="Bissau">Bissau</option>
                            <option value="Blantyre">Blantyre</option>
                            <option value="Brazzaville">Brazzaville</option>
                            <option value="Bujumbura">Bujumbura</option>
                            <option value="Cairo">Cairo</option>
                            <option value="Cape Town">Cape Town</option>
                            <option value="Casablanca">Casablanca</option>
                            <option value="Conakry">Conakry</option>
                            <option value="Dakar">Dakar</option>
                            <option value="Dar es Salaam">Dar es Salaam</option>
                            <option value="Djibouti City">Djibouti City</option>
                            <option value="Dodoma">Dodoma</option>
                            <option value="Douala">Douala</option>
                            <option value="Durban">Durban</option>
                            <option value="Freetown">Freetown</option>
                            <option value="Gaborone">Gaborone</option>
                            <option value="Harare">Harare</option>
                            <option value="Johannesburg">Johannesburg</option>
                            <option value="Kampala">Kampala</option>
                            <option value="Kano">Kano</option>
                            <option value="Khartoum">Khartoum</option>
                            <option value="Kigali">Kigali</option>
                            <option value="Kinshasa">Kinshasa</option>
                            <option value="Kumasi">Kumasi</option>
                            <option value="Lagos">Lagos</option>
                            <option value="Libreville">Libreville</option>
                            <option value="Lilongwe">Lilongwe</option>
                            <option value="Lome">Lome</option>
                            <option value="Luanda">Luanda</option>
                            <option value="Lubumbashi">Lubumbashi</option>
                            <option value="Lusaka">Lusaka</option>
                            <option value="Malabo">Malabo</option>
                            <option value="Maputo">Maputo</option>
                            <option value="Maseru">Maseru</option>
                            <option value="Mbabane">Mbabane</option>
                            <option value="Mogadishu">Mogadishu</option>
                            <option value="Monrovia">Monrovia</option>
                            <option value="Moroni">Moroni</option>
                            <option value="Nairobi">Nairobi</option>
                            <option value="N'Djamena">N'Djamena</option>
                            <option value="Niamey">Niamey</option>
                            <option value="Nouakchott">Nouakchott</option>
                            <option value="Ouagadougou">Ouagadougou</option>
                            <option value="Port Louis">Port Louis</option>
                            <option value="Porto-Novo">Porto-Novo</option>
                            <option value="Praia">Praia</option>
                            <option value="Pretoria">Pretoria</option>
                            <option value="Rabat">Rabat</option>
                            <option value="Rome">Rome</option>
                            <option value="Saint-Denis">Saint-Denis</option>
                            <option value="São Tomé">São Tomé</option>
                            <option value="Tripoli">Tripoli</option>
                            <option value="Tunis">Tunis</option>
                            <option value="Victoria">Victoria</option>
                            <option value="Windhoek">Windhoek</option>
                            <option value="Yaoundé">Yaoundé</option>
                            <option value="Yamoussoukro">Yamoussoukro</option>
                            <option value="Zanzibar City">Zanzibar City</option>
                            <option value="Zimbabwe">Zimbabwe</option>

                        </select>

                    </div>


                    <hr class="mb-4">
                    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="pk_test_51PCI9dBHoNv7perQmBwO8hISGyInoCLdIYXdtdmVb9a8QQGuP9KmZ1N9RfUKhRXlSvsosnyCPt5AvccZ8kUSwxmO00Wh69MQkv"
                        data-description=" selling of online books" data-currency="usd" data-label="pay now">
                    </script>

            </form>

        </div>

    </div>
</div>
<?php require "../includes/footer.php"; ?>