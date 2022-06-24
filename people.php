<?php
include("header.php");
?>

<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url('images/bannerimg.jpg');">
    <div class="content text-center">
        <h1 class="text-white">People</h1>
    </div>
</div>

<!-- Main Content Area -->
<div class="container my-5 d-grid gap-5">
    <?php

    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, 'personal_website');

    $query = "SELECT * FROM `people`";
    $query_run = mysqli_query($connection, $query);
    $i = 0;
   
    while ($row = mysqli_fetch_array($query_run)) {
    ?>

        <div class="p-5 border_card d-flex">
            <div class="col-left ">
                <?php echo '<img class="d-inline-block align-text-center" src="data:image;base64,' . base64_encode($row['image']) . '"  alt="Image" width="170px" height="auto" >'; ?>
                <!-- <img class="ppl_img" src="images/stock_woman.jpg" class="d-inline-block align-text-center"> -->
            </div>
            <div class="col-right">
                <p>
                <h4><?php echo $row['name']; ?></h4>
                <?php echo $row['edu']; ?><br>
                Area of interest:<?php echo $row['Area of Interest']; ?><br>
                About me:<?php echo $row['About me']; ?><br>
                <a href="<?php echo $row['Google scholar']; ?>" class="link-primary">Google Scholar</a>,
                <a href="<?php echo $row['Research Gate']; ?>" class="link-primary">Research Gate </a><br>
                </p>
            </div>
        </div>
    <?php
    }
    ?>

</div>





<?php
include("footer.php");
?>