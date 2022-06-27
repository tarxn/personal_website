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
</div>

<div class="p-3 border_card ">
    <div class="container">
        <ul>
            <li>
                <p>
                    Best innovation award- UNDP-2021.
                </p>
            </li>
            <li>
                <p>
                    Innovation in Food award- PETA-2020.
                </p>
            </li>
            <li>
                <p>
                    Best Women Scientist Award-SRBS-2020.
                </p>
            </li>


        </ul>




    </div>
</div>

<!-- Main Content Area -->
<div class="container">
    <h3 style="color:blue">

        Projects

    </h3>
</div>
<div class=" p-3  border_card container">

    <?php

    $connection = mysqli_connect("localhost", "u731109599_kavyadb", "bUH:OXI9GZ]9", "u731109599_kavyadb");
    $db = mysqli_select_db($connection, '');

    $query = "SELECT * FROM `awards_projects`";
    $query_run = mysqli_query($connection, $query);


    while ($row = mysqli_fetch_array($query_run)) {
    ?>
        <div class="conatiner">
            <ul>
                <li>
                    <p><?php echo $row['description']; ?></p>
                </li>

            </ul>
        </div>
    <?php
    }
    ?>


</div>





<?php
include("footer.php");
?>