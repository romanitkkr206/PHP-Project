<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>VMI</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <!-- Logo -->
            <div class="">
                <a class="" href="index.html"> <img src="img/logo-1.png" class="logo-img" alt="" style="filter: brightness(300%);"> </a>
               
            </div>
            <!-- Button -->
            
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                   <li class="nav-item"> <a class="nav-link " href="index.php" role="button"  data-bs-auto-close="outside" aria-expanded="false">Home</a>
                            
                    </li>
                    <li class="nav-item"><a class="nav-link" href="aboutUs.php">About</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Rooms & Suites <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="rooms.html" class="dropdown-item"><span>Rooms 1</span></a></li>
                            <li><a href="rooms2.html" class="dropdown-item"><span>Rooms 2</span></a></li>
                            <li><a href="rooms3.html" class="dropdown-item"><span>Rooms 3</span></a></li>
                            <li><a href="room-details.html" class="dropdown-item"><span>Room Details</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="restaurant.html">Restaurant</a></li>
                    <li class="nav-item"><a class="nav-link" href="spa-wellness.html">Spa</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="services.html" class="dropdown-item"><span>Services</span></a></li>
                            <li><a href="facilities.html" class="dropdown-item"><span>Facilities</span></a></li>
                            <li><a href="gallery.html" class="dropdown-item"><span>Gallery</span></a></li>
                            <li><a href="team.html" class="dropdown-item"><span>Team</span></a></li>
                            <li><a href="pricing.html" class="dropdown-item"><span>Pricing</span></a></li>
                            <li><a href="careers.html" class="dropdown-item"><span>Careers</span></a></li>
                            <li><a href="faq.html" class="dropdown-item"><span>F.A.Qs</span></a></li>
                            <li class="dropdown-submenu dropdown"> <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Other Pages <i class="ti-angle-right"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="404.html" class="dropdown-item"><span>404 Page</span></a></li>
                                    <li><a href="coming-soon.html" class="dropdown-item"><span>Coming Soon</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">News <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="news.html" class="dropdown-item"><span>News 1</span></a></li>
                            <li><a href="news2.html" class="dropdown-item"><span>News 2</span></a></li>
                            <li><a href="post.html" class="dropdown-item"><span>Post Page</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav> 
   
    <!-- Slider -->
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="2" data-background="img/fourth.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                               
                                <h2>VMI GROUP engaged in </h2>
                                <h1>the Copper & Aluminium Enamelled Wire</h1>
                                <div class="butn-light mt-30 mb-30"> <a href="contact-2" data-scroll-nav="1"><span>Get In Touch</span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="2" data-background="img/second.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                               
                                <h2>VMI GROUP engaged in </h2>
                                <h1>the Copper & Aluminium Enamelled Wire</h1>
                                <div class="butn-light mt-30 mb-30"> <a href="contact-2" data-scroll-nav="1"><span>Get In Touch</span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/third.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                
                                <h2>VMI GROUP engaged in </h2>
                                <h1>the Copper & Aluminium Enamelled Wire</h1>
                                <div class="butn-light mt-30 mb-30"> <a href="contact-2" data-scroll-nav="1"><span>Get In Touch</span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/first.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                               
                                <h2>VMI GROUP engaged in </h2>
                                <h1>the Copper & Aluminium Enamelled Wire</h1>
                                <div class="butn-light mt-30 mb-30"> <a href="contact-2" data-scroll-nav="1"><span>Get In Touch</span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider reservation -->
        <div class="reservation">
            <a href="tel:+91-11-49154400">
                <div class="icon d-flex justify-content-center align-items-center">
                    <i class="flaticon-call"></i>
                </div>
                <div class="call"><span>+91-11-49154400</span> <br>Contact</div>
            </a>
        </div>
    </header>
     <!-- About -->
     <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                   
                    <div class="section-title">ABOUT US</div>
                    <p>VMI GROUP engaged in the Copper & Aluminium Enamelled Wire, Plastics Jars and Mineral Bottles industry since last 35 years . We are having our units at Jammu, Manesar and Bhiwadi. VMI Group, having a team of highly experienced professionals.</p>
                    <p>VMI Group has spread its wings in diverse direction which include Copper Rods, Copper Wire, Winding Wires, Copper Strips & Flats, Fiber Glass, Foils, Super Enamelled Wire and Polycarbonate Sheet, Multiwall Polycarbonate Sheet and Multicell Panel Sheet etc.</p>
                   
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Contact</p><a href="tel:+91-11-49154400">+91-11-49154400</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                    <img src="img/fourth.jpg" alt="" class="mt-90 mb-30">
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                    <img src="img/third.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="services section-padding">
        
        <div class="container">
            <div class="section-title">VMI Group of Companies</div>
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a style="margin-top:50px;"><img src="img/vmi.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left"> 
                            <h6>VMI INSULATION (AN ISO 9001:2015 Certified Co.)</h6>
                            <p>To meet customer deadlines, we have created an agile production facility for drawing.=, shaping, serving, twisting and insulating wire for high-technology users worldwide.Short production runs and quick turnarounds are our specialities.Much of our oroduction equipment is made exclusively to serve its customers' speciality wire needs which includes Aluminium Rods,Wires,Strips,Foils,Flats and Insulated conductors of Enamel / Fibre Glass / Paper, Confiriming to National and International Standards.</p>
                            <div class="butn-dark"> <a href="https://www.vidyametal.com/"><span>Visit Our Website</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <h6>Vidya Metal Mfg. Co. Pvt. Ltd. (An ISO 9001:2015 Co.)</h6>
                            <p>It is a group company has established a unit at Bhiwadi & Pathredi (Rajasthan) to manufacture Aluminium Rods, Wires, Strips, Foils, Flats and Insulated conductors of Enamel / Fibre Glass / Paper, Electrolytic Copper Rods & Strips, Busbar & Profiles with latest imported plant & technology to produce International standard products confirming to BIS / IEC Standards. We are fully equipped with in house laboratory and quality parameters are tested on line as well as off line for each batch of products.</p>
                            <div class="butn-dark"> <a href="https://www.vidyametal.com/"><span>Visit Our Website</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a style="margin-top:50px;"><img src="img/vidya.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a  style="margin-top:50px;"><img src="img/acc.jpeg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                           
                            <h6>Alliance Copper Concepts Pvt. Ltd.</h6>
                            <p>Alliance Copper Concepts Pvt. Ltd. (An ISO 9001:2015 Co) is an association of vast experience accompanied by young zeal & enthusiasm. Our organization is very well equipped to deliver its customers the best quality products at the most reasonable prices, being our works situated at one of the most economically strategic locations of India, Jammu. We manufacture ACC Enamelled Winding Wires made of C.C. Copper, range between 8-SWG to 40-SWG.</p>
                            <div class="butn-dark"> <a href="https://alliancecopper.com/"><span>Visit Our Website</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                           
                            <h4>VMI Plastics Pvt. Ltd.</h6>
                            <p>VMI Plastics Pvt. Ltd. entered into the field of manufacturing Polycarbonate bottles in year 2000. Presently we are supplying bottle to The Hindustan Coca-Cola and other reputed mineral water bottle manufacturers. In the year 2004 we entered into manufacturing of Polycarbonate sheet under the brand name "SUNLITE Polycarbonate Sheet". The manufacturing and technical center is located in Manesar (Haryana).</p>
                            <div class="butn-dark"> <a href="https://vmiplastic.in/"><span>Visit Our Website</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a  style="margin-top:35px;"><img src="img/sunlite.jpeg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Rooms -->
    <section class="rooms1 section-padding bg-cream" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="section-title">LOCATIONS</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d223994.72938373935!2d77.153225!3d28.69211!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d02338c13fff9%3A0x4f8292b03a5f2b4!2sVidya%20Metal%20Mfg.%20Co.%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1686542442117!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div> <span class="category"><a href="rooms2.html">Book</a></span>
                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d225033.84207903425!2d76.850405!3d28.20264!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d3794bd73e749%3A0x5d1b92c8fc365255!2sVidya%20Metal%20Mfg%20Co.pvt%20Ltd!5e0!3m2!1sen!2sin!4v1686542469951!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div> <span class="category"><a href="rooms2.html">Book</a></span>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d225020.74661016042!2d76.857433!3d28.208857!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d368f23f328f1%3A0xcbb8d462ae8597a7!2sVidya%20Metal%20Mfg%20Co%20Pvt%20Ltd%20Unit%202!5e0!3m2!1sen!2sin!4v1686542496209!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div> <span class="category"><a href="rooms2.html">Book</a></span>
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item">
                        <div class="position-re o-hidden"><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d13439.444588054414!2d74.90383534851973!3d32.63652097955841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sAlliance%20Copper%20Concepts%20Pvt.%20Ltd%3ALane%20No-3%2C%20Phase-1%2C%20SIDCO%20Industrial%20Area%2C%20Bari%20Brahmana%2C%20Jammu%20(J%26K)!5e0!3m2!1sen!2sin!4v1686542546635!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div> <span class="category"><a href="rooms2.html">Book</a></span>
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item">
                        <div class="position-re o-hidden"> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28099.41119440592!2d76.877485!3d28.315695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d3fb5e6d68cf1%3A0x3a79c3f7af670894!2sVMI%20Plastics%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1686542565011!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                        <div class="con">
                            <h6><a href="room-details.html">VMI Plastic Pvt. Ltd:</a></h6>
                            <h5><a href="room-details.html">Khasra No 91/19, 20, 22/1, 22/2, 23/1, Village Bhora Kalan, Binola, Tehsil Farrukh Nagar, Gurugram, Haryana</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7">
                                    <ul>
                                       
                                    </ul>
                                </div>
                                <div class="col col-md-5 text-end">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing -->
    <section class="pricing section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="section-subtitle"><span>Best Prices</span></div>
                    <div class="section-title"><span>Extra Services</span></div>
                    <p class="color-2">The best prices for your relaxing vacation. The utanislen quam nestibulum ac quame odion elementum sceisue the aucan.</p>
                    <p class="color-2">Orci varius natoque penatibus et magnis disney parturient monte nascete ridiculus mus nellen etesque habitant morbine.</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p class="color-2">For information</p> <a href="tel:855-100-4444">855 100 4444</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme">
                        <div class="pricing-card">
                            <img src="img/pricing/1.jpg" alt="">
                            <div class="desc">
                                <div class="name">Room cleaning</div>
                                <div class="amount">$50<span>/ month</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="img/pricing/2.jpg" alt="">
                            <div class="desc">
                                <div class="name">Drinks included</div>
                                <div class="amount">$30<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="img/pricing/3.jpg" alt="">
                            <div class="desc">
                                <div class="name">Room Breakfast</div>
                                <div class="amount">$30<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="img/pricing/4.jpg" alt="">
                            <div class="desc">
                                <div class="name">Safe & Secure</div>
                                <div class="amount">$15<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     Promo Video 
    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="3" data-background="img/slider/2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                       <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                        <div class="section-subtitle"><span>The Cappa Luxury Hotel</span></div>
                        <div class="section-title"><span>Promotional Video</span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center col-md-12">
                        <a class="vid" href="https://youtu.be/7BGNAGahig8">
                        <div class="vid-butn">
                            <span class="icon">
                                <i class="ti-control-play"></i>
                            </span>
                        </div>
                    </a>
                    </div>

                </div>
            </div>
    </section>
    <!-- Facilties-->
    <section class="facilties section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Our Services</div>
                    <div class="section-title">Hotel Facilities</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-world"></span>
                        <h5>Pick Up & Drop</h5>
                        <p>We’ll pick up from airport while you comfy on your ride, mus nellentesque habitant.</p>
                        <div class="facility-shape"> <span class="flaticon-world"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-car"></span>
                        <h5>Parking Space</h5>
                        <p>Fusce tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.</p>
                        <div class="facility-shape"> <span class="flaticon-car"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-bed"></span>
                        <h5>Room Service</h5>
                        <p>Room tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.</p>
                        <div class="facility-shape"> <span class="flaticon-bed"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-swimming"></span>
                        <h5>Swimming Pool</h5>
                        <p>Swimming pool tincidunt nise ace park norttito sit space, mus nellentesque habitant.</p>
                        <div class="facility-shape"> <span class="flaticon-swimming"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-wifi"></span>
                        <h5>Fibre Internet</h5>
                        <p>Wifi tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.</p>
                        <div class="facility-shape"> <span class="flaticon-wifi"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-breakfast"></span>
                        <h5>Breakfast</h5>
                        <p>Eat tincidunt nisa ace park norttito sit amet space, mus nellentesque habitant</p>
                        <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Booking Search -->
    <section class="section-padding bg-cream">
        <div class="container">
            <div class="section-subtitle">Check Now</div>
            <div class="section-title">Search Rooms</div>
            <div class="booking-inner clearfix">
                <form class="form1 clearfix">
                    <div class="col1 c1">
                        <div class="input1_wrapper">
                            <label>Check in</label>
                            <div class="input1_inner">
                                <input type="text" class="form-control input datepicker" placeholder="Check in">
                            </div>
                        </div>
                    </div>
                    <div class="col1 c2">
                        <div class="input1_wrapper">
                            <label>Check out</label>
                            <div class="input1_inner">
                                <input type="text" class="form-control input datepicker" placeholder="Check out">
                            </div>
                        </div>
                    </div>
                    <div class="col2 c3">
                        <div class="select1_wrapper">
                            <label>Adults</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">1 Adult</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                    <option value="4">4 Adults</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col2 c4">
                        <div class="select1_wrapper">
                            <label>Children</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">Children</option>
                                    <option value="1">1 Child</option>
                                    <option value="2">2 Children</option>
                                    <option value="3">3 Children</option>
                                    <option value="4">4 Children</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col2 c5">
                        <div class="select1_wrapper">
                            <label>Rooms</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">1 Room</option>
                                    <option value="2">2 Rooms</option>
                                    <option value="3">3 Rooms</option>
                                    <option value="4">4 Rooms</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col3 c6">
                        <button type="submit" class="btn-form1-submit">Check Now</button>
                    </div>
                </form>
            </div>
        </div>
    </section>-->
    <!-- Testiominals-->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/2.jpg" data-overlay-dark="3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="testimonials-box">
                            <div class="head-box">
                                <h6>Testimonials</h6>
                                <h4>What Client's Say?</h4>
                                <div class="line"></div>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <span class="quote"><img src="img/quot.png" alt=""></span>
                                    <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc fermen norttito sit space, mus nellentesque habitan.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/4.jpg" alt=""> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Emily Brown</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="quote"><img src="img/quot.png" alt=""></span>
                                    <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc fermen norttito sit space, mus nellentesque habitan.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/1.jpg" alt=""> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Nolan White</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="quote"><img src="img/quot.png" alt=""></span>
                                    <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc fermen norttito sit space, mus nellentesque habitan.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/5.jpg" alt=""> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Olivia Martin</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- Services -->
    
    <!-- News -->
    <section class="news section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Hotel Blog</span></div>
                    <div class="section-title"><span>Our News</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/news/1.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>02</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news.html">Restaurant</a>
                                </span>
                                <h5><a href="post.html">Historic restaurant renovated</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/news/2.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>04</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news.html">Spa</a>
                                </span>
                                <h5><a href="post.html">Benefits of Spa Treatments</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/news/3.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>06</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news.html">Bathrooms</a>
                                </span>
                                <h5><a href="post.html">Hotel Bathroom Collections</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/news/4.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con"> 
                                <span class="category">
                                    <a href="news.html">Health</a>
                                </span>
                                <h5><a href="post.html">Weight Loss with Fitness Health Club</a></h5>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/news/6.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news.html">Design</a>
                                </span>
                                <h5><a href="post.html">Retro Lighting Design in The Hotels</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/news/5.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news.html">Health</a>
                                </span>
                                <h5><a href="post.html">Benefits of Swimming for Your Health</a></h5>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Reservation & Booking Form -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/fourth.jpg" data-overlay-dark="2">
            <div class="container">
                <div class="row">
                    <!-- Reservation -->
                    <div class="col-md-5 mb-30 mt-30">
                        <h3>Get In Touch</h3>
                        <h5>To make requests for further information, Contact Us</h5>
                        <div class="reservations mb-30">
                            <div class="icon color-1"><span class="flaticon-call"></span></div>
                            <div class="text">
                                <p class="color-1">Contact</p> <a class="color-1" href="tel:+91-11-49154400">+91-11-49154400</a>
                                
                            </div>
                        </div>
                        <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p>
                    </div>
                    <!-- Booking From -->
                    <div class="col-md-5 offset-md-2">
                        <div class="booking-box">
                            <div class="head-box">
                                <h4>Get in Touch</h4>
                            </div>
                            <div class="booking-inner clearfix"  id="contact-2">
                                <form method="post" class="form1 clearfix">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input1_wrapper">
                                                <label>First Name:</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control" placeholder="First name" name="fname" style="border-radius:5px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input1_wrapper">
                                                <label>Last Name:</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control" placeholder="Last name" name="lname" style="border-radius:5px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Email:</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control" placeholder="Your email" name="email" style="border-radius:5px;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Phone:</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control" placeholder="Phone" name="phone" style="border-radius:5px;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Subject:</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control" placeholder="Subject" name="subject" style="border-radius:5px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Message:</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control" placeholder="Query" name="message" style="border-radius:5px;">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <input type="submit" class="btn-form1-submit mt-15" name="submit" value="Submit" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients-->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                <div class="owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/1.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/2.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/3.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/4.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/5.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/6.png" alt=""></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-column footer-about">
                            <h3 class="footer-title">About VMI</h3>
                            <p class="footer-about-text">Engaged in the Copper & Aluminium Enamelled Wire, Plastics Jars and Mineral Bottles industry since last 35 years .</p>

                            <div class="footer-language"> <i class="lni ti-world"></i>
                                <select onchange="location = this.value;">
                                    <option value="#0">English</option>
                                    <option value="#0">German</option>
                                </select>
                            </div>
                    </div>
                    </div>
                    
                    <div class="col-md-4" id="contact">
                        <div class="footer-column footer-contact">
                            <h3 class="footer-title">Contact</h3>
                            <p class="footer-contact-text">507, 5th Floor, D-Block, NDM-2 Netaji Subhash Place,<br> Pitampura, New Delhi, India</p>
                            <div class="footer-contact-info">
                                <p class="footer-contact-phone"><span class="flaticon-call"></span> +91-11-49154400</p>
                                <p class="footer-contact-mail">support@vmigroup.org</p>
                            </div>
                            <div class="footer-about-social-list">
                                <a href="#"><i class="ti-instagram"></i></a>
                                <a href="#"><i class="ti-twitter"></i></a>
                                <a href="#"><i class="ti-youtube"></i></a>
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom-inner">
                            <p class="footer-bottom-copy-right">© Copyright 2023 by <a href="#">VMI</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from duruthemes.com/demo/html/cappa/demo2-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jun 2023 03:15:58 GMT -->
</html>

<?php
    if(isset($_POST['submit']))
    {
        
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];
            
            
            

                $query=mysqli_query($con, "insert into `register`(Id , First_Name , Last_Name , Email , Subject , Message ) value('','$fname', '$lname', '$email', '$subject', '$message')");
                
                if ($query) {
                    echo '<script>alert("successfully registered")</script>';
                    }
                else
                    {
                    echo '<script>alert("Something Went Wrong. Please try again")</script>';
                    }  
    }
?>