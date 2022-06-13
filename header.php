<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal website</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        .banner-image {
            background-size: cover;
            max-height: 300px;
        }

        .bg-maroon {
            background-color: #8c1515 !important
        }

        #active_page {
            border-bottom: #ffee06 solid 2px;
        }

        .vl {
            border-left: #ffffff solid 1px;
            height: 20px;
        }

        .inline {
            display: inline-block;
        }
        
        .pers_img{
            max-height: 150px;
        }
        .ppl_img{
            height:300px;
            width:auto;
        }

        .border_card {
           
            width: 100%;
            height: auto;
            background-color: #edebeb;
        }
        .left-col{
            width:25%;
            float: left;
        }
        .center-col{
            width:75%;
            float:left;
        }

        footer {
            text-align: left;
            margin: auto;
            color: rgb(229, 229, 229);
            position: relative;
            padding-top: 30px;
            padding-bottom: 30px;
        }
    </style>
</head>

<body>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-2">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://scai.iitd.ac.in/iitd_logo.png" alt="logo" width="auto" height="45"
                    class="d-inline-block align-text-center"></a>
            <a class="navbar-brand align-text-center" href="#" style="color: white; font-size:25px;">Kavya Dashora </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="people.php">People</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="publication.php">Publication</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Research</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Awards & Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Gallery</a>
                    </li>
                    

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li> -->
                    
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>