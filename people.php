<?php
include("header.php");
?>

<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url('images/bannerimg.jpg');">
    <div class="content text-center">
        <h1 class="text-white">Team</h1>
    </div>
</div>

<!-- Main Content Area -->
<div class="container my-3 d-grid gap-3">
    <h4 >

        People
    </h4>
    <?php
    $connection = mysqli_connect("localhost", "u731109599_kavyadb", "bUH:OXI9GZ]9", "u731109599_kavyadb");
    $db = mysqli_select_db($connection, '');

    $query = "SELECT * FROM `people`";
    $query_run = mysqli_query($connection, $query);


    while ($row = mysqli_fetch_array($query_run)) {
    ?>
        <div class="p-4 card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                <?php echo '<img class="d-inline-block" src="data:image;base64,' . base64_encode($row['image']) . '"  alt="Image" width="220px" height="auto" >'; ?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row['name']; ?></h4>
                        <p class="card-text">
                        <?php echo $row['edu']; ?><br>
                    Area of interest:<?php echo $row['Area of Interest']; ?><br>
                    About me:<?php echo $row['About me']; ?><br>
                    <a href="<?php echo $row['Google scholar']; ?>" class="link-primary">Google Scholar</a> |
                    <a href="<?php echo $row['Research Gate']; ?>" class="link-primary"> Research Gate </a><br>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>



        
    <?php
    }
    mysqli_close($connection);
    ?>

    <div class="container-fluid">
        <h3 style="color:blue">

            Technical Staff

        </h3>
    </div>


    <?php

    $connection = mysqli_connect("localhost", "u731109599_kavyadb", "bUH:OXI9GZ]9", "u731109599_kavyadb");
    $db = mysqli_select_db($connection, '');
    $query = "SELECT * FROM `technical staff`";
    $query_run = mysqli_query($connection, $query);


    while ($row = mysqli_fetch_array($query_run)) {
    ?>

        <div class="p-4 card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                <?php echo '<img class="d-inline-block" src="data:image;base64,' . base64_encode($row['image']) . '"  alt="Image" width="220px" height="auto" >'; ?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row['name']; ?></h4>
                        
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <div class="container-fluid">
        <h3 style="color:blue">

            Alumni

        </h3>
    </div>

    <?php

    $connection = mysqli_connect("localhost", "u731109599_kavyadb", "bUH:OXI9GZ]9", "u731109599_kavyadb");
    $db = mysqli_select_db($connection, '');
    $query = "SELECT * FROM `alumni`";
    $query_run = mysqli_query($connection, $query);


    while ($row = mysqli_fetch_array($query_run)) {
    ?>

<div class="p-4 card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                <?php echo '<img class="d-inline-block" src="data:image;base64,' . base64_encode($row['image']) . '"  alt="Image" width="220px" height="auto" >'; ?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">

                <h4><?php echo $row['name']; ?></h4>
                <p>
                    <?php echo $row['edu']; ?><br>
                    Area of interest:<?php echo $row['area of interest']; ?><br>
                    About me:<?php echo $row['about']; ?><br>

                    <a href="<?php echo $row['google scholar']; ?>" class="link-primary">Google Scholar</a> |
                    <a href="<?php echo $row['researchgate']; ?>" class="link-primary"> Research Gate </a><br>
                </p>

                </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>


</div>
<?php
include("footer.php");
?>