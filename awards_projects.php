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
<div class="container">
    <div class="p-5 border_card ">
        <ul>
            <li>
                <h5>
                    Best innovation award- UNDP-2021.
                </h5>
            </li>
            <li>
                <h5>
                    Innovation in Food award- PETA-2020.
                </h5>
            </li>
            <li>
                <h5>
                    Best Women Scientist Award-SRBS-2020.
                </h5>
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
<div class="p-5 my-5 border_card">
    <?php

    $connection = mysqli_connect("localhost", "u731109599_kavyadb", "bUH:OXI9GZ]9", "u731109599_kavyadb");
    $db = mysqli_select_db($connection, '');

    $query = "SELECT * FROM `awards_projects`";
    $query_run = mysqli_query($connection, $query);


    while ($row = mysqli_fetch_array($query_run)) {
    ?>

        <ul>
           <li> <p><?php echo $row['description']; ?></p></li>

        </ul>
    <?php
    }
    ?>

</div>





<?php
include("footer.php");
?>