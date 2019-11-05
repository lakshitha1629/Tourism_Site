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
                                <li><a href="services.php">Services</a></li>
                                <li><a href="about.php">About</a></li>
                                <li class="active"><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(images/cover-img-3.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">

                                        <h1>Contact us</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="colorlib-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 animate-box">
                        <h3>Get In Touch</h3>
                        <form action="#">
                            <div class="row form-group">
                                <div class="col-md-6 padding-bottom">
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                                </div>
                                <div class="col-md-6">
                                    <label for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" class="form-control" placeholder="Your email address">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                    <div class="col-md-10 col-md-offset-1 animate-box">
                        <h3>Contact Information</h3>
                        <div class="row contact-info-wrap">
                            <div class="col-md-3">
                                <p><span><i class="icon-location"></i></span> 219 Main Street, <br> Homagama</p>
                            </div>
                            <div class="col-md-3">
                                <p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+94 0724318456</a></p>
                            </div>
                            <div class="col-md-3">
                                <p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                            </div>
                            <div class="col-md-3">
                                <p><span><i class="icon-globe"></i></span> <a href="#">yoursite.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="map" class="colorlib-map"></div>


        <?php include 'common/footer.php'; ?> F