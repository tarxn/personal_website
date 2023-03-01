<?php
include("header.php");
?>

<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url('images/bannerimg.jpg');">
    <div class="content text-center">
        <h1 class="text-white">Gallery</h1>
    </div>
</div>

<!-- Main Content Area -->

<div class="container-fluid my-5 d-grid gap-5">
    <div>
        <?php

$connection = mysqli_connect("localhost", "u731109599_kavyadb", "bUH:OXI9GZ]9", "u731109599_kavyadb");
$db = mysqli_select_db($connection, '');

        $query = "SELECT * FROM `gallary`";
        $query_run = mysqli_query($connection, $query);
        $rowcount = mysqli_num_rows( $query_run );
        $sr=0;
        while ($row = mysqli_fetch_array($query_run)) {
        ?>
                
                <div class="responsive">
                <div class="gallery">
                <?php echo '<img src="data:image;base64,' . base64_encode($row['images']) . '"  alt="Image" width="1000" height="auto">' ?>
                <div class="desc"><?php echo $row['description']; ?></div>
                </div>
                </div>;
                
            

        <?php
        }
        ?>
    </div>
</div>
<?php
include("footer.php");
?>