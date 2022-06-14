<?php
include("header.php");
?>

<!-- Banner Image  -->
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url('images/1836325.jpg');">
    <div class="content text-center">
        <h1 class="text-white">Contact us</h1>
    </div>
</div>

<!-- Main Content Area -->
<div class="container my-5 gap-5">

    <div class="form_card box_shadow half_col2 p-5">
    <div class="pybottom">
        <h5 style="color:#002a73;">If you are interested to work with us, please share your resume here. We will get back to you.</h5>
    </div>
        <form>
        <div class="form-group p-1 px-3">
                <label for="exampleFormControlInput1">Your Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="form-group p-1 px-3">
                <label for="exampleFormControlInput1">Your Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="form-group p-1 px-3">
                <label for="exampleFormControlSelect1">Subject</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="form-group p-1 px-3">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group p-1 px-3">
                <label for="exampleFormControlSelect1">Resume link</label>
                <input type="link" class="form-control" id="exampleFormControlInput1" >
            </div >
            <div  class="p-4 d-flex justify-content-center">
            <button type="button" class="btn bg-maroon px-5" style="color:white;">Submit</button></div>
        </form>



    </div>

    <div class="half_col1 p-3 form_card_r">
        
        <div>
            <img src="images/building.png" height="70px" width="auto"> <h2>Location:</h2>
            <h5>
            Agrinanobiotechnology Lab, Room number 280, Block 3, <br>IIT Delhi -110016

            </h5>
        </div>
        
    <br> <br>

        <div>
            <img src="images/email.png" height="60px" width="auto"><h2>Email:</h2>
            <h5>kdashora@rdat.iitd.ac.in
</h5>
        </div>
       
    </div>
    <div>
        <h5 style="color:white; padding:1rem;"> Enter Your details to contact us.</h5>
    </div>




</div>

<?php
include("footer.php");
?>