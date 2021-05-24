
<?php
    $activePage = "gallery.php";
    include('layouts/header.php');
?>
<div class="htc__product__area gray-bg area">
    <div class="container head">
        <div class="row pt-1">
            <div class="col-md-6">
                <h2>Galery List</h2>
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
            <div class="col-md-3">
                <div class="our-blog-tag" style="background: white;padding: 12px 15px;border: 1px solid #efefef; margin-top: 0px;">
                    <h3 class="section-title-2">Upload</h3>
                    <button class="btn btn-primary btn-primary-outline btn-flat mt-2"><i class="zmdi zmdi-upload"></i> Upload Your Event</button>
                </div>
                <div class="our-category-area " style="background: white;padding: 12px 15px;border: 1px solid #efefef;  margin-top: 20px">
                    <h3 class="section-title-2">Filter</h3>
                    <ul class="categore-menu">
                        <li><input type="text" name="filter" class="form-control" placeholder="Enter keyword"></li>
                    </ul>
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

            <div class="col-md-9">
                <div class="our-recent-post-wrap" style="max-height: 900px;">
                    <div class="blog__wrap blog--page clearfix">
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="#">
                                            <img src="images/galery/4.jpg" alt="blog images" style="height: 490px;">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="#">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Sekar</a></li>
                                                <li>Anak Gunung</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="#">
                                            <img src="images/galery/1.jpg" alt="blog images" style="height: 230px;">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="#">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Sekar</a></li>
                                                <li>Anak Gunung</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo" data-sr-id="2" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="#">
                                            <img src="images/galery/3.jpg" alt="blog images" style="height: 230px;">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="#">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Siti</a></li>
                                                <li>Mantai</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="#">
                                            <img src="images/galery/5.jpg" alt="blog images" style="height: 230px;">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="#">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Sekar</a></li>
                                                <li>Nyurug</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="#">
                                            <img src="images/galery/6.jpeg" alt="blog images" style="height: 230px;">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="#">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Sekar</a></li>
                                                <li>NgeGoa</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="#">
                                            <img src="images/galery/7.jpg" alt="blog images" style="height: 230px;">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="#">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Sekar</a></li>
                                                <li>NgeGoa</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="#">
                                            <img src="images/galery/8.jpg" alt="blog images"  style="height: 230px;">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="#">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Sekar</a></li>
                                                <li>NgeGoa</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="#">
                                            <img src="images/galery/9.jpg" alt="blog images" style="height: 230px;">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="#">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Sekar</a></li>
                                                <li>NgeGoa</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="#">
                                            <img src="images/galery/3.jpg" alt="blog images" style="height: 230px;">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="#">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Sekar</a></li>
                                                <li>NgeGoa</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="#">
                                            <img src="images/blog/blog-img/1.jpg" alt="blog images" style="height: 230px;">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="#">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Sekar</a></li>
                                                <li>NgeGoa</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="#">
                                            <img src="images/blog/blog-img/1.jpg" alt="blog images" style="height: 230px;">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="#">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Sekar</a></li>
                                                <li>NgeGoa</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="#">
                                            <img src="images/blog/blog-img/1.jpg" alt="blog images" style="height: 230px;">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="#">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Sekar</a></li>
                                                <li>NgeGoa</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo" data-sr-id="3" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="#">
                                            <img src="images/blog/blog-img/3.jpg" alt="blog images" style="height: 230px;">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="#">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Sagita</a></li>
                                                <li>Camcer</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="#">Details</a>
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
    </div>
</div>

   
<?php
    include('layouts/footer.php');
?>
       