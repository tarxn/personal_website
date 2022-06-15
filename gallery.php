<?php
include("header.php");
?>

<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url('images/1836325.jpg');">
    <div class="content text-center">
        <h1 class="text-white">Gallery</h1>
    </div>
</div>

<!-- Main Content Area -->

<div class="container my-5 d-grid gap-5">
    <div>
        <div class="container-fluid">
            <h3 style="color:blue">

                Sponsored research projects as Principal Investigator

            </h3>
        </div>
        


            <?php

            $connection = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($connection, 'personal_website');

            $query = "SELECT * FROM `gallary`";
            $query_run = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($query_run)) {
            ?>
            <div class="p-5 border_card">
                <?php echo '<img src="data:image;base64,' . base64_encode($row['images']) . '"  alt="Image" height="auto" width="1200">'; ?>



        </div>
        <?php
            }
        ?>
    </div>





</div>



<?php
include("footer.php");
?>