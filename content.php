
<!---------------------------------Slider------------------------------>
<?php
include('connection.php');
$sql2 = "SELECT * FROM product";
$result2 = $con->query($sql2);
?>
<div id="myCarousel" class="carousel slide"  data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="Interrior.jpg" alt="First slide" style="height: 391px">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="Interrior1.jpg" alt="Second slide" style="height: 391px">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="Interrior2.jpg" alt="Third slide" style="height: 391px">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="Interrior3.jpg" alt="forth slide" style="height: 391px">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>


<!---------------------------------Slider------------------------------>

<!---------------------------------products------------------------------>
<div class="container-fluid">

    <div class="container section">
        <div class="row-md-12">
            <div class="col">
                <h2 class="section-head">New Products of MZ</h2>
            </div>
        </div>

        <div class="row my-3">
            <?php while($res2 = mysqli_fetch_array($result2)) { ?>
                <a href="pdetail.php?id=<?php echo $res2['id']; ?>">
<div class="col-md-4" style="text-align:center; color:black;>
                        <div class="card">
                            <img src="upload/<?php echo $res2['image']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title"> <?php echo $res2['name']; ?></h4>
                                <p class="card-text"><?php echo $res2['description']; ?></p>
                            </div>

                        </div>
                    </div>
                </a>
                <?php
            }
            ?>

        </div>
    </div>
</div>
