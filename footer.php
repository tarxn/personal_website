<footer style="background-color: #008080; height: auto; color:#fff;">
    <!-- #008080-teal  -->
    <section class="container-fluid" style="height:auto;">
        <!-- Left -->
        <div class="d-flex container mx-auto">
            <div class="col-lg-2 px-2">
                <a href="https://scholar.google.com/citations?hl=en&user=WVfT3dsAAAAJ" target=”_blank”>
                    Google Scholar
                </a>
            </div>
            <div class="col-lg-2 px-2">
                <a href="https://www.researchgate.net/profile/Kavya-Dashora" target=”_blank”>
                    ResearchGate
                </a>
            </div>
            <div class="col-lg-2 px-2">
                <a href="https://www.linkedin.com/in/kavya-dashora-2a719448/" target=”_blank”>
                    LinkedIn
                </a>
            </div>
            <div class="col-lg-2 px-2">
                <a href="https://www.youtube.com/watch?v=EUsj7l0UA1E" target=”_blank”>
                    YouTube
                </a>
            </div>
        </div>

        <!-- Right -->
    </section>
    <hr>
    <div class="container ">
        <div class="row container">
            <!--Grid column-->
            <div class="col-lg-2 my-4 col-md-6 mb-4 mb-md-0">

                <img src="https://scai.iitd.ac.in/iitd_logo.png" alt="logo" width="auto" height="145" class="d-inline-block align-text-center">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-10 col-md-6 mb-4 mb-md-0 p-2">
                <h3>Centre for Rural Development & Technology, IIT Delhi</h3>
                <p>Address: Agri-Nanobiotechnology Lab, Room number 280, Block III, IIT Delhi-110016 <br> Email: kdashora@rdat.iitd.ac.in <br>
                    Phone: 2659-1133 |
                    Mobile: 9968354317
                </p>

            </div>



            <!-- <footer> -->



        </div>

</footer>
<script>
    $("[data-trigger]").on("click", function(){
        var trigger_id =  $(this).attr('data-trigger');
        $(trigger_id).toggleClass("show");
        $('body').toggleClass("offcanvas-active");
    });

    // close button 
    $(".btn-close").click(function(e){
        $(".navbar-collapse").removeClass("show");
        $("body").removeClass("offcanvas-active");
    }); 

//     function myFunction() {
//     var x = document.getElementById("myLinks");
//     if (x.style.display === "block") {
//       x.style.display = "none";
//     } else {
//       x.style.display = "block";
//     }
//   }    
</script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/js.min.js"></script>
</body>

</html>