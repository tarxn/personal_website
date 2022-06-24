<?php
include("header.php");
?>

<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url('images/1836325.jpg');">
    <div class="content text-center">
        <h1 class="text-white">People</h1>
    </div>
</div>

<!-- Main Content Area -->
<div class="container my-5 d-grid gap-5">
        <?php

            $connection=mysqli_connect("localhost","root","");
            $db=mysqli_select_db($connection,'personal_website');

            $query="SELECT * FROM `people`";
            $query_run=mysqli_query($connection,$query);

            while($row=mysqli_fetch_array($query_run))
            {
        ?>

    <div class="p-5 border_card">
        <div class="left-col ppl_img">
        <?php echo '<img class="ppl_img d-inline-block align-text-center" src="data:image;base64,' . base64_encode($row['image']) . '"  alt="Image" width="200px" height="auto" >'; ?>
            <!-- <img class="ppl_img" src="images/stock_woman.jpg" class="d-inline-block align-text-center"> -->
        </div>
        <div class="center-col">
            <p>
            <h4><?php echo $row['name']; ?></h4>
            <?php echo $row['edu1']; ?><br>
            <?php echo $row['edu2']; ?><br>
            <?php echo $row['desc1']; ?><br>
            <?php echo $row['contact']; ?><br>
            <?php echo $row['desc2']; ?><br>
            </p>
        </div>
    </div>
    <?php
        }
        ?>
    <div class="p-5 border_card">
        <div class="left-col ppl_img">
            <img class="ppl_img" src="images/stock_woman.jpg" class="d-inline-block align-text-center">
        </div>
        <div class="center-col">
            <p>
            <h4>Student name</h4>
            <h6>Masters:</h6> B.Sc. (Zoology), 2016, Fakir Mohan University, Odisha<br>
            <h5>Area of Interest:</h5> M.Sc. (Zoology), 2018, North Orissa University, Odisha<br>
            <h5>Masters:</h5> Project: Role of endothelial plasticity in the tumour microenvironment (UGC-JRF)<br>
            Email: bt19d025@smail.iitm.ac.in; LinkedIn<br>
            Hobbies: Gardening, Reading novels, Singing and Dancing<br>
            </p>
        </div>
    </div>
    <div class="p-5 border_card">
        <div class="left-col ppl_img">
            <img class="ppl_img" src="images/stock_woman.jpg" class="d-inline-block align-text-center">
        </div>
        <div class="center-col">
            <p>
            <h4>Student name</h4>
            B.Sc. (Zoology), 2016, Fakir Mohan University, Odisha<br>
            M.Sc. (Zoology), 2018, North Orissa University, Odisha<br>
            Project: Role of endothelial plasticity in the tumour microenvironment (UGC-JRF)<br>
            Email: bt19d025@smail.iitm.ac.in; LinkedIn<br>
            Hobbies: Gardening, Reading novels, Singing and Dancing<br>
            </p>
        </div>
    </div>
    <div class="p-5 border_card">
        <div class="left-col ppl_img">
            <img class="ppl_img" src="images/stock_woman.jpg" class="d-inline-block align-text-center">
        </div>
        <div class="center-col">
            <p>
            <h4>Student name</h4>
            B.Sc. (Zoology), 2016, Fakir Mohan University, Odisha<br>
            M.Sc. (Zoology), 2018, North Orissa University, Odisha<br>
            Project: Role of endothelial plasticity in the tumour microenvironment (UGC-JRF)<br>
            Email: bt19d025@smail.iitm.ac.in; LinkedIn<br>
            Hobbies: Gardening, Reading novels, Singing and Dancing<br>
            </p>
        </div>
    </div>
</div>





<?php
include("footer.php");
?>