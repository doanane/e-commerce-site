<!-- lecture 25 showing categories
all  the header and footers are replace with the already created php code
we then create a table in my sql database called categories with the ff names
id, name,description and image along side with create_at.
we then go to insert a buttton added in mysql databse and 
then input the name and other options we created in the table
initializig the database table inside the code
$select=$conn->query("SELECT * FROM cartegories")
$select->execute()
$categories=$select->frtchAll(PDO:: FETCH_OBJ)
 -->
<!--clear all the other code containing the design tag since we've already created  table for that
creating a foreach line embeded with php tags nad save categories as category.
relace name, image and description with  <php echo $category->image, description or image

-->
<?php require  "../includes/header.php"; ?>
<?php require  "../config/config.php"; ?>
<?php

$select = $conn->query("SELECT * FROM categories");
$select->execute();

$categories = $select->fetchAll(PDO::FETCH_OBJ);
?>

<div class="row mt-5">
    <?php foreach ($categories as $category) : ?>
    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
        <div class="card">
            <img height="213px" class="card-img-top" src="images/<?php echo $category->image; ?>">
            <div class="card-body">
                <h5><b><?php echo $category->name; ?></b> </h5>
                <div class="d-flex flex-row my-2">
                    <div class="text-muted"><?php echo $category->description; ?>
                    </div>

                </div>
                <a href="<?php echo APPURL;?>/shopping/single.php?id=<?php echo $category->id;?>"
                    class="btn btn-primary w-100 rounded my-2">Discover
                    Products</a>
            </div>
        </div>
    </div>
    <br><?php endforeach ?>




    <?php require  "../includes/footer.php"; ?>