<?php include 'common/header.php'; ?>

<?php include 'common/navigation.php'; ?>

<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(images/img_bg_1.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>5 Days Trip</h2>
                                <h1>Amazing Anuradhapura Trip</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/img_bg_2.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>2 Day Trip</h2>
                                <h1>From Trincomalee to Piegon Island</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/img_bg_5.jpg);">
                <div class="overlay"></div>
                <div class="container-fluids">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Explore Sri Lanka with </h2>
                                <h1>Around Ceylon Tour</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/img_bg_4.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Experience the</h2>
                                <h1>Best Trip Ever</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
<div id="colorlib-reservation">
    <!-- <div class="container"> -->
    <div class="row">
        <div class="search-wrap">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
                    <li><a data-toggle="tab" href="#car"><i class="flaticon-car"></i> Car Rent</a></li>

                </ul>
            </div>
            <div class="tab-content">

                <div id="hotel" class="tab-pane fade in active">
                    <form method="post" class="colorlib-form">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="booknow">
                                    <h2>Book Now</h2>
                                    <span>Best Price Online</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Check-in:</label>
                                    <div class="form-field">
                                        <i class="icon icon-calendar2"></i>
                                        <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Check-out:</label>
                                    <div class="form-field">
                                        <i class="icon icon-calendar2"></i>
                                        <input type="text" id="date" class="form-control date" placeholder="Check-out date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="guests">Guest</label>
                                    <div class="form-field">
                                        <i class="icon icon-arrow-down3"></i>
                                        <select name="people" id="people" class="form-control">
                                            <option value="#">1</option>
                                            <option value="#">2</option>
                                            <option value="#">3</option>
                                            <option value="#">4</option>
                                            <option value="#">5+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </form>
                </div>
                <div id="car" class="tab-pane fade">
                    <form method="post" class="colorlib-form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date">Where:</label>
                                    <div class="form-field">
                                        <input type="text" id="location" class="form-control" placeholder="Search Location">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Start Date:</label>
                                    <div class="form-field">
                                        <i class="icon icon-calendar2"></i>
                                        <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Return Date:</label>
                                    <div class="form-field">
                                        <i class="icon icon-calendar2"></i>
                                        <input type="text" id="date" class="form-control date" placeholder="Check-out date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" name="submit" id="submit" value="Find Car" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

<div id="colorlib-services">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-3 animate-box text-center aside-stretch">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-around"></i>
                    </span>
                    <h3>Amazing Travelling Experience</h3>
                    <p>Travel all around the country, from east to west and north to south within Sri Lanka as you wish </p>
                </div>
            </div>
            <div class="col-md-3 animate-box text-center">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-resort"></i>
                    </span>
                    <h3>Book Your Hotel</h3>
                    <p>Can book your own hotel room within ample amount of time </p>
                </div>
            </div>
            <div class="col-md-3 animate-box text-center">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-car"></i>
                    </span>
                    <h3>Book Your Trip</h3>
                    <p>Can book your trip with vehicle online in a fraction of second without expend any more extra money.</p>
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

<div class="colorlib-tour colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                <h2>Popular Destinations </h2>
                <p>You can visit the popoular destinations in Sri Lanka as you wish</p>
            </div>
        </div>
    </div>
    <div class="tour-wrap">
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(images/tour-1.jpg);">
            </div>
            <span class="desc">
                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                <h2>Family Tour in North Central</h2>
                <span class="city">Anuradhapura</span>
                <span class="price">Rs.10,000</span>
            </span>
        </a>
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(images/tour-2.jpg);">
            </div>
            <span class="desc">
                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                <h2>Family Tour in Eastern</h2>
                <span class="city">Trincomalee</span>
                <span class="price">Rs.8,000</span>
            </span>
        </a>
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(images/tour-3.jpg);">
            </div>
            <span class="desc">
                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                <h2>Family Tour in Southern</h2>
                <span class="city">Hikkaduwa</span>
                <span class="price">Rs.9,000</span>
            </span>
        </a>
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(images/tour-4.jpg);">
            </div>
            <span class="desc">
                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                <h2>Family Tour in North Western</h2>
                <span class="city">Kurunegala</span>
                <span class="price">Rs.8,500</span>
            </span>
        </a>
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(images/tour-5.jpg);">
            </div>
            <span class="desc">
                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                <h2>Family Tour in Central</h2>
                <span class="city">Kandy</span>
                <span class="price">Rs.8,000</span>
            </span>
        </a>
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(images/tour-6.jpg);">
            </div>
            <span class="desc">
                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                <h2>Family Tour in Northern</h2>
                <span class="city">Jaffna</span>
                <span class="price">Rs.7,500</span>
            </span>
        </a>
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(images/tour-7.jpg);">
            </div>
            <span class="desc">
                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                <h2>Family Tour in Western</h2>
                <span class="city">Colombo</span>
                <span class="price">Rs.8,000</span>
            </span>
        </a>
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(images/tour-8.jpg);">
            </div>
            <span class="desc">
                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                <h2>Family Tour in Sabaragamuwa</h2>
                <span class="city">Rathnapura</span>
                <span class="price">Rs.10,000</span>
            </span>
        </a>
    </div>
</div>
<div id="colorlib-intro" class="intro-img" style="background-image: url(images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 animate-box">
                <div class="intro-desc">
                    <div class="text-salebox">
                        <div class="text-lefts">
                            <div class="sale-box">
                                <div class="sale-box-top">
                                    <h2 class="number">45</h2>
                                    <span class="sup-1">%</span>
                                    <span class="sup-2">Off</span>
                                </div>
                                <h2 class="text-sale">Sale</h2>
                            </div>
                        </div>
                        <div class="text-rights">
                            <h3 class="title">Just hurry up limited offer!</h3>
                            <p>We'd love to tell our successful tales about far far away, behind the mountains, far from the crowded to Ella and Sinharaja, and live there to feel the nature.</p>
                            <p><a href="#" class="btn btn-primary">Book Now</a> <a href="#" class="btn btn-primary btn-outline">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="video-wrap">
                    <div class="video colorlib-video" style="background-image: url(images/img_bg_2.jpg);">
                        <a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video"></i></a>
                        <div class="video-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="colorlib-hotel">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                <h2>Recommended Hotels</h2>
                <p>We have different kinds of hotels throughout the country, even in the wild...</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animate-box">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="hotel-entry">
                            <a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-1.jpg);">
                                <p class="price"><span>Rs12,000</span><small> /night</small></p>
                            </a>
                            <div class="desc">
                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                                <h3><a href="#">Hotel Bandarawela</a></h3>
                                <span class="place">Bandarawela</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="hotel-entry">
                            <a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-2.jpg);">
                                <p class="price"><span>Rs12,000</span><small> /night</small></p>
                            </a>
                            <div class="desc">
                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                                <h3><a href="#">Hotel Badulla</a></h3>
                                <span class="place">Badulla</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="hotel-entry">
                            <a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-3.jpg);">
                                <p class="price"><span>Rs12,000</span><small> /night</small></p>
                            </a>
                            <div class="desc">
                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                                <h3><a href="#">Hotel Matara</a></h3>
                                <span class="place">Matara</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="hotel-entry">
                            <a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-4.jpg);">
                                <p class="price"><span>Rs12,000</span><small> /night</small></p>
                            </a>
                            <div class="desc">
                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                                <h3><a href="#">Hotel Avissawella</a></h3>
                                <span class="place">Avissawella</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-tour">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                <h2>Most Popular Travel Places</h2>
                <p>We'd love to tell our successful tales about far far away, behind the mountains, far from the crowded to Ella and Sinharaja, and live there to feel the nature.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="f-tour">
                    <div class="row row-pb-md">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(images/tour-1.jpg);">
                                        <div class="desc">
                                            <h3>Anuradhapura- 5 Days</h3>
                                            <p class="price"><span>Rs12,000</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(images/tour-2.jpg);">
                                        <div class="desc">
                                            <h3>Trincomalee - 5 Days</h3>
                                            <p class="price"><span>Rs12,000</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(images/tour-3.jpg);">
                                        <div class="desc">
                                            <h3>Hikkaduwa - 5 Days</h3>
                                            <p class="price"><span>Rs12,000</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(images/tour-4.jpg);">
                                        <div class="desc">
                                            <h3>Kurunegala - 5 Days</h3>
                                            <p class="price"><span>Rs12,000</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box">
                            <div class="desc">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>North Central Province, Sri Lanka</h3>
                                        <p>We'd love to tell our successful tales about far far away, behind the mountains, far from the crowded to Ella and Sinharaja, and live there to feel the nature.</p><br>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Best Tours Places</h4>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <ul>
                                                    <li><a href="#">Thooparamaya</a></li>
                                                    <li><a href="#">Sri Maha Bodhiya</a></li>
                                                    <li><a href="#">Mirisawetiya</a></li>
                                                    <li><a href="#">Lankaramaya</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <ul>
                                                    <li><a href="#">Gal Viharaya</a></li>
                                                    <li><a href="#">Isurumuniya</a></li>
                                                    <li><a href="#">katharagama</a></li>
                                                    <li><a href="#">Trincomalee</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <ul>
                                                    <li><a href="#">Lovamahapaya</a></li>
                                                    <li><a href="#">Abhayagoriya</a></li>
                                                    <li><a href="#">Mahamewna Gardens</a></li>
                                                    <li><a href="#">Jethawanaramaya</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p><a href="tours.html" class="btn btn-primary">View All Places</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="f-tour">
                    <div class="row">
                        <div class="col-md-6 col-md-push-6">
                            <div class="row">
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(images/tour-5.jpg);">
                                        <div class="desc">
                                            <h3>Kandy - 2 Days</h3>
                                            <p class="price"><span>Rs12,000</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(images/tour-6.jpg);">
                                        <div class="desc">
                                            <h3>Jaffna - 3 Days</h3>
                                            <p class="price"><span>Rs12,000</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(images/tour-7.jpg);">
                                        <div class="desc">
                                            <h3>Colombo - 4 Days</h3>
                                            <p class="price"><span>Rs12,000</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(images/tour-8.jpg);">
                                        <div class="desc">
                                            <h3>Rathnapura - 5 Days</h3>
                                            <p class="price"><span>Rs12,000</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box col-md-pull-6 text-right">
                            <div class="desc">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Central Province, Sri Lanka</h3>
                                        <p>You can visit beautiful attractive and religious places in Central Province, Sri Lanka</p><br>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Best Tours Places</h4>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-4 col-xs-4">
                                                <ul>
                                                    <li><a href="#">Temple of Tooth Relic</a></li>
                                                    <li><a href="#">Peradeniya Botanical Garden</a></li>
                                                    <li><a href="#">Haggala Botanical Garden</a></li>
                                                    <li><a href="#">Knucles Moutain Range</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-4 col-xs-4">
                                                <ul>
                                                    <li><a href="#">Ambekke Devalaya</a></li>
                                                    <li><a href="#"> Alu Viharaya</a></li>
                                                    <li><a href="#">Trieste</a></li>
                                                    <li><a href="#">Florence</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <p><a href="tours.html" class="btn btn-primary">View All Places</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'common/footer.php'; ?>