<!-- lesson 25 ahowing products for every category -->
<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php


if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $rows = $conn->query("SELECT * FROM products WHERE status = 1 AND category_id='$id'");
    $rows->execute();
    $allRows = $rows->fetchAll(PDO::FETCH_OBJ);
}
?>

<div class="row mt-5">
    <?php foreach ($allRows as $product) : ?>
    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
        <div class="card">
            <img height="213px" class="card-img-top" src="../images/<?php echo $product->image; ?>">
            <div class="card-body">
                <h5>
                    <b><?php echo $product->name; ?></b>
                </h5>
                <h5 class="d-inline">
                    <div class="text-muted d-inline">($<?php echo $product->price; ?>/item)</div>
                </h5>
                <p><?php echo $product->description; ?></p>
                <a href="<?php echo APPURL; ?>/categories/single-category.php?id=<?php echo $category->id; ?>"
                    class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php require "../includes/footer.php"; ?>