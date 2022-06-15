<?php
include("header.php");
?>

<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url('images/1836325.jpg');">
    <div class="content text-center">
        <h1 class="text-white">Awards & Projects</h1>
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

        $query = "SELECT * FROM `awards_projects`";
        $query_run = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_array($query_run)) {
        ?>






            <div class="p-5 border_card">
                <div>
                    <h6>Project Title:</h6>
                    <?php echo $row['title']; ?>
                </div>
                </br>
                <div>
                    <h6>Role:</h6>
                    <?php echo $row['role']; ?>
                </div>
                </br>
                <div>
                    <h6>Sponsored by:</h6>
                    <?php echo $row['sponser']; ?>
                </div>
                </br>
                <div>
                    <h6>Host:</h6>
                    <?php echo $row['host']; ?>
                </div>
                </br>
                <div>
                    <h6>Grant Period:</h6>
                    <?php echo $row['grant_period']; ?>
                </div>
                </br>
                <div>
                    <h6>Grant Amount:</h6>
                    <?php echo $row['grant_amount']; ?>
                </div>
            </div>


        <?php
        }
        ?>


    </div>



    <div>
        <div class="container-fluid">
            <h3 style="color:blue">

                Sponsored research projects as Co-Investigator

            </h3>
        </div>
        <div class="p-5 border_card">
            <div>
                <h6>Project Title:</h6>
                "title"
            </div>
            </br>
            <div>
                <h6>Role:</h6>
                "Role"
            </div>
            </br>
            <div>
                <h6>Sponsored by:</h6>
                "Sponsored by"
            </div>
            </br>
            <div>
                <h6>Host:</h6>
                "Host"
            </div>
            </br>
            <div>
                <h6>Grant Period:</h6>
                "Grant Period"
            </div>
            </br>
            <div>
                <h6>Grant Amount:</h6>
                "Grant Amount"
            </div>
        </div>
    </div>

</div>



<?php
include("footer.php");
?>