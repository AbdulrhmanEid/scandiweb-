<?php include('inc/navbar.php') ?>
<?php
 require_once('inc/connection.php');
 $get_product_q = "SELECT * FROM products order by id ";
 $stat = $connection->prepare($get_product_q);
 $stat->execute();
 $products = $stat->fetchAll();
 var_dump($products);


?>
<section>
    <div class="container my-5">
        <a href="create.php" class="btn btn-danger " role="button" aria-disabled="true"> Add Product </a>
        <h1 class="text-center mb-3 text-danger"> Welcome To products List Page </h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<?php include('inc/footer.php') ?>