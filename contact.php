<?php
include("header.php");
?>

<!-- Banner Image  -->
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url('images/bannerimg.jpg');">
    <div class="content text-center">
        <h1 class="text-white">Contact us</h1>
    </div>
</div>

<!-- Main Content Area -->
<div class="container-fluid border_card my-5" style="text-align: center;">
    <div class="container py-5 p-3">

        <div>
            <div style="color:#008080; ">
                <img src="images/building.png" height="60px" width="auto">
                <h2>Office:</h2>
            </div>
            <div>
                <h3 style="font-family: 'Aileron', Regular;">Dr. Kavya Dashora</h3>
                <h5 style="font-family: 'Aileron', Regular;">
                    Associate Professor<br>
                    Room no 276, Block III,<br>
                    Centre for Rural Development and Technology<br>
                    Indian Institute of Technology Delhi,<br>
                    Hauz khas, New Delhi-110016<br>

                </h5>
            </div>
        </div>

        <br> <br>

        <div>
            <div style="color:#008080;">
                <img src="images/email.png" height="50px" width="auto">
                <h2>Contact:</h2>
            </div>
            <h5 style="font-family: 'Aileron', Regular;">Email: kdashora@rdat.iitd.ac.in<br>
                Phone: 2659-1133<br>
                Mobile: 9968354317
            </h5>
        </div>

    </div>

</div>



<div class="container my-5" style="display: flex;
  justify-content: center;
  align-items: center;">

    <div class="form_card box_shadow p-5">
        <div class="pybottom">
            <h5 style="color:#002a73;">If you are interested to work with us, please share your resume here. We will get back to you.</h5>
        </div>
        <form id="myForm" action="https://docs.google.com/forms/d/e/1FAIpQLSdHVIJOWUQdD4jLHJ4GI0daPZtWaxQVH-0UZ8HJviDGxgHk_Q/formResponse" onsubmit="this.submit(); this.reset(); return false;">
            <div class="form-group p-1 px-3">
                <label for="exampleFormControlInput1">Your Name</label>
                <input type="text" name="entry.704798293" required class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group p-1 px-3">
                <label for="exampleFormControlInput1">Your Email</label>
                <input type="email" name="entry.510677314" required class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group p-1 px-3">
                <label for="exampleFormControlSelect1">Subject</label>
                <input type="text" name="entry.1398535834" required class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group p-1 px-3">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" name="entry.519175831" required id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>
            <div class="form-group p-1 px-3">
                <label for="exampleFormControlSelect1">Resume link</label>
                <input type="link" name="entry.425675296" required class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="p-4 d-flex justify-content-center">
                <button type="submit" class="btn px-5" onclick="this.form.target='_blank';return true;" style="background-color:#008080; color:white;">Submit</button>
            </div>
        </form>

    </div>








</div>

<?php
include("footer.php");
?>