<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Conference - Responsive HTML5 Template</title>

    <!-- favicon -->
    <link href="favicon.png" rel=icon>

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style_web.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
    <!-- Page Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
 <!-- header -->
    <header class="header">
        <!-- Navigation -->
        <nav class="navbar main-menu" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo_web.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden"><a href="#page-top"></a></li>
                        <li><a class="page-scroll" href="#section-intro">Acceuil</a></li>
                        <li><a class="page-scroll" href="#section-speaker">Galerie</a></li>
                        <li><a class="page-scroll" href="#section-ajenda">Agenda</a></li>
                       <!-- <li><a class="page-scroll" href="#section-pricing">Inscription</a></li> -->
                        <li><a class="page-scroll" href="#section-partner">Partenaires & Sponsors</a></li>
                        <li><a class="page-scroll" href="#section-venue">Le Lieu</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- .nav -->

    </header>

    @yield('content');


    <footer class="footer">
        <div class="copyright-section">
            <div class="container">
                <div class="col-md-12">
                    <div class="copytext text-center">&copy; Conference. All rights reserved | Design By: <a href="https://uicookies.com">uiCookies</a></div>
                </div>
            </div>
            <!-- .container -->
        </div>
        <!-- .copyright-section -->
    </footer>
    <!-- .footer -->

</div>
<!-- #main-wrapper -->


<!-- jquery -->
<script src="js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<!--<script src="js/one-page-nav.js"></script>-->
<script src="js/scripts.js"></script>
</body>
</html>