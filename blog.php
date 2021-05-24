
<?php
    $activePage = "blog.php";
    include('layouts/header.php');
?>
<div class="htc__product__area gray-bg area">
    <div class="container">
    <div class="row pt-1 head">
            <div class="col-md-6">
                <h2>Stories List</h2>
            </div>
            <div class="col-md-2 col-md-offset-4 text-right">
                <select class="select-filter">
                    <option>Terbaru</option>
                    <option>Terpopuler</option>
                </select>
                <i class="zmdi zmdi-sort select-filter-icon"></i>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 smt-30 xmt-40">
                <div class="blod-details-right-sidebar">

                    <div class="our-blog-tag" style="background: white;padding: 12px 15px;border: 1px solid #efefef; margin-top: 0px;">
                        <h3 class="section-title-2"> Start Stories</h3>
                        <button class="btn btn-primary btn-primary-outline btn-flat mt-2"><i class="zmdi zmdi-plus"></i> Create Stories</button>
                    </div>

                    <div class="our-category-area " style="background: white;padding: 12px 15px;border: 1px solid #efefef;  margin-top: 20px">
                        <h3 class="section-title-2">Filter</h3>
                        <ul class="categore-menu">
                            <li><input type="text" name="filter" class="form-control" placeholder="Enter keyword"></li>
                        </ul>
                    </div>
                    <!-- End Category Area -->
                    
                    <!-- Start Letaest Blog Area -->
                    <div class="our-recent-post" style="background: white;padding: 12px 15px;border: 1px solid #efefef;  margin-top: 20px">
                        <h2 class="section-title-2 mb-2">Popular Post</h2>
                        <div class="our-recent-post-wrap">
                            <!-- Start Single Post -->
                            <div class="single-recent-post">
                                <div class="recent-thumb recent-thumb-blog">
                                    <a href="blog-detail.php"><img src="images/blog/4.jpeg" alt="post images"></a>
                                </div>
                                <div class="recent-details">
                                    <div class="recent-post-dtl">
                                        <h6><a href="blog-detail.php">Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed ...</a></h6>
                                    </div>
                                    <div class="recent-post-time" style="width: 100%;">
                                        <p><i class="zmdi zmdi-star star color-orange"></i> 4.9</p>
                                        <p class="separator">|</p>
                                        <p><i class="zmdi zmdi-comments"></i> 153</p>
                                    </div>
                                    <div class="recent-post-time">
                                        <p>14 Sep 2021</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Post -->
                            <!-- Start Single Post -->
                            <div class="single-recent-post">
                                <div class="recent-thumb recent-thumb-blog">
                                    <a href="blog-detail.php"><img src="images/blog/5.jpg" alt="post images"></a>
                                </div>
                                <div class="recent-details">
                                    <div class="recent-post-dtl">
                                        <h6><a href="blog-detail.php">Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do.</a></h6>
                                    </div>
                                    <div class="recent-post-time" style="width: 100%;">
                                        <p><i class="zmdi zmdi-star star color-orange"></i> 4.7</p>
                                        <p class="separator">|</p>
                                        <p><i class="zmdi zmdi-comments"></i> 111</p>
                                    </div>
                                    <div class="recent-post-time">
                                        <p>10 Sep 2021</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Post -->
                            <!-- Start Single Post -->
                            <div class="single-recent-post">
                                <div class="recent-thumb recent-thumb-blog">
                                    <a href="blog-detail.php"><img src="images/blog/6.jpg" alt="post images"></a>
                                </div>
                                <div class="recent-details">
                                    <div class="recent-post-dtl">
                                        <h6><a href="blog-detail.php">Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do.</a></h6>
                                    </div>
                                    <div class="recent-post-time" style="width: 100%;">
                                        <p><i class="zmdi zmdi-star star color-orange"></i> 4.6</p>
                                        <p class="separator">|</p>
                                        <p><i class="zmdi zmdi-comments"></i> 105</p>
                                    </div>
                                    <div class="recent-post-time">
                                        <p>10 Sep 2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="our-blog-tag" style="background: white;padding: 12px 15px;border: 1px solid #efefef; margin-top: 20px;">
                        <h3 class="section-title-2">Trending</h3>
                        <ul class="tag-menu" style="margin-top: 20px;">
                            <li><a href="#">Anak Gunung  <span class="badge badge-tranding">111020</span> </a></li>
                            <li><a href="#">Mantai <span class="badge badge-tranding">21220</span></a></li>
                            <li><a href="#">Nyurug <span class="badge badge-tranding">10020</span></a></li>
                            <li><a href="#">Campcer <span class="badge badge-tranding">2010</span></a></li>
                            <li><a href="#">Snorkeling<span class="badge badge-tranding">1020</span></a></li>
                            <li><a href="#">NgeGoa <span class="badge badge-tranding">820</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                <div class="blog-details-left-sidebar our-recent-post-wrap" style="max-height:900px;">
                    <div class="blog-details-top fisrt">
                        <!--Start Blog Thumb -->
                        <div class="blog-details-thumb-wrap">
                            <div class="blog-details-thumb">
                                <img src="images/blog/1.jpg" alt="blog images">
                            </div>
                            <div class="upcoming-date">
                                10<span class="upc-mth">Sep,2021</span>
                            </div>
                        </div>
                        <!--End Blog Thumb -->
                        <h2 class="color-blue">It's an old fact that travelers will do</h2>
                        <div class="blog-admin-and-comment">
                            <p>By : <a href="#">Sekar</a></p>
                            <p class="separator">|</p>
                            <p><i class="zmdi zmdi-star star color-orange"></i> 4.9</p>
                            <p class="separator">|</p>
                            <p><i class="zmdi zmdi-comments star"></i> 13</p>
                        </div>
                        <!-- Start Blog Pra -->
                        <div class="blog-details-pra">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore d aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conse Duis aute irure dolor in reprehenderit in voluptate velit esse...</p>
                        </div>
                    </div>

                    <div class="blog-details-top">
                        <!--Start Blog Thumb -->
                        <div class="blog-details-thumb-wrap">
                            <div class="blog-details-thumb">
                                <img src="images/blog/2.jpg" alt="blog images">
                            </div>
                            <div class="upcoming-date">
                                11<span class="upc-mth">Sep,2021</span>
                            </div>
                        </div>
                        <!--End Blog Thumb -->
                        <h2 class="color-blue">do It's an old fact that travelers will</h2>
                        <div class="blog-admin-and-comment">
                            <p>By : <a href="#">Sagita</a></p>
                            <p class="separator">|</p>
                            <p><i class="zmdi zmdi-star star color-orange"></i> 4.9</p>
                            <p class="separator">|</p>
                            <p><i class="zmdi zmdi-comments star"></i> 13</p>
                        </div>
                        <!-- Start Blog Pra -->
                        <div class="blog-details-pra">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore d aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conse Duis aute irure dolor in reprehenderit in voluptate velit esse...</p>
                        </div>
                    </div>

                    <div class="blog-details-top">
                        <!--Start Blog Thumb -->
                        <div class="blog-details-thumb-wrap">
                            <div class="blog-details-thumb">
                                <img src="images/blog/3.png" alt="blog images">
                            </div>
                            <div class="upcoming-date">
                                14<span class="upc-mth">Sep,2021</span>
                            </div>
                        </div>
                        <!--End Blog Thumb -->
                        <h2 class="color-blue">Will do it's an old fact that travelers</h2>
                        <div class="blog-admin-and-comment">
                            <p>By : <a href="#">Siti</a></p>
                            <p class="separator">|</p>
                            <p><i class="zmdi zmdi-star star color-orange"></i> 4.9</p>
                            <p class="separator">|</p>
                            <p><i class="zmdi zmdi-comments star"></i> 13</p>
                        </div>
                        <!-- Start Blog Pra -->
                        <div class="blog-details-pra">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore d aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conse Duis aute irure dolor in reprehenderit in voluptate velit esse...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   
<?php
    include('layouts/footer.php');
?>
       