<?php
include('header.php');
$user_id=$_GET['id'];
include('connection.php');
$user_data=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM product where id='".$user_id."'"));
?>

<!---------------------------------product detail------------------------------>
<div class="container-fluid">
    <div class="container  pt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="upload/<?php echo $user_data['image']; ?>" class="card-img-top" alt="...">
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="text-align-left card-body">
                        <div id="detail">
                            <p>Product Price:  PKR <?php echo $user_data['price']; ?></p>
                            <p>Product Code:   <?php echo $user_data['product_code']; ?></p>
                            <p>Product Discount: <?php echo $user_data['discount']; ?>%</p>
                            <p>Size: <?php echo $user_data['size']; ?></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!---------------------------------product detail------------------------------>
<?php
include ('footer.php');
?>

