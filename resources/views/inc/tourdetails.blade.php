<!--Swiper -->
<link href="{{ asset('css\swiper.min.css') }}" rel="stylesheet">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Colorlib">
        <meta name="description" content="#">
        <meta name="keywords" content="#">
        <!-- Favicons -->
        <link rel="shortcut icon" href="#">
        <!-- Page Title -->
        <title>Listing &amp; Directory Website Template</title>
        <!-- Google Fonts -->
        <!-- Simple line Icon -->
        <link rel="stylesheet" href="{{ asset('css\simple-line-icons.css') }}">
        <!-- Themify Icon -->
        <link rel="stylesheet" href="{{ asset('css\themify-icons.css') }}">
        <!-- Hover Effects -->
        <link rel="stylesheet" href="{{ asset('css\set1.css') }}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('css\magnific-popip.css') }}">
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('css\style.css') }}">
  
<style>
    .slider {
  background: url(../img/slider.jpg) no-repeat;
  background-size: cover;
  min-height: 800px; }
  @media (max-width: 992px) {
    .slider {
      min-height: 700px; } }

.btn-outline-light {
  padding: 10px 16px; }
  @media (max-width: 992px) {
    .btn-outline-light {
      width: 25%; } }
  @media (max-width: 768px) {
    .btn-outline-light {
      width: 30%; } }
  @media (max-width: 576px) {
    .btn-outline-light {
      width: 40%; } }
  @media (max-width: 480px) {
    .btn-outline-light {
      width: 100%; } }
  .btn-outline-light:hover {
    color: #000; }

.slider-title_box {
  text-align: center; }

.slider-content_wrap h5 {
  color: #909090;
  font-weight: 400;
  margin: 24px 0; }

@media (max-width: 480px) {
  .form-wrap {
    margin: 0 !important; } }

.btn-group {
  width: 100%; }
  @media (max-width: 576px) {
    .btn-group {
      display: block; } }

.btn-group1 {
  padding: 24px;
  width: 40%;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  border: none; }
  @media (max-width: 576px) {
    .btn-group1 {
      width: 100%;
      border-radius: 3px;
      margin: 0 0 10px;
      padding: 17px; } }

.btn-group2 {
  position: relative;
  padding: 24px;
  width: 33%;
  border-top: none;
  border-right: none;
  border-bottom: none;
  border-left: 1px solid #ccc; }
  @media (max-width: 576px) {
    .btn-group2 {
      width: 100%;
      border-radius: 3px;
      margin: 0 0 10px;
      padding: 17px; } }

.btn-form {
  font-weight: 400;
  font-size: 18px;
  padding: 17px;
  width: 27%;
  background: #ff3a6d;
  color: #ffffff;
  border: none;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px; }
  @media (max-width: 768px) {
    .btn-form {
      width: auto; } }
  @media (max-width: 576px) {
    .btn-form {
      width: 100%;
      border-radius: 3px; } }

.search-icon {
  font-size: 15px;
  padding-right: 10px; }

.slider-link {
  color: #909090;
  margin: 45px 0 0;
  font-size: 19px; }
  @media (max-width: 480px) {
    .slider-link {
      margin: 18px 0 0; }
      .slider-link a,
      .slider-link span {
        display: block; } }
  .slider-link a {
    color: #909090;
    text-decoration: underline;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s; }
    .slider-link a:hover {
      color: #fff; }
  .slider-link span {
    padding: 0 18px; }

 /* ==============================================================
   DETAIL PAGE
   ============================================================== */
.detail-filter-wrap {
  padding: 17px 0;
  border-bottom: 1px solid #e7e7e7; }
  .detail-filter-wrap p {
    font-size: 18px;
    color: #3e434b;
    font-weight: 300;
    margin: 6px 0 0; }
    .detail-filter-wrap p span {
      font-weight: 500; }

.detail-filter {
  text-align: right; }
  @media (max-width: 992px) {
    .detail-filter {
      text-align: left; } }
  .detail-filter p {
    font-weight: 300;
    color: #3e434b;
    font-size: 14px;
    display: inline-block;
    margin: 0 10px 0 0; }

.map-responsive-wrap {
  display: none; }
  @media (max-width: 992px) {
    .map-responsive-wrap {
      display: block; } }
  .map-responsive-wrap iframe {
    width: 100%;
    height: 800px; }

.map-icon {
  display: none;
  border: 1px solid #737882;
  color: #737882;
  padding: 8px 10px 2px 10px;
  margin: -46px 0 0;
  opacity: 0.6;
  -webkit-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease; }
  .map-icon:hover {
    text-decoration: none;
    color: #737882;
    opacity: 1; }
  @media (max-width: 992px) {
    .map-icon {
      display: inline-block;
      text-align: right;
      float: right; } }
  @media (max-width: 480px) {
    .map-icon {
      float: left;
      margin: 10px 0 0; } }
  .map-icon span {
    font-size: 22px; }

.map-toggle {
  display: none; }

.filter-dropdown {
  display: inline-block; }
  .filter-dropdown select {
    border-radius: 0; }

.detail-checkbox-wrap {
  padding: 22px 0; }

.detail-options-wrap {
  padding: 15px 0; }

@media (max-width: 992px) {
  .responsive-wrap {
    max-width: 100%;
    -webkit-box-flex: 100%;
    -webkit-flex: 100%;
    -ms-flex: 100%;
    flex: 100%; } }


</style>   
  </head>
<!--============================= BOOKING =============================-->

<div>
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a href="{{asset('img/rerseve-slide2.jpg')}}" class="grid image-link">
                        <img src="{{asset('img/reserve-slide2.jpg')}}" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{asset('img/reserve-slide1.jpg')}}" class="grid image-link">
                        <img src="{{asset('img/reserve-slide1.jpg')}}"  class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{asset('img/reserve-slide3.jpg')}}"  class="grid image-link">
                        <img src="{{asset('img/reserve-slide3.jpg')}}"  class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{asset('img/reserve-slide1.jpg')}}"  class="grid image-link">
                        <img src="{{asset('img/reserve-slide1.jpg')}}"  class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{asset('img/reserve-slide2.jpg')}}"  class="grid image-link">
                        <img src="{{asset('img/reserve-slide2.jpg')}}"  class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{asset('img/reserve-slide3.jpg')}}"  class="grid image-link">
                        <img src="{{asset('img/reserve-slide3.jpg')}}"  class="img-fluid" alt="#">
                    </a>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
    <!--//END BOOKING -->
    <!--============================= RESERVE A SEAT =============================-->
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Tasty Hand-Pulled Noodles</h5>
                    <p><span>$$$</span>$$</p>
                    <p class="reserve-description">Innovative cooking, paired with fine wines in a modern setting.</p>
                </div>
                <div class="col-md-6">
                    <div class="reserve-seat-block">
                        <div class="reserve-rating">
                            <span>9.5</span>
                        </div>
                        <div class="review-btn">
                            <a href="#" class="btn btn-outline-danger">WRITE A REVIEW</a>
                            <span>34 reviews</span>
                        </div>
                        <div class="reserve-btn">
                            <div class="featured-btn-wrap">
                                <a href="#" class="btn btn-danger">RESERVE A SEAT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END RESERVE A SEAT -->
    <!--============================= BOOKING DETAILS =============================-->
    <section class="light-bg booking-details_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8 responsive-wrap">
                    <div class="booking-checkbox_wrap">
                        <div class="booking-checkbox">
                            <p>Tasty Hand-Pulled Noodles is a 1950s style diner located in Madison, Wisconsin. Opened in 1946 by Mickey Weidman, and located just across the street from Camp Randall Stadium, it has become a popular game day tradition amongst
                                many Badger fans. The diner is well known for its breakfast selections, especially the Scrambler, which is a large mound of potatoes, eggs, cheese, gravy, and a patrons’ choice of other toppings.</p>
                            <p>Mickies has also been featured on “Todd’s Taste of the Town” during one of ESPN’s college football broadcasts. We are one of the best Chinese restaurants in the New York, New York area. We have been recognized for our outstanding
                                Chinese & Asian cuisine, excellent Chinese menu, and great restaurant specials. We are one of the best Chinese restaurants in the New York, New York area. We have been recognized for our outstanding Chinese & Asian cuisine,
                                excellent Chinese menu, and great restaurant specials.</p>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                        <span class="ti-check-box"></span>
                        <span class="custom-control-description">Bike Parking</span>
                      </label> </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                       <span class="ti-check-box"></span>
                       <span class="custom-control-description">Wireless Internet  </span>
                     </label>
                            </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                     <span class="ti-check-box"></span>
                     <span class="custom-control-description">Smoking Allowed  </span>
                   </label> </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                    <span class="ti-check-box"></span>
                    <span class="custom-control-description">Street Parking</span>
                  </label>
                            </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                   <span class="ti-check-box"></span>
                   <span class="custom-control-description">Special</span>
                 </label> </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                  <span class="ti-check-box"></span>
                  <span class="custom-control-description">Accepts Credit cards</span>
                </label>
                            </div>
                        </div>
                    </div>
                    <div class="booking-checkbox_wrap mt-4">
                        <h5>34 Reviews</h5>
                        <hr>
                        <div class="customer-review_wrap">
                            <div class="customer-img">
                                <img src="{{asset('img/customer-img1.jpg')}}" class="img-fluid" alt="#">
                                <p>Amanda G</p>
                                <span>35 Reviews</span>
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>Best noodles in the Newyork city</h6>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="round-icon-blank"></span>
                                        <p>Reviewed 2 days ago</p>
                                    </div>
                                    <div class="customer-rating">8.0</div>
                                </div>
                                <p class="customer-text">I love the noodles here but it is so rare that I get to come here. Tasty Hand-Pulled Noodles is the best type of whole in the wall restaurant. The staff are really nice, and you should be seated quickly. I usually get the
                                    hand pulled noodles in a soup. House Special #1 is amazing and the lamb noodles are also great. If you want your noodles a little chewier, get the knife cut noodles, which are also amazing. Their dumplings are great
                                    dipped in their chili sauce.
                                </p>
                                <p class="customer-text">I love how you can see into the kitchen and watch them make the noodles and you can definitely tell that this is a family run establishment. The prices are are great with one dish maybe being $9. You just have to remember
                                    to bring cash.
                                </p>
                                <ul>
                                    <li><img src="{{asset('img/review-img1.jpg')}}" class="img-fluid" alt="#"></li>
                                    <li><img src="{{asset('img/review-img2.jpg')}}" class="img-fluid" alt="#"></li>
                                    <li><img src="{{asset('img/review-img3.jpg')}}" class="img-fluid" alt="#"></li>
                                </ul>
                                <span>28 people marked this review as helpful</span>
                                <a href="#"><span class="icon-like"></span>Helpful</a>
                            </div>
                        </div>
                        <hr>
                        <div class="customer-review_wrap">
                            <div class="customer-img">
                                <img src="{{asset('img/customer-img2.jpg')}}" class="img-fluid" alt="#">
                                <p>Kevin W</p>
                                <span>17 Reviews</span>
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>A hole-in-the-wall old school shop.</h6>
                                        <span class="customer-rating-red"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <p>Reviewed 3 months ago</p>
                                    </div>
                                    <div class="customer-rating customer-rating-red">2.0</div>
                                </div>
                                <p class="customer-text">The dumplings were so greasy...the pan-fried shrimp noodles were the same. So much oil and grease it was difficult to eat. The shrimp noodles only come with 3 shrimp (luckily the dish itself is cheap) </p>
                                <p class="customer-text">The beef noodle soup was okay. I added black vinegar into the broth to give it some extra flavor. The soup has bok choy which I liked - it's a nice textural element. The shop itself is really unclean (which is the case
                                    in many restaurants in Chinatown) They don't wipe down the tables after customers have eaten. If you peak into the kitchen many of their supplies are on the ground which is unsettling... </p>
                                <span>10 people marked this review as helpful</span>
                                <a href="#"><span class="icon-like"></span>Helpful</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 responsive-wrap">
                    <div class="contact-info">
                        <img src="{{asset('img/map.jpg')}}" class="img-fluid" alt="#">
                        <div class="address">
                            <span class="icon-location-pin"></span>
                            <p> Doyers St<br> New York, NY 10013<br> b/t Division St & St James Pl <br> Chinatown, Civic Center</p>
                        </div>
                        <div class="address">
                            <span class="icon-screen-smartphone"></span>
                            <p> +44 20 7336 8898</p>
                        </div>
                        <div class="address">
                            <span class="icon-link"></span>
                            <p>https://burgerandlobster.com</p>
                        </div>
                        <div class="address">
                            <span class="icon-clock"></span>
                            <p>Mon - Sun 09:30 am - 05:30 pm <br>
                                <span class="open-now">OPEN NOW</span></p>
                        </div>
                        <a href="#" class="btn btn-outline-danger btn-contact">SEND A MESSAGE</a>
                    </div>
                    <div class="follow">
                        <div class="follow-img">
                            <img src="{{asset('img/follow-img.jpg')}}" class="img-fluid" alt="#">
                            <h6>Christine Evans</h6>
                            <span>New York</span>
                        </div>
                        <ul class="social-counts">
                            <li>
                                <h6>26</h6>
                                <span>Listings</span>
                            </li>
                            <li>
                                <h6>326</h6>
                                <span>Followers</span>
                            </li>
                            <li>
                                <h6>12</h6>
                                <span>Followers</span>
                            </li>
                        </ul>
                        <a href="#">FOLLOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END BOOKING DETAILS -->

     <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Magnific popup JS -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Swipper Slider JS -->
    <script src="js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        if ($('.image-link').length) {
            $('.image-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
        if ($('.image-link2').length) {
            $('.image-link2').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
    </script>
