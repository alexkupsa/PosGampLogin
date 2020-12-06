<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Alex Kupsa" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Starter Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="regi.php">regi</a>
                </li>
                <li class="nav-item">
                    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalSubscriptionForm">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <section>

        <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Subscribe</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="index.php">
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="form3" class="form-control validate" name="loginname">
                                <label data-error="wrong" data-success="right" for="form3">Your name</label>
                            </div>

                            <div class="md-form mb-4">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <input type="password" id="defaultForm-pass" class="form-control validate" name="loginpassword">
                                <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                            </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-section-heading text-center text-uppercase text-secondary">Aufgabensammlung 2</h1>
                    <p>
                        <?php
                        //var_dump($_SERVER);

                        //includieren der Dateifunctions.php
                        require_once('php/functions.php');

                        echo DBConection();

                        if (isset($_POST['loginname']) && isset($_POST['loginpassword'])) {
                            $check = login($_POST['loginname'], $_POST['loginpassword']);
                            echo $check;
                        }

                        aPoem();
                        echo '</br>';
                        echo ePoemRight('ich liebe dich');
                        echo '</br>';
                        csscall();
                        echo '</br>';
                        gamp();
                        echo '</br>';

                        //Aufruf der Funktion
                        printServerDetails();

                        echo '</br>';
                        getBrowser();

                        echo '</br>';
                        echo email('hi');
                        echo '</br>';
                        echo email('alex.kupsa@gmail.com');
                        echo '</br>';
                        echo email('example@example.de');
                        echo '</br>';
                        echo checkname1('alex kupsa');
                        echo '</br>';
                        $eingabe = 'alex kupsa';
                        echo chekcname2($eingabe);
                        echo '</br>';
                        datetime(7, 9, 1997);
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <img src="//ipv6.he.net/certification/create_badge.php?pass_name=kupsa&amp;badge=1" style="border: 0; width: 128px; height: 128px" alt="IPv6 Certification Badge for kupsa"></img>

    <main role="main" class="container">

        <div class="starter-template">
            <h1>Bootstrap starter template</h1>
            <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
        </div>

    </main><!-- /.container -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery.slim.min.js"><\/script>')
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>

</html>