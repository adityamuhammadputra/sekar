
<?php
    $activePage = "event.php";
    include('layouts/header.php');
?>
<div class="htc__product__area gray-bg area">
    <div class="container head">
        <div class="row pt-1" style="margin-bottom: 20px;">
            <div class="col-md-6">
                <h2>Event Detail </h2>
            </div>
            <div class="col-md-2 col-md-offset-4 text-right">
                <a href="/event.php" class="btn btn-default">
                    <i class="zmdi zmdi-arrow-left"></i> Back
                </a>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="product__details__container">
                    <!-- Start Small images -->
                    <ul class="product__small__images" role="tablist">
                        <li role="presentation" class="pot-small-img active">
                            <a href="#img-tab-1" role="tab" data-toggle="tab">
                                <img src="images/event/gede2.jpg" alt="small-image">
                            </a>
                        </li>
                        <li role="presentation" class="pot-small-img">
                            <a href="#img-tab-2" role="tab" data-toggle="tab">
                                <img src="images/event/gede3.jpg" alt="small-image">
                            </a>
                        </li>
                    </ul>
                    <!-- End Small images -->
                    <div class="product__big__images">
                        <div class="portfolio-full-image tab-content">
                            <div role="tabpanel" class="tab-pane fade in active product-video-position" id="img-tab-1">
                                <img src="images/event/gede.jpg" alt="full-image" style="height: 265px;">
                                <div class="product-video">
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=WrdFF5BkXNY">
                                        <i class="zmdi zmdi-videocam"></i> View Video
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade product-video-position" id="img-tab-2">
                                <img src="images/product-details/big-img/12.jpg" alt="full-image">
                                <div class="product-video">
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=WrdFF5BkXNY">
                                        <i class="zmdi zmdi-videocam"></i> View Video
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade product-video-position" id="img-tab-3">
                                <img src="images/product-details/big-img/11.jpg" alt="full-image">
                                <div class="product-video">
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=WrdFF5BkXNY">
                                        <i class="zmdi zmdi-videocam"></i> View Video
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade product-video-position" id="img-tab-4">
                                <img src="images/product-details/big-img/12.jpg" alt="full-image">
                                <div class="product-video">
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=WrdFF5BkXNY">
                                        <i class="zmdi zmdi-videocam"></i> View Video
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
                <div class="htc__product__details__inner">
                    <div class="pro__detl__title">
                        <h2>Gunung Gede Pangrango</h2>
                    </div>
                    <div class="pro__dtl__rating">
                        <ul class="pro__rating">
                            <li><span class="zmdi zmdi-star star"></span></li>
                            <li><span class="zmdi zmdi-star star"></span></li>
                            <li><span class="zmdi zmdi-star star"></span></li>
                            <li><span class="zmdi zmdi-star star"></span></li>
                            <li><span class="zmdi zmdi-star star"></span></li>
                        </ul>
                        <span class="rat__qun">(Based on 5 Ratings)</span>
                    </div>
                    <div class="pro__details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temf incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostr exercitation ullamco laboris nisi ut aliquip ex ea. </p>
                    </div>
                    <ul class="pro__dtl__prize">
                        <li class="old__prize">Rp. 350.000</li>
                        <li>Rp. 250.000</li>
                    </ul>
                    <div class="product-action-wrap">
                        <div class="prodict-statas"><span>Quantity :</span></div>
                        <div class="product-quantity">
                            <form id="myform" method="POST" action="#">
                                <div class="product-quantity">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                    <div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <ul class="pro__dtl__btn">
                        <li class="buy__now__btn"><a href="#">Join now</a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li>Share: </li>
                        <li><a href="#"><i class="zmdi zmdi-whatsapp"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
   
</div>

<section class="htc__product__details__tab bg__white pb--120">
    <div class="container">
        <div class="row pt-1 mt-2">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <ul class="product__deatils__tab mb--60" role="tablist">
                    <li role="presentation" class="active pl-0">
                        <a href="#description" role="tab" data-toggle="tab" aria-expanded="true">Description</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#sheet" role="tab" data-toggle="tab" aria-expanded="false">Itinerary</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#reviews" role="tab" data-toggle="tab" aria-expanded="false">Reviews</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product__details__tab__content">
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="description" class="product__tab__content fade active in">
                        <div class="product__description__wrap">
                            <div class="product__desc">
                                <h2 class="title__6">Details</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis noexercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
                                <ul class="feature__list mt-2">
                                    <li><a href="#"><i class="zmdi zmdi-pin color-orange"></i>Meeting Point: <b>Terminal Kp. Rambutan</b></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-male-female color-orange"></i>Kuota: <b>10 Person, From 20 Person (50%)</b></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-calendar color-orange"></i>Date: <b>14 Sep s/d 15 Sep 2021 </b></a></li>
                                </ul>
                            </div>
                            <div class="pro__feature">
                                <h2 class="title__6">Include</h2>
                                <ul class="feature__list">
                                    <li><a href="#"><i class="zmdi zmdi-play-circle color-orange"></i>Lorem ipsum</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-play-circle color-orange"></i>Lorem ipsum</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-play-circle color-orange"></i>Lorem ipsum </a></li>
                                    <li><a href="#"><i class="zmdi zmdi-play-circle color-orange"></i>Lorem ipsum</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="sheet" class="product__tab__content fade">
                        <div class="pro__feature">
                                <h2 class="title__6">Itinerary Trip</h2>
                                <img src="/images/event/iventary.PNG">
                            </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="reviews" class="product__tab__content fade">
                        <div class="review__address__inner">
                            <!-- Start Single Review -->
                            <div class="pro__review">
                                <div class="review__thumb">
                                    <img src="images/review/1.jpg" alt="review images">
                                </div>
                                <div class="review__details">
                                    <div class="review__info">
                                        <h4><a href="#">Gerald Barnes</a></h4>
                                        <ul class="rating">
                                            <li><i class="zmdi zmdi-star"></i></li>
                                            <li><i class="zmdi zmdi-star"></i></li>
                                            <li><i class="zmdi zmdi-star"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                        </ul>
                                        <div class="rating__send">
                                            <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                            <a href="#"><i class="zmdi zmdi-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="review__date">
                                        <span>27 Jun, 2016 at 2:30pm</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                </div>
                            </div>
                            <!-- End Single Review -->
                            <!-- Start Single Review -->
                            <div class="pro__review ans">
                                <div class="review__thumb">
                                    <img src="images/review/2.jpg" alt="review images">
                                </div>
                                <div class="review__details">
                                    <div class="review__info">
                                        <h4><a href="#">Gerald Barnes</a></h4>
                                        <ul class="rating">
                                            <li><i class="zmdi zmdi-star"></i></li>
                                            <li><i class="zmdi zmdi-star"></i></li>
                                            <li><i class="zmdi zmdi-star"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                        </ul>
                                        <div class="rating__send">
                                            <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                            <a href="#"><i class="zmdi zmdi-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="review__date">
                                        <span>27 Jun, 2016 at 2:30pm</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                </div>
                            </div>
                            <!-- End Single Review -->
                        </div>
                        <!-- Start RAting Area -->
                        <div class="rating__wrap">
                            <h2 class="rating-title">Write  A review</h2>
                            <h4 class="rating-title-2">Your Rating</h4>
                            <div class="rating__list">
                                <!-- Start Single List -->
                                <ul class="rating">
                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                </ul>
                                <!-- End Single List -->
                                <!-- Start Single List -->
                                <ul class="rating">
                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                </ul>
                                <!-- End Single List -->
                                <!-- Start Single List -->
                                <ul class="rating">
                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                </ul>
                                <!-- End Single List -->
                                <!-- Start Single List -->
                                <ul class="rating">
                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                </ul>
                                <!-- End Single List -->
                                <!-- Start Single List -->
                                <ul class="rating">
                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                </ul>
                                <!-- End Single List -->
                            </div>
                        </div>
                        <!-- End RAting Area -->
                        <div class="review__box">
                            <form id="review-form">
                                <div class="single-review-form">
                                    <div class="review-box name">
                                        <input type="text" placeholder="Type your name">
                                        <input type="email" placeholder="Type your email">
                                    </div>
                                </div>
                                <div class="single-review-form">
                                    <div class="review-box message">
                                        <textarea placeholder="Write your review"></textarea>
                                    </div>
                                </div>
                                <div class="review-btn">
                                    <a class="fv-btn" href="#">submit review</a>
                                </div>
                            </form>                                
                        </div>
                    </div>
                    <!-- End Single Content -->
                </div>
            </div>
        </div>
    </div>
</section>
   
<?php
    include('layouts/footer.php');
?>
       