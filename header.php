<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal website</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/css.min.css" />
</head>
<style>
    .scrolling-active {
        background-color: #008080;
        box-shadow: 0 3px 1rem rgba(0, 0, 0, .1);
    }

    .scrolling-off .nav a {
        color: #faf5f5;
        text-shadow: 1px 1px 10px black;
    }

    p {
        font-size: 20px;
    }

    .gallery_img {
        max-width: 40px;
    }

    .col-left-img {
        width: 48%;
        float: left;
        
        margin-left: 5px;
        display: block;
    }

    .col-right-img {
        width: 49%;
        float: right;
        margin-right: 5px;
        display: block;
    }
</style>

<body>
    <!-- Navbar  -->

    <nav class="fixed-top navbar-expand-lg navbar scrolling-off p-md-2">
        <div class="container dmmy nav">
            <h1 class="navbar-brand align-text-center text-white" href="#" style=" font-size: 30px; ">Prof. Kavya Dashora </h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="people.php">People</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="publication.php">Publication</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Research.php">Research</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="awards_projects.php">Awards & Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
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
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>