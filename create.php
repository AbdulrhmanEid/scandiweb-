<?php include('inc/navbar.php')?>
<section>
    <div class="container my-5">
        <h1>Welcome To Our Create Product Page</h1>
        <form action="handlers/createProduct.php" method="post">
            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" placeholder="Enter Product Name" name="name" required>
            </div> 
            <div class="mb-3">
                <label class="form-label">Product Price ($)</label>
                <input type="text" class="form-control" placeholder="Enter Product Price in $" name="price" required>
            </div> 
            <div class="mb-3">
            <label class="form-label">Type Switcher</label>
             <select class="form-select form-select-md mb-3" aria-label="Large select example" name="typeswitcher" id="name">
                 <option value="book" selected>Book</option>
                 <option value="dvd">DVD</option>
                 <option value="disc">Disc</option>
            </select> 
            </div> 

            <div class="content">

            <div id ="book" class="data my-5 ">
            <label class="form-label">Weight(KG)</label>
            <input type="text" class="form-control" placeholder="Enter Book Weight (KG)" name="weight">
            </div>

            <div id="dvd"   class="data my-5">
            <label class="form-label">Size(Mb)</label>
            <input type="text" class="form-control" placeholder="Enter Disc Size (Mb)" name="size">
             
            </div>
            <div id="disc"  class ="data my-5">
            <label class="form-label">Dimensions  (CM)</label>
            <input type="text" class="form-control" placeholder="Enter Furntiure Height (CM) "  name="h">
            <input type="text" class="form-control" placeholder="Enter Furntiure Width  (CM )"  name="w">
            <input type="text" class="form-control" placeholder="Enter Furntiure Length (CM) "  name="l">
            </div>
            </div>

            <button type="submit" name="add-button" class="btn btn-success">Add Product</button>
            <a href="create.php" class="btn btn-danger " role="button" aria-disabled="true"> Cancel</a>
        </form>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#name").on('change',function(){
            $(".data").hide(); 
            $("#" + $(this).val()).fadeIn(700);
        }).change();
    });
    </script>
<?php include('inc/footer.php') ?>
    

