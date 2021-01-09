
<?php
include('header.php');
?>

<!--form-->
<div class=" my-auto content-align-center">
    <div class="container bg-light mx-auto w-50 "style="height: 785px;">
        <h1 style="text-align: center;">ADD PRODUCT</h1>
    <form method="POST" action="insrtdata.php" enctype="multipart/form-data">
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" name="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
     <!-- <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="catagry">Select Category</label>
  </div>
  <select class="custom-select" name="Category" id="catagry">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div> -->
        <div class="form-group ">
            <label for="nam" >Product Name</label>
            <input type="text" name="pname" class="form-control" id="nam" placeholder="Enter Product name">
        </div>

        <div class="form-group ">
            <label for="pri">Price</label>
            <input type="text" class="form-control" id="pri" name="pric" placeholder="Enter Price">
        </div>
   
        <div class="form-group ">
            <label for="prodct_code">Product Code</label>
            <input type="text" name="code" class="form-control" id="prodct_code" placeholder="Product Code">
        </div>
        <div class="form-group ">
            <label for="discont">Discount</label>
            <input type="text" name="disc" class="form-control" id="discont">
        </div>
        <div class="form-group ">
            <label for="prodct_size">Product Size</label>
            <input type="text" name="size" class="form-control" id="prodct_size">
        </div>
        <div class="form-group ">
            <label for="prodct_dis">Product Description</label>
            <textarea name="descr" class="form-control" aria-label="With textarea"></textarea>
        </div>
         <input  type="submit" name="submit" class="btn btn-primary pull-right" value="Add">
</div>

                
</form>



</div>

</div>
<!--form end-->
<div style="margin:-85px 60px 60px 60px;">
<?php
include('footer.php');
?>
</div>
