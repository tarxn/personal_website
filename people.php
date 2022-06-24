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
   
   
    while ($row = mysqli_fetch_array($query_run)) {
    ?>

        <div class="p-5 border_card row d-flex">
            <div class="col-3 p-0 order-1"  style="z-index:1;" >
                <div >
                <?php echo '<img class="d-inline-block" src="data:image;base64,' . base64_encode($row['image']) . '"  alt="Image" width="190px" height="auto" >'; ?>
        
            </div>
            </div>
            <div class="col-9 py-2 order-2" style="z-index:1; position:relative; ">
                <div >
                <h4><?php echo $row['name']; ?></h4>
                <?php echo $row['edu']; ?><br>
                Area of interest:<?php echo $row['Area of Interest']; ?><br>
                About me:<?php echo $row['About me']; ?><br>
                <a href="<?php echo $row['Google scholar']; ?>" class="link-primary">Google Scholar</a> |
                <a href="<?php echo $row['Research Gate']; ?>" class="link-primary"> Research Gate </a><br>
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