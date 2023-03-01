<?php
include("header.php");
?>

<!-- Banner Image  -->
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url('images/bannerimg.jpg'); font-family:'AXIS', Extra Bold;">
    <div class="content text-center">
        <h1 class="text-white">Home</h1>
    </div>
</div>

<!-- Main Content Area -->
    <div class="card my-5 gap-5 ">
        <div class="container mb-3" style="">
            <div class="row g-0">
                <div class="col-md-2">
                <img src="images/kavya_.JPG" class="img-fluid rounded-start" style=" width: 220px;
                height: auto; padding-top:2rem;" alt="...">
                </div>
                <div class="col-md-10">
                <div class="card-body">
                    <h2 class="card-title">Prof. Kavya Dashora</h2>
                    <p class="card-text">Prof Kavya Dashora is on an extraordinary and multidimensional journey, ranging from microscopic to nano-scopic world. She studies different aspects of nanosynthesis, their residue, nanotoxicity, regulations and approach to green and sustainable crop production.
                            Her work also encompasses the discovery of physicochemical properties and bioprocessing of lignolytic enzymes , impact of nanoparticles on plant metabolites and microbial enzymes.
                            Her key achievement is also highlight as development of first ever plant based egg in India. She works on different aspects of plant based meats to ensure sustainable nutrition to the growing population.
                            Her work essentially involves achieving SDGs in all her projects.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="p-5  d-flex">
        <div class="col-left container" style="padding-bottom:1rem !important;">
            <img class="pers_img" src="images/kavya_.JPG" class="d-inline-block">
        </div>
        <div class="col-right container">
            <h2 style="font-family: 'Lobster Two', cursive;">Prof. Kavya Dashora</h2>

            <p>

                Prof Kavya Dashora is on an extraordinary and multidimensional journey, ranging from microscopic to nano-scopic world. She studies different aspects of nanosynthesis, their residue, nanotoxicity, regulations and approach to green and sustainable crop production.
                Her work also encompasses the discovery of physicochemical properties and bioprocessing of lignolytic enzymes , impact of nanoparticles on plant metabolites and microbial enzymes.
                Her key achievement is also highlight as development of first ever plant based egg in India. She works on different aspects of plant based meats to ensure sustainable nutrition to the growing population.
                Her work essentially involves achieving SDGs in all her projects.
                <br>


            </p>
        </div>


    </div> -->


</div>
<hr>

<div class="container-fluid ">
    <h3>News and Events</h3>
    <div class="p-5 my-5 border_card" style="max-height:380px ;">
        <marquee behavior="scroll" direction="up" scrollamount="4" style="max-height:320px ; color:blue;">

        <ul>

            <?php

            $connection = mysqli_connect("localhost", "u731109599_kavyadb", "bUH:OXI9GZ]9", "u731109599_kavyadb");
            $db = mysqli_select_db($connection, '');
            $query = "SELECT * FROM `news`";
            $query_run = mysqli_query($connection, $query);


            while ($row = mysqli_fetch_array($query_run)) {
            ?>




                <li><p><?php echo $row['news']; ?> </p></li>

            <?php
            }
            ?>


</ul>
            <br>
            <br>
        </marquee>


    </div>
    <div class="p-5 my-5 border_card">

        <p> A <span class="first-word" style="font-family: 'DM Serif Display', Regular;"> Journey </span>
            from tiny hands on the globe to a giant leap across the planet……….

            <br>Even as young as an eight-year-old, Prof Kavya Dashora was very clear that she wanted to travel across the planet and explore the unexplored. Holding her tiny hands and walking with her little feet with her father who is her first guiding light, she got a model of globe and then firmly set her eyes on the target with no and never looking back. Thoroughly backed by her family of academicians, she had always raised the bar for herself to achieve more and maximum.

            <br><br> Her extensive travel to different countries in developed and developing world with her professional mentor made her thought process evolved for connecting the last mile to high end lab research. Her experience and learnings about the impact of accessibility, sustainability and sensitivity of research is clearly reflected in all her work.

            <br><br> As a young achiever, Prof Dashora boasts several international awards like Above and Beyond Award, Innovation in Food Award, Best Woman Scientist, UNDP Award for Innovate4SDG, etc and several reputed research publications, training compendium, research documents, regulatory reports, etc . With an unfeigned modesty, she sums up her achievements as a fine balancing act between stimulation and pressure.
            <br><br>Extremely organized in her work and time management, Prof Dashora knows that successful research depends on rigorous methodology: “Often researchers find writing methodology and protocols before they hit the workstation as a waste of time, but it’s very important to know where you’re going”. Prof Dashora is very particular about timelines and time bound targets and encourage students to stick to timelines so that research outputs are used as relevant in given time frame.
            <br><br>Her motto and message are ‘If you waste time, time wastes you’.
        </p>
    </div>



    <div class="p-5 my-5 border_card">
        <h3>Education</h3>
        <p style="font-size: 20px;">
            Prof Dashora completed her PhD from prestigious Central Arid Zone Research Institute (CAZRI-ICAR) on developing low-cost biocontrol solutions for pearl millet smut caused by Tolyposporium penicillarie
        </p>
    </div>
    <div class="p-5 my-5 border_card">
        <h3>Skills</h3>
        <p>
            <span style="font-size:22px; font-weight: 500;">Nanotechnology:</span>
            Nanosynthesis, Nanotoxicity, Regulations<br>

            <span style="font-size:22px; font-weight: 500;">Bioprocess engineering:</span>
            Microbial Enzymes, Garbage Enzymes<br>

            <span style="font-size:22px; font-weight: 500;">Food:</span>
            Plant based proteins, Mock meats<br>

            <span style="font-size:22px; font-weight: 500;">Value chain management:</span>
            Blockchain technology, etraceability

        </p>
    </div>

    <div class="p-5 my-5 border_card">
        <h3>FROM BIODIVERSITY HOTSPOTS TO NANOBIOCHEMICALS</h3>
        <p>
            Her interest in underutilized and endangered medicinal plants and their biotic stress helped her to contribute for National Gene Bank of India at National Bureau of Plant Genetic Resources. There she did extensive survey in Sahayadri Mountains of Western Ghats (One of the biodiversity hotspots of India) to study about the germination potential of wild varieties of medicinal, endangered and rare plants along with the host parasite interaction, pest predator ratio and their threshold limits for natural pest management.
        </p>
    </div>

    <div class="p-5 my-5 border_card">
        <h3>FROM BIODYNAMIC IPM TO NANOTECHNOLOGY FOR SAFE AGRICULTURE</h3>
        <p>
            Prof Dashora had a dual interest from biodynamic IPM implemented in large plantation crops ensuring the natural ecological balance of pest-predator, natural enemy with green ways for sustainable agriculture and the wonderful, unexplored world of microbes under the microscope. With these interests, she developed translational mode of research to translate the best lab practices into best land practices. Driven by a desire to understand how things work at micro and subsequently nano level in plants-soil-microbe interaction, she further went on to pursue research in nanotechnology and the impact of nanoparticles on soil and microbial enzymes, nanotoxicity, green nanosynthesis, and regulation of nanoparticles in agriculture.
        </p>
    </div>

    <div class="p-5 my-5 border_card">
        <h3>FROM VISITING UNDERNOURISHED COUNTRIES TO DEVELOPING PLANT BASED PROTEINS FOR SUSTAINABLE NUTRITION</h3>
        <p>
            Prof Dashora did food security and plant protection work in mostly developing and underdeveloped countries where availability and accessibility of food was a constant concern in all age groups. She explored the local, low cost options of proteins having similarities with animal proteins and is credited with the development of first ever plant based egg. Her further research is ongoing on developing other mock meat products from plants. For this achievement, she was conferred upon both National and International awards.
        </p>
    </div>


</div>

<?php
include("footer.php");
?>