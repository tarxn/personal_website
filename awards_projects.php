<?php
include("header.php");
?>

<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url('images/bannerimg.jpg');">
    <div class="content text-center">
        <h1 class="text-white">Awards & Projects</h1>
    </div>
</div>

<!-- Main Content Area -->
<div class="container">

    <?php

    $connection = mysqli_connect("localhost", "u731109599_kavyadb", "bUH:OXI9GZ]9", "u731109599_kavyadb");
    $db = mysqli_select_db($connection, '');

    $query = "SELECT * FROM `awards_projects`";
    $query_run = mysqli_query($connection, $query);


    while ($row = mysqli_fetch_array($query_run)) {
    ?>

        <div class="p-5 my-5 border_card">
            <h3><?php echo $row['title']; ?></h3>
            <p>
                <?php echo $row['description']; ?>

            </p>
        </div>

    <?php
    }
    mysqli_close($connection);
    ?>
</div>





<?php
include("footer.php");
?>