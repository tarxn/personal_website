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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    /* offcanvas-header{ display:none; } */
    /* @media only screen and (max-width:1000px) {
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
    } */
    
    /* .topnav {
    overflow: hidden;
    background-color: #333;
    position: relative;
    }

    .topnav #myLinks {
    display: none;
    }

    .topnav a {
    color: white;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    display: block;
    }

    .topnav a.icon {
    background: black;
    display: block;
    position: absolute;
    right: 0;
    top: 0;
    }

    .topnav a:hover {
    background-color: #ddd;
    color: black;
    }

    .active {
    background-color: #04AA6D;
    color: white;
    } */
    .navbar-toggler {
        padding: .15rem .50rem;
        font-size: 2rem;
        line-height: 1;
        background-color: white;
        border: 1px black;
        border-radius: .05rem;
        transition: box-shadow .15s ease-in-out
    }
    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 0.5)' stroke-width='4' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        display: inline-block;
        width: 1rem;
        height: 1rem;
        vertical-align: middle;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100%

    }
    
    div.gallery {
    border: 1px solid #ccc;
    }

    div.gallery:hover {
    border: 1px solid #777;
    }

    div.gallery img {
    width: 100%;
    height: auto;
    }

    div.desc {
    padding: 15px;
    text-align: center;
    }

    * {
    box-sizing: border-box;
    }

    .responsive {
    padding: 0 6px;
    float: left;
    width: 49.99999%;
    }

    @media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
    }

    @media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
    }

    .clearfix:after {
    content: "";
    display: table;
    clear: both;
    }
</style>

<body class="offcanvas-active">
    <!-- Navbar  -->

    <nav class="fixed-top navbar-expand-lg navbar scrolling-off p-md-2">
            <div class="dmmy container">
                <h1 class="navbar-brand align-text-center text-white" href="#" style=" font-size: 30px; font-family: 'Lobster Two', cursive;">Prof. Kavya Dashora </h1>
                <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <div class="container-fluid" id="myLinks" style="background-color: #008080; height: auto; color:#fff;">
                    <a href="#news">News</a>
                    <a href="#contact">Contact</a>
                    <a href="#about">About</a>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a> -->
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