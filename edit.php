<?php
include('header.php');
?>
<?php
$user_id=$_GET['id'];
include('connection.php');
$user_data=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM product where id=".$user_id.""));

if(isset($_POST['sub']))
{

    //update the user
    $image =$_FILES['file']['name'];
        $name=$_POST['title'];
        $price=$_POST['pric'];
        $pcode=$_POST['code'];
        $discount=$_POST['disc'];
        $psize=$_POST['size'];
        $description=$_POST['descr'];
    mysqli_query($con,"UPDATE product SET image= '$image',name='$name',price='$price',product_code='$pcode',discount='$discount',size='$psize',description='$description' WHERE id = '$user_id'");

    header('Location: detail.php?message="Updated Successfully"');

}


?>

<!--form-->
<div class="  px-auto content-align-center">
    <div class="container mx-auto w-50 bg-light">
        <h1>EDIT PRODUCT</h1>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="input-group ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" name="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>

        <div class="form-group ">
            <label for="nam">Product Name</label>
            <input type="text" name="title" value="<?php echo $user_data['name'];?>" class="form-control" id="nam">
        </div>

        <div class="form-group ">
            <label for="pri">Price</label>
            <input type="text" class="form-control" value="<?php echo $user_data['price'];?>" id="pri" name="pric" >
        </div>

        <div class="form-group ">
            <label for="prodct_code">Product Code</label>
            <input type="text" name="code" value="<?php echo $user_data['product_code'];?>" class="form-control" id="prodct_code" >
        </div>
        <div class="form-group ">
            <label for="discont">Discount</label>
            <input type="text" name="disc" value="<?php echo $user_data['discount'];?>" class="form-control" id="discont">
        </div>
        <div class="form-group ">
            <label for="prodct_size">Product Size</label>
            <input type="text" name="size" value="<?php echo $user_data['size'];?>" class="form-control" id="prodct_size">
        </div>
        <div class="form-group ">
            <label for="prodct_dis">Product Description</label>
            <textarea name="descr" class="form-control" aria-label="With textarea"><?php echo $user_data['description'];?></textarea>
        </div>
          <input type="submit" name="sub" class="btn btn-primary" value="Add">
</div>


</form>

</div>

</div>
<!--form end-->
<div style="margin: : -200px 60px 60px 60px">
<?php
include('footer.php');
?>
</div>
