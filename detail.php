<?php
include ('header.php');
//include('accessControl.php');
include('connection.php');

$sql = "SELECT * FROM product";
$result = $con->query($sql); // $con
//var_dump($result);
//die();



?>
<!DOCTYPE html>

<head>
    <title>Basic Level Crud  Example</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">

    <h2>Product Details</h2>
    <br>

<a href="productadd.php" class="btn btn-primary">Add Product</a>
    <div class="pull-right">
       <!-- /*<button class="btn btn-primary"><a href="add.php" style="color:white">Add New</a></button>*/ -->
    </div><br>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ProductID</th>
            <th>ProductName</th>
            <th>ProductPrice</th>
            <th>ProductCode</th>
            <th>IN_stock</th>
            <th>Discount</th>
            <th>ProductSize</th>
            <th>Image</th>
            <th>ProductDescription</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php while($res = mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?php echo $res['id'] ?></td>
                <td><?php echo $res['name']?></td>
                <td><?php echo $res['price'] ?></td>

                <td><?php echo $res['product_code'] ?></td>
            
                <td><?php echo $res['in_stock'] ?></td>
            
                <td><?php echo $res['discount'] ?></td>
            
                <td><?php echo $res['size'] ?></td>

                <td><img src="./upload/<?php echo $res['image'] ?>" width="50px" height="50px"></td>
            
            
                <td><?php echo $res['description'] ?></td>
            
                <td><button class="btn btn-warning"><a href="edit.php?id=<?php echo
                        $res['id']?>" style="color:white">Edit</a></button>
                    <button class="btn btn-danger" onclick="delete_row(<?php  echo $res['id']   ?>)">Delete</button></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>
<script>
    function delete_row(id)
    {
        //console.log($id);
        //return false;
        if(confirm("Are you sure you want to delete?"))
        {
            window.location.href="delet.php?id="+id+"";
        }
    }
</script>
</body>
</html>