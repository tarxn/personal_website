<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal website</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        .banner-image {
            background-image: url('images/1836325.jpg');
            background-size: cover;
            max-height: 300px;
        }

        .bg-maroon {
            background-color: #8C1515 !important
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

        .border1 {
            border-radius: 1%;
            width: 99.999%;
    height: auto; 
        }
    </style>
</head>

<body>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://scai.iitd.ac.in/iitd_logo.png" alt="logo" width="auto" height="45"
                    class="d-inline-block align-text-center"></a>
            <a class="navbar-brand align-text-center" href="#" style="color: white; font-size:25px;"> IIT Delhi <div
                    class="vl inline"></div> Researcher </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" id="active_page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active " href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner Image  -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="content text-center">
            <h1 class="text-white">Welcome to my page</h1>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="container my-5 d-grid gap-5">
        <div class="p-5 border1" style="background-color: #edebeb;">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
                natus iusto fugit id saepe neque rerum magni laudantium accusantium
                dolorem numquam quasi.
            </p>
        </div>
        <div class="p-5 border">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
                natus iusto fugit id saepe neque rerum magni laudantium accusantium
                dolorem numquam quasi.
            </p>
        </div>
        <div class="p-5 border">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
                natus iusto fugit id saepe neque rerum magni laudantium accusantium
                dolorem numquam quasi.
            </p>
        </div>
        <div class="p-5 border">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
                natus iusto fugit id saepe neque rerum magni laudantium accusantium
                dolorem numquam quasi.
            </p>
        </div>
        <div class="p-5 border">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
                natus iusto fugit id saepe neque rerum magni laudantium accusantium
                dolorem numquam quasi. df
            </p>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-maroon', 'shadow');
            } else {
                nav.classList.remove('bg-maroon', 'shadow');
            }
        });
    </script>
</body>

</html>