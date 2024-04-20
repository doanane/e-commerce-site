<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>
<?php

$rows = $conn->query("SELECT * FROM products WHERE status = 1");
$rows->execute();
$allRows = $rows->fetchAll(PDO::FETCH_OBJ);
?>


<div class="row mt-5">
    <?php foreach ($allRows as $product) : ?>
    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
        <div class="card">
            <img height="213px" class="card-img-top" src="images/<?php echo $product->image; ?>">
            <div class="card-body">
                <h5 class="d-inline">
                    <b<?php echo $product->price; ?>< /b>
                </h5>
                <h5 class="d-inline">
                    <div class="text-muted d-inline">($<?php echo $product->price; ?>/item)</div>
                </h5>
                <p><?php echo $product->description; ?></p>
                <a href="<?php echo APPURL; ?>shopping/single.php?id=<?php echo $product->name; ?>"
                    class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i>
                </a>

            </div>
        </div>
    </div>
    <br>
    <?php endforeach; ?>
    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-5">
        <div class="card">
            <a href="http://localhost/bookstore/shopping/single.php"><img height="213px" class="card-img-top"
                    src="images/django.png"></a>
            <div class="card-body">
                <h5 class="d-inline"><b>Django Basics</b> </h5>
                <h5 class="d-inline">
                    <div class="text-muted d-inline">($20/item)</div>
                </h5>
                <p>Monotonectally enable customized
                    growth strategies and 24/7 portals. functional opportunities. </p>
                <a href="#" class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <br>
    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
        <div class="card">
            <img height="213px" class="card-img-top" src="images/django.png">
            <div class="card-body">
                <h5 class="d-inline"><b>Django Basics</b> </h5>
                <h5 class="d-inline">
                    <div class="text-muted d-inline">($50/item)</div>
                </h5>
                <p>Monotonectally enable customized
                    growth strategies and 24/7 portals. functional opportunities. </p>
                <a href="#" class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <br>
    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
        <div class="card">
            <img height="213px" class="card-img-top" src="images/django.png">
            <div class="card-body">
                <h5 class="d-inline"><b>Django Basics</b> </h5>
                <h5 class="d-inline">
                    <div class="text-muted d-inline">($25/item)</div>
                </h5>
                <p>Monotonectally enable customized
                    growth strategies and 24/7 portals. functional opportunities. </p>
                <a href="#" class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <br>
    <!-- <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
        <div class="card">
            <img height="213px" class="card-img-top" src="images/html5.jpg">
            <div class="card-body">
                <h5 class="d-inline"><b>Html5 Basics</b> </h5>
                <h5 class="d-inline">
                    <div class="text-muted d-inline">($20/item)</div>
                </h5>
                <p>Monotonectally enable customized
                    growth strategies and 24/7 portals. functional opportunities. </p>
                <a href="#" class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <br>

    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
        <div class="card d-relative">
            <img height="213px" class="card-img-top" src="images/django.png">
            <div class="card-body" width="200px">
                <h5 class="d-inline"><b>Django Basics</b> </h5>
                <h5 class="d-inline">
                    <div class="text-muted d-inline">($10/item)</div>
                </h5>
                <p>Monotonectally enable customized
                    growth strategies and 24/7 portals. functional opportunities. </p>
                <a href="#" class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div> -->
</div>

<?php require "includes/footer.php"; ?>


</body>

</html>