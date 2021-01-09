
<?php
    if(isset($_POST['submit']))
    {
include ('connection.php');
        $image =$_FILES['file']['name'];
        $name=$_POST['pname'];
        $price=$_POST['pric'];
        $pcode=$_POST['code'];
        $discount=$_POST['disc'];
        $psize=$_POST['size'];
        $description=$_POST['descr'];
        $target="upload/".basename($image);
        $query="insert into product (name,price,product_code,discount,size,description,image) values('$name','$price','$pcode','$discount','$psize','$description','$image')";
        // mysqli_query($db,$query);
        move_uploaded_file($_FILES['file']['tmp_name'], $target);

if ($con->query($query) === TRUE) {
  header('location:detail.php');
} else {
  echo "Error: " . $query . "<br>" . $con->error;
}



   
}
?>