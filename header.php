<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"/>
    <title>Kavya Dashora</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/nicepage.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/css.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Ibarra+Real+Nova&family=Lobster+Two:wght@700&family=Pacifico&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<style>
    .card{
    background-color: #f7f7f7;
}
    .scrolling-active {
        background-color: #008080;
        box-shadow: 0 3px 1rem rgba(0, 0, 0, .1);
    }

    .scrolling-off .nav a,.scrolling-off .nav {
        color: #faf5f5;
        text-shadow: 1px 1px 10px black;
    }

    p {
        font-size: 20px;
        text-align: justify;sd
    }
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {

        font-family: 'DM Serif Display',  Regular;
    }
    .col-left {
    width: 20%;
    flex: left;

}

.col-right {
    width: 80%;
    flex: right;
}
.pers_img {
    width: 220px;
    height: auto;

}

    .gallery_img {
        max-width: 40px;
    }

    .col-left-img {
        width: 50%;
        
        max-height: 730px;
        flex: left;
        margin-left: 5px;
        display: block;
    }
    .col-left-img img{
        max-height: 700px;
        max-width: 665px;
        padding-bottom: 5px;
    }

    .col-right-img img{
        max-height: 700px;
        max-width: 680px;
        padding-bottom: 5px;
    }

    .col-right-img {
        width: 50%;
        max-width: 730px;
        max-height: 730px;
        flex: right;
        margin-right: 5px;
        display: block;
    }

    .first-word {
        font-size: 35px;
        line-height: 70px;
    }

    .form_card {
        max-width: 650px;
        height: auto;
        background-color: #edebeb;
    }
    .u-image img{
        width: 500px;
        height:300px;
    }
    .custom-toggler .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,102,203, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }
    offcanvas-header{ display:none; }
    @media only screen and (max-width:1000px) {
        .scrolling-active .nav {
            height: 4rem;
        }
        .offcanvas-header{ display:block; }
        .navbar-collapse {
            position: fixed;
            top:0; 
            bottom: 0;
            left: 100%;
            width: 100%;
            padding-right: 1rem;
            padding-left: 1rem;
            overflow-y: auto;
            visibility: hidden;
            background-color: black;
            transition: visibility .2s ease-in-out, -webkit-transform .2s ease-in-out;
        }
        .navbar-collapse.show {
            visibility: visible;
            transform: translateX(-100%);
        }
        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,102,203, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        /* .custom-toggler.navbar-toggler {
            border-color: rgb(255,102,203);
        } */
        
    }
</style>

<body class="offcanvas-active">
    <!-- Navbar  -->

    <nav class="fixed-top navbar-expand-lg navbar scrolling-off p-md-2">
        <div class="container dmmy nav">
            <h1 class="navbar-brand align-text-center text-white" href="#" style=" font-size: 30px; font-family: 'Lobster Two', cursive;">Prof. Kavya Dashora </h1>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon my-toggler"></span>
    </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav" style="color: blue;">
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