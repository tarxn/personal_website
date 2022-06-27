<?php
include("header.php");
?>

<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url('images/bannerimg.jpg');">
    <div class="content text-center">
        <h1 class="text-white">Awards & Projects</h1>
    </div>
</div>




<div class="container">
    <h3 style="color:blue">
        Awards

    </h3>
    <div class="container-fluid">
        <div class="p-5 border_card row d-flex">
            <ul>
                <h4>
                    Best innovation award- UNDP-2021.
                </h4>
                <h4>
                    Innovation in Food award- PETA-2020.
                </h4>
                <h4>
                    Best Women Scientist Award-SRBS-2020.
                </h4>


            </ul>



        </div>
    </div>
</div>

<!-- Main Content Area -->
<div class="container">
    <h3 style="color:blue">

        Projects

    </h3>

    <?php

    $connection = mysqli_connect("localhost", "u731109599_kavyadb", "bUH:OXI9GZ]9", "u731109599_kavyadb");
    $db = mysqli_select_db($connection, '');

    $query = "SELECT * FROM `awards_projects`";
    $query_run = mysqli_query($connection, $query);


    while ($row = mysqli_fetch_array($query_run)) {
    ?>

        <div class="p-5 my-5 border_card">
            <h3><?php echo $row['description']; ?></h3>
        </div>

    <?php
    }
    mysqli_close($connection);
    ?>
</div>





<?php
include("footer.php");
?>