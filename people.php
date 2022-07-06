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
    <h3 style="color:blue">

        People
    </h3>
    <?php
    $connection = mysqli_connect("localhost", "u731109599_kavyadb", "bUH:OXI9GZ]9", "u731109599_kavyadb");
    $db = mysqli_select_db($connection, '');

    $query = "SELECT * FROM `people`";
    $query_run = mysqli_query($connection, $query);


    while ($row = mysqli_fetch_array($query_run)) {
    ?>
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>



        <div class="p-5 border_card row d-flex">
            <div class="col-4 p-0 order-1" style="z-index:1;">
                <div>
                    <?php echo '<img class="d-inline-block" src="data:image;base64,' . base64_encode($row['image']) . '"  alt="Image" width="220px" height="auto" >'; ?>

                </div>
            </div>
            <div class="col-8 py-3 order-2" style="z-index:1; position:relative; ">

                <h4><?php echo $row['name']; ?></h4>
                <p>
                    <?php echo $row['edu']; ?><br>
                    Area of interest:<?php echo $row['Area of Interest']; ?><br>
                    About me:<?php echo $row['About me']; ?><br>
                    <a href="<?php echo $row['Google scholar']; ?>" class="link-primary">Google Scholar</a> |
                    <a href="<?php echo $row['Research Gate']; ?>" class="link-primary"> Research Gate </a><br>
                </p>
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

        <div class="p-5 border_card row d-flex">
            <div class="col-4 p-0 order-1" style="z-index:1;">
                <div>
                    <?php echo '<img class="d-inline-block" src="data:image;base64,' . base64_encode($row['Image']) . '"  alt="Image" width="220px" height="auto" >'; ?>

                </div>
            </div>
            <div class="col-8 py-3 order-2" style="z-index:1; position:relative; ">

                <h4><?php echo $row['Name']; ?></h4>


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

        <div class="p-5 border_card row d-flex">
            <div class="col-4 p-0 order-1" style="z-index:1;">
                <div>
                    <?php echo '<img class="d-inline-block" src="data:image;base64,' . base64_encode($row['image']) . '"  alt="Image" width="220px" height="auto" >'; ?>

                </div>
            </div>
            <div class="col-8 py-3 order-2" style="z-index:1; position:relative; ">

                <h4><?php echo $row['name']; ?></h4>
                <p>
                    <?php echo $row['edu']; ?><br>
                    Area of interest:<?php echo $row['area of interest']; ?><br>
                    About me123:<?php echo $row['about']; ?><br>
                    <a href="<?php echo $row['google scholar']; ?>" class="link-primary">Google Scholar</a> |
                    <a href="<?php echo $row['researchgate']; ?>" class="link-primary"> Research Gate </a><br>
                </p>

            </div>
        </div>
    <?php
    }
    ?>


</div>


<marquee behavior="scroll" direction="up" scrollamount="3">
    <h5>IITD AA President Dr. Kalpen Shukla facilitated Prof. Vijay on eve on AGM and Award event on 30.4.2022 </h5><br>
    <h5>Prof. Vijay has been appointed as Member of Science and Engineering Research Board (SERB), DST, India, 16th March 2022 </h5><br>
    <h5>Prof. Vijay has been awarded India Green Energy Awards, 2020 by Indian Federation of Green Energy (IFGE) </h5>
    <br>
    <<h5>Prof. Vijay has received Pt Deen Dayal Upadhyaya Recognition for Re-Engineering INDIA 2020 </h5><br>
        <br>
        <br>
        <br>
        <br>
</marquee>


<?php
include("footer.php");
?>