<!DOCTYPE html>
<html>
    
<!-- Mirrored from www.pixel-industry.com/html/trucking/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jun 2021 08:55:59 GMT -->
<head>
        <title>Trucking - Transportation and Logistics Website Template</title>
        <meta name="description" content="Trucking is transportation and Logistics website template">
        <meta name="author" content="pixel-industry">
        <meta name="keywords" content="transportation, logistics, transportation template, logistics template, cargo, business">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="shortcut icon" href="fav1.png">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.css"/><!-- bootstrap grid -->
        <link rel="stylesheet" href="masterslider/style/masterslider.css" /><!-- Master slider css -->
        <link rel="stylesheet" href="masterslider/skins/default/style.css" /><!-- Master slider default skin -->
        <link rel="stylesheet" href="css/animate.css"/><!-- animations -->
        <link rel='stylesheet' href='owl-carousel/owl.carousel.css'/><!-- Client carousel -->
        <link rel="stylesheet" href="css/style.css"/><!-- template styles -->
        <link rel="stylesheet" href="css/color-default.css"/><!-- template main color -->
        <link rel="stylesheet" href="css/retina.css"/><!-- retina ready styles -->
        <link rel="stylesheet" href="css/responsive.css"/><!-- responsive styles -->

        <!-- Google Web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600' rel='stylesheet' type='text/css'>

        <!-- Font icons -->
        <link rel="stylesheet" href="icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css"/><!-- Fontawesome icons css -->
        <script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
        
        <link rel="stylesheet" href="style-switcher/styleSwitcher.css"/><!-- styleswitcher -->
            <script type="text/javascript">
        $(function(){
    
    $('#pointspossible').on('input', function() {
      calculate();
    });
    $('#pointsgiven').on('input', function() {
     calculate();
    });
    function calculate(){
        var pPos = parseInt($('#pointspossible').val()); 
        var pEarned = parseInt($('#pointsgiven').val());
        var perc="";
        if(isNaN(pPos) || isNaN(pEarned)){
            perc=" ";
           }else{
           perc = ((pEarned * pPos) / 100).toFixed(2);
           }
        
        $('#pointsperc').val(perc);
    }

});


    </script>
    <style type="text/css">
        .blink {
  animation: blink-animation 1s steps(5, start) infinite;
  -webkit-animation: blink-animation 1s steps(5, start) infinite;
}
@keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
@-webkit-keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
    </style>
    </head>
    
    <body>
  

        <div class="header-wrapper header-transparent">
            <!-- .header.header-style01 start -->
            <header id="header"  class="header-style01">
                <!-- .container start -->
                <div class="container">
                    <!-- .main-nav start -->
                    <div class="main-nav">
                        <!-- .row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default nav-left" role="navigation">

                                    <!-- .navbar-header start -->
                                    <div class="navbar-header"background-color: #000>
                                        <div class="logo">
                                            <a href="index.html">
                                                <img src="logo1.png" height="50" width="120" alt="Trucking Transportation and Logistics HTML Template"/>
                                            </a>
                                        </div><!-- .logo end -->
                                    </div><!-- .navbar-header start -->

                                    <!-- MAIN NAVIGATION -->
                                    <div class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav">
                                         <li><a href="index.php">Home</a></li>
                                          <li><a href="about.php">About Us</a></li>

                                        <li><a href="services.php">Servicess</a></li>

                                        
                                             <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Insurance</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="insurance.php">Insurance Policy</a></li>
                                                    <li><a href="insure-package.php">Insure Package</a></li>
                                                </ul>
                                                
                                              <li><a href="track-package.php">Track Package</a></li>  
                                             <li><a href="testimonials.php">Testimonials</a></li>
                                            <li><a href="backend/index.php">Login</a></li>

                                         <li><a href="contact.php">Contact Us</a></li>
                                        </ul><!-- .nav.navbar-nav end -->

                                        <!-- RESPONSIVE MENU -->
                                        <div id="dl-menu" class="dl-menuwrapper">
                                            <button class="dl-trigger">Open Menu</button>

                                            <ul class="dl-menu">
                                                <li>
                                                    <a href="index.php">Home</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="index.html">Home default</a></li>
                                                        <li><a href="index02.html">Trucking services overview</a></li>
                                                        <li><a href="index03.html">Trucking video slider</a></li>
                                                        <li><a href="index04.html">Trucking home simple</a></li>
                                                        <li><a href="index05.html">Trucking services slider</a></li>
                                                        <li><a href="index06.html">Trucking parallax slider</a></li>
                                                        <li><a href="index07.html">Trucking Vehicle Fleet</a></li>
                                                        <li><a href="index08.html">Trucking corporate</a></li>
                                                        <li><a href="index09.html">Trucking simple slider</a></li>
                                                        <li><a href="index10.html">Fullscreen minimal</a></li>
                                                    </ul><!-- dl-submenu end -->
                                                </li>

                                                <li>
                                                    <a href="#">About</a>
                                                    <ul class="dl-submenu">
                                                        <li>
                                                            <a href="#">Header types</a>
                                                            <ul class="dl-submenu">
                                                                <li><a href="index.html">Header default</a></li>
                                                                <li><a href="header-default-top-bar.html">Header default top bar</a></li>
                                                                <li><a href="index08.html">Header simple light bar</a></li>
                                                                <li><a href="header-simple-dark-bar.html">Header simple dark bar</a></li>
                                                                <li><a href="header-simple-dark.html">Header simple dark</a></li>
                                                                <li><a href="header-menu-bottom.html">Header menu bottom light</a></li>
                                                                <li><a href="header-menu-bottom-dark.html">Header menu bottom dark</a></li>
                                                            </ul><!-- .dl-submenu end -->
                                                        </li>
                                                        <li><a href="about01.html">About simple</a></li>
                                                        <li><a href="about02.html">About compact</a></li>
                                                        <li><a href="about03.html">About with sidebar</a></li>
                                                        <li><a href="simple-page-title.html">Simple page title</a></li>
                                                        <li><a href="company-history.html">Company history</a></li>
                                                        <li><a href="events.html">Company Events</a></li>
                                                        <li><a href="clients.html">Company Clients</a></li>
                                                        <li><a href="careers.html">Careers</a></li>
                                                        <li><a href="driver-application.html">Online driver application</a></li>
                                                    </ul><!-- dl-submenu end -->
                                                </li>

                                                <li>
                                                    <a href="#">Services</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="services01.html">Services overview</a></li>
                                                        <li>
                                                            <a href="#">Logistics</a>
                                                            <ul class="dl-submenu">
                                                                <li><a href="services02.html">Logistics</a></li>
                                                                <li><a href="overland-transportation.html">Overland transportation</a></li>
                                                                <li><a href="air-freight.html">Air freight</a></li>
                                                                <li><a href="ocean-freight.html">Ocean freight</a></li>
                                                                <li><a href="large-projects.html">Large projects</a></li>
                                                                <li><a href="rail-transportation.html">Rail international shipping</a></li>
                                                                <li><a href="contract-logistics.html">Contract logistics</a></li>
                                                            </ul><!-- .dl-submenu end -->
                                                        </li>
                                                        <li><a href="warehousing.html">Warehousing</a></li>
                                                        <li><a href="supply-chain-management.html">Supply chain management</a></li>
                                                        <li><a href="packaging-options.html">Packaging options</a></li>
                                                        <li><a href="consulting-services.html">Consulting services</a></li>
                                                    </ul><!-- dl-submenu end -->
                                                </li>

                                                <li>
                                                    <a href="#">News</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="news-list.html">News list</a></li>
                                                        <li><a href="news-masonry.html">News masonry</a></li>
                                                        <li><a href="news-standard.html">News standard</a></li>
                                                        <li><a href="news-single.html">News single</a></li>
                                                    </ul><!-- .dl-submenu end -->
                                                </li>

                                                <li>
                                                    <a href="#">Gallery</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="gallery01.html">Vehicle gallery full</a></li>
                                                        <li><a href="gallery02.html">Vehicle gallery grid</a></li>
                                                    </ul><!-- .dl-submenu end -->
                                                </li>

                                                <li><a href="locations.html">Locations</a></li>
                                                
                                                <li>
                                                    <a href="#">Contact</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="contact-simple.html">Contact simple</a></li>
                                                        <li><a href="contact-locations.html">Contact locations</a></li>
                                                    </ul><!-- .dl-submenu end -->
                                                </li>
                                            </ul><!-- .dl-menu end -->
                                        </div><!-- #dl-menu end -->

                                        <!-- #search start -->
                                        <div id="search">
                                            <form action="#" method="get">
                                                <input class="search-submit" type="submit" />
                                                <input id="m_search" name="s" type="text" placeholder="Type and hit enter..." />                        
                                            </form>
                                        </div><!-- #search end -->
                                    </div><!-- MAIN NAVIGATION END -->
                                </nav><!-- .navbar.navbar-default end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .main-nav end -->
                </div><!-- .container end -->
            </header><!-- .header.header-style01 -->
        </div><!-- .header-wrapper end -->