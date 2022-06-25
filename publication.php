<?php
    include("header.php");
?>

<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
    style="background-image: url('images/bannerimg.jpg');">
    <div class="content text-center">
        <h1 class="text-white">Publication</h1>
    </div>
</div>

<!-- Main Content Area -->

<div class="container-fluid my-5 d-grid gap-5">
    <!-- <div>
        <h3 style="color:blue">
        Journal Articles (SCI/Scopus/WoS Indexed)
        </h3>
    </div> -->
    <div class="p-5 border_card">
    <?php
        $connection = mysqli_connect("localhost", "u731109599_kavyadb","bUH:OXI9GZ]9", "u731109599_kavyadb");
        $db=mysqli_select_db($connection,'');

        $query="SELECT * FROM `publication` ORDER BY `sno` DESC";
        $query_run=mysqli_query($connection,$query);

        while($row=mysqli_fetch_array($query_run))
        {
    ?>
    <div class="my-0 p-2">
    <ul>
        <li><h4><?php echo $row['authors']; ?></h4>
        <p>
                <?php echo $row['abstract']; ?>
    </p>
        </li>
    </ul>
    </div>
    <?php
        }
        ?>
    </div>

    
</div>



<?php 
        include("footer.php");
    ?>