<?php include('inc/navbar.php');
require_once('inc/connection.php'); ?>
<?php
if(isset($_POST['delete_multiple']))
{
    $all_id = $_POST['deleteId'];
    $extract_id = implode(',',$all_id);
    //  echo $extract_id;
     $delete_q = "DELETE FROM products WHERE id IN ($extract_id)";
     $stat = $connection->prepare($delete_q);
     $stat->execute();
     header('location:index.php');
}
 
 $get_product_q = "SELECT * FROM products order by id ";
 $stat = $connection->prepare($get_product_q);
 $stat->execute();
 $products = $stat->fetchAll();
//  var_dump($products);


?>
<section>
    <div class="container my-5">
        <a href="create.php" class="btn btn-success " role="button" aria-disabled="true"> Add Product </a>
        <form action="" method="post">
        <button class="btn btn-danger " type="submit" name="delete_multiple"> Delete Product </button>
        <h1 class="text-center mb-3 text-danger"> Welcome To products List Page </h1>
        <div class="row ty-5">
        <?php
                foreach($products as $product){
                 ?>
            <div class="col-md-4">
                <div class="card " style="width: 18rem;" type="checkbox">
                    <div class="card-body" >
                        <h5 class="card-title"><?=$product['id'] ?></h5>
                        <h4 class="card-title"><?=$product['name'] ?></h4>
                        <h4 class="card-title"><?=$product['price'] ."$" ?></h4>
                        <h4 class="card-title">
                            <?php 
                             if($product['typeswitcher'] == 'book')
                                       {
                                        echo "Weight : " . $product['weight']  . "KG";
                                       }
                                    elseif($product['typeswitcher'] == 'dvd'){
                                        echo  "Size : " . $product['size'] . "Mb";
                                       }
                                        else{
                                           echo "Diemension : " . $product['h']  ."*" . $product['w'] . "*" . $product['l'] ;
                                            }
                         ?></h4>
                        
                         

                        <input type="checkbox" id="vehicle1" name="deleteId[]" value="<?= $product['id']; ?>" >
                        
                    </div>
                </div>
            </div>
            <?php }?>

        </div>

    </div>
</section>


        </form>
        

<?php include('inc/footer.php') ?>