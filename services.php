<?php include 'common/header.php'; ?>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="colorlib-logo"><a href="index.php">Tour SL</a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="tours.php">Tours</a></li>
                                <li><a href="hotels.php">Hotels</a></li>
                                <li class="active"><a href="services.php">Services</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(images/cover-img-1.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner text-center">

                                        <h1>Our Services</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="colorlib-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-around"></i>
                            </span>
                            <h3>Amazing Travelling Experience</h3>
                            <p>Travel all around the country, from east to west and north to south within Sri Lanka as you wish</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-resort"></i>
                            </span>
                            <h3>Book Your Hotel</h3>
                            <p>Can book your own hotel room within ample amount of time</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-car"></i>
                            </span>
                            <h3>Book Your Trip</h3>
                            <p>Can book your trip online in a fraction of second without expend any more extra money.</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-postcard"></i>
                            </span>
                            <h3>Nice Support</h3>
                            <p>Our team members will guide the entire trip from beginning to end by ensuring the most reliable and accurate service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include 'common/footer.php'; ?>