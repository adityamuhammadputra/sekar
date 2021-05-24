
<?php
    $activePage = "event.php";
    include('layouts/header.php');
?>
<div class="htc__product__area gray-bg area">
    <div class="container head">
        <div class="row pt-1">
            <div class="col-md-6">
                <h2>Event List</h2>
            </div>
            <div class="col-md-2 col-md-offset-4 text-right">
                <select class="select-filter">
                    <option>Terbaru</option>
                    <option>Termurah</option>
                    <option>Rating</option>
                    <option>Peserta</option>
                </select>
                <i class="zmdi zmdi-sort select-filter-icon"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="our-blog-tag" style="background: white;padding: 12px 15px;border: 1px solid #efefef; margin-top: 0px;">
                    <h3 class="section-title-2">Request</h3>
                    <button class="btn btn-primary btn-primary-outline btn-flat mt-2"><i class="zmdi zmdi-plus"></i> Create Event</button>
                </div>
                <div class="our-category-area " style="background: white;padding: 12px 15px;border: 1px solid #efefef;  margin-top: 20px">
                    <h3 class="section-title-2">Filter</h3>
                    <ul class="categore-menu">
                        <li><input type="text" name="filter" class="form-control" placeholder="Enter keyword"></li>
                        <li><a href="#"><i class="zmdi zmdi-caret-right"></i>Type Trip</a></li>
                        <li><a href="#"><i class="zmdi zmdi-caret-right"></i>Kategori</a></li>
                        <li><a href="#"><i class="zmdi zmdi-caret-right"></i>Meeting Point</a></li>
                        <li><a href="#"><i class="zmdi zmdi-caret-right"></i>Date</a></li>
                        <li style="border-bottom: unset;">
                            <a href="#"><i class="zmdi zmdi-caret-down"></i>Price</a>
                        </li>
                    </ul>
                    
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" class="form-control" value="100K">
                        </div>
                        <div class="col-md-2">
                            to
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" value="10.000K">
                        </div>
                        <div class="col-md-12 pt-1">
                            <input type="range" min="0" max="15000" value="10000">
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

            <div class="col-md-9">
                <div class="our-recent-post-wrap">
                    <div class="single-recent-post first">
                        <div class="recent-thumb">
                            <a href="event-gede-pangrango.php" class="title"><img src="images/event/gede.jpg" alt="post images"></a>
                        </div>
                        <div class="recent-details">
                            <div class="recent-post-dtl">
                                <h6>
                                    <a href="event-gede-pangrango.php" class="title">Gunung Gede Pangrango</a>
                                    <a class="price"> Rp. 200.000</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Suscipit incidunt ea tempore hic fuga earum obcaecati quod, repellat dolorum nam, in non aperiam dolore numquam .... <br>
                                    Mepo <u><b>Terminal kampung Rambutan, Jakarta</b></u>
                                </p>
                            </div>
                            <div class="recent-post-time">
                                <p><i class="zmdi zmdi-star star"></i> 4.9</p>
                                <p class="separator">|</p>
                                <p>14 Sep s/d 15 Sep 2021 </p>
                                <p class="separator">|</p>
                                <p>10 P to 20 P</p>
                            </div>
                            <a href="event-gede-pangrango.php" class="btn btn-primary btn-primary-outline btn-flat btn-join">Join</a>
                        </div>
                    </div>

                    <div class="single-recent-post">
                        <div class="recent-thumb">
                            <a href="event-gede-pangrango.php" class="title"><img src="images/event/ora.jpeg" alt="post images"></a>
                        </div>
                        <div class="recent-details">
                            <div class="recent-post-dtl">
                                <h6>
                                    <a href="event-gede-pangrango.php" class="title">Pantai Ora</a>
                                    <a class="price"> Rp. 5.100.000</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Suscipit incidunt ea tempore hic fuga earum obcaecati quod, repellat dolorum nam, in non aperiam dolore numquam .... <br>
                                    Mepo <u><b>Bandara Soekarno Hatta, Cengkareng</b></u>
                                </p>
                            </div>
                            <div class="recent-post-time">
                                <p><i class="zmdi zmdi-star star"></i> 5</p>
                                <p class="separator">|</p>
                                <p>14 Sep s/d 15 Sep 2021 </p>
                                <p class="separator">|</p>
                                <p><i class="zmdi zmdi-lock"></i> Private</p>
                            </div>
                            <a href="event-gede-pangrango.php" class="btn btn-primary btn-primary-outline btn-flat btn-join">Join</a>
                        </div>
                    </div>

                    <div class="single-recent-post">
                        <div class="recent-thumb">
                            <a href="event-gede-pangrango.php" class="title"><img src="images/event/snowkeling.jpeg" alt="post images"></a>
                        </div>
                        <div class="recent-details">
                            <div class="recent-post-dtl">
                                <h6>
                                    <a href="event-gede-pangrango.php" class="title">Snorkeling Gili Traralala</a>
                                    <a class="price"> Rp. 3.200.000</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Suscipit incidunt ea tempore hic fuga earum obcaecati quod, repellat dolorum nam, in non aperiam dolore numquam .... <br>
                                    Mepo <u><b>Bandara Soekarno Hatta, Cengkareng</b></u>
                                </p>
                            </div>
                            <div class="recent-post-time">
                                <p><i class="zmdi zmdi-star star"></i> 5</p>
                                <p class="separator">|</p>
                                <p>14 Sep s/d 15 Sep 2021 </p>
                                <p class="separator">|</p>
                                <p>10 P to 20 P</p>
                            </div>
                            <a href="event-gede-pangrango.php" class="btn btn-primary btn-primary-outline btn-flat btn-join">Join</a>
                        </div>
                    </div>

                    <div class="single-recent-post">
                        <div class="recent-thumb">
                            <a href="event-gede-pangrango.php" class="title"><img src="images/event/air-terjun.jpeg" alt="post images"></a>
                        </div>
                        <div class="recent-details">
                            <div class="recent-post-dtl">
                                <h6>
                                    <a href="event-gede-pangrango.php" class="title">Curug Tumpak Sewu</a>
                                    <a class="price"> Rp. 1.200.000</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Suscipit incidunt ea tempore hic fuga earum obcaecati quod, repellat dolorum nam, in non aperiam dolore numquam .... <br>
                                    Mepo <u><b>St. Pasar Senen</b></u>
                                </p>
                            </div>
                            <div class="recent-post-time">
                                <p><i class="zmdi zmdi-star star"></i> 4.8</p>
                                <p class="separator">|</p>
                                <p>20 Des s/d 22 Des 2021 </p>
                                <p class="separator">|</p>
                                <p>30 P to 50 P</p>
                            </div>
                            <a href="event-gede-pangrango.php" class="btn btn-primary btn-primary-outline btn-flat btn-join">Join</a>
                        </div>
                    </div>

                    <div class="single-recent-post">
                        <div class="recent-thumb">
                            <a href="event-gede-pangrango.php" class="title"><img src="images/event/diving.jpg" alt="post images"></a>
                        </div>
                        <div class="recent-details">
                            <div class="recent-post-dtl">
                                <h6>
                                    <a href="event-gede-pangrango.php" class="title">Diving Bali</a>
                                    <a class="price"> Rp. 2.600.000</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Suscipit incidunt ea tempore hic fuga earum obcaecati quod, repellat dolorum nam, in non aperiam dolore numquam .... <br>
                                    Mepo <u><b>St. Pasar Senen</b></u>
                                </p>
                            </div>
                            <div class="recent-post-time">
                                <p><i class="zmdi zmdi-star star"></i> 5</p>
                                <p class="separator">|</p>
                                <p>20 Des s/d 22 Des 2021 </p>
                                <p class="separator">|</p>
                                <p><i class="zmdi zmdi-lock"></i> Private</p>
                            </div>
                            <a href="event-gede-pangrango.php" class="btn btn-primary btn-primary-outline btn-flat btn-join">Join</a>
                        </div>
                    </div>
                    
                    <div class="single-recent-post">
                        <div class="recent-thumb">
                            <a href="event-gede-pangrango.php" class="title"><img src="images/event/goa.jpg" alt="post images"></a>
                        </div>
                        <div class="recent-details">
                            <div class="recent-post-dtl">
                                <h6>
                                    <a href="event-gede-pangrango.php" class="title">Goa Panjang</a>
                                    <a class="price"> Rp. 1.600.000</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Suscipit incidunt ea tempore hic fuga earum obcaecati quod, repellat dolorum nam, in non aperiam dolore numquam .... <br>
                                    Mepo <u><b>Terminal Pasar Rebo</b></u>
                                </p>
                            </div>
                            <div class="recent-post-time">
                                <p><i class="zmdi zmdi-star star"></i> 5</p>
                                <p class="separator">|</p>
                                <p>20 Des s/d 22 Des 2021 </p>
                                <p class="separator">|</p>
                                <p>5 P to 10 P</p>
                            </div>
                            <a href="event-gede-pangrango.php" class="btn btn-primary btn-primary-outline btn-flat btn-join">Join</a>
                        </div>
                    </div>
                    
                    <div class="single-recent-post">
                        <div class="recent-thumb">
                            <a href="blog-details.html"><img src="images/blog/sm-img/1.jpg" alt="post images"></a>
                        </div>
                        <div class="recent-details">
                            <div class="recent-post-dtl">
                                <h6><a href="blog-details.html">1234</a></h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Suscipit incidunt ea tempore hic fuga earum obcaecati quod, repellat dolorum nam, in non aperiam dolore numquam animi officia velit omnis eveniet.
                                </p>
                            </div>
                            <div class="recent-post-time">
                                <p>14 Sep s/d 15 Sep 2021 </p>
                                <p class="separator">|</p>
                                <p>XXX</p>
                            </div>
                        </div>
                    </div>

                    <div class="single-recent-post">
                        <div class="recent-thumb">
                            <a href="blog-details.html"><img src="images/blog/sm-img/1.jpg" alt="post images"></a>
                        </div>
                        <div class="recent-details">
                            <div class="recent-post-dtl">
                                <h6><a href="blog-details.html">5679</a></h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Suscipit incidunt ea tempore hic fuga earum obcaecati quod, repellat dolorum nam, in non aperiam dolore numquam animi officia velit omnis eveniet.
                                </p>
                            </div>
                            <div class="recent-post-time">
                                <p>14 Sep s/d 15 Sep 2021 </p>
                                <p class="separator">|</p>
                                <p>XXX</p>
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
       