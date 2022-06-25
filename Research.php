<?php
include("header.php");
?>

<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url('images/bannerimg.jpg');">
    <div class="content text-center">
        <h1 class="text-white">Researches</h1>
    </div>
</div>

<!-- Main Content Area -->
<div class="u-grey-5">

    <?php
    $connection = mysqli_connect("localhost", "u731109599_kavyadb", "bUH:OXI9GZ]9", "u731109599_kavyadb");
    $db = mysqli_select_db($connection, '');

    $query = "SELECT * FROM `research`";
    $query_run = mysqli_query($connection, $query);


    while ($row = mysqli_fetch_array($query_run)) {
    ?>
    <div class="u-body u-xl-mode  my-5 gap-5">
        <section class="u-clearfix  u-section-2" id="sec-17ca">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
                    <div class="u-layout" style="">
                        <div class="u-layout-row" style="">
                            <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-layout-cell-1" src="">
                                <div class="u-container-layout u-valign-middle u-container-layout-1">
                                    <h2 class="u-align-center u-text u-text-default u-text-1">
                                        <?php
                                        echo $row['title'];
                                        ?>
                                    </h2>
                                    <p class="u-align-center u-text u-text-2"><?php
                                                                                echo $row['description'];
                                                                                ?></p>
                                    <a href="<?php echo $row['link']; ?>" class="u-btn u-btn-round u-button-style u-radius-50 u-btn-1">Read more</a>
                                </div>
                            </div>
                            <div class="container u-align-center u-container-style u-image u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-image-1" >
                                <?php echo '<img class="d-inline-block" src="data:image;base64,' . base64_encode($row['image']) . '"  alt="Image"  height="auto" >'; ?></div>
                        </div>
                    </div>
                </div>






            </div>
</div>


</section>
</div>
<?php
    }
    mysqli_close($connection);
?>
</div>








<?php
include("footer.php");
?>