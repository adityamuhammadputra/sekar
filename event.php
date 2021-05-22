
<?php
    $activePage = "event.php";
    include('layouts/header.php');
?>
<div class="htc__product__area gray-bg area">
    <div class="container head">
        <div class="row pt-1">
            <div class="col-md-6">
                <h2>Daftar Event</h2>
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
                <div class="our-category-area " style="background: white;padding: 12px 15px;border: 1px solid #efefef;">
                    <h3 class="section-title-2">Filter</h3>
                    <ul class="categore-menu">
                        <li><input type="text" name="filter" class="form-control" placeholder="Enter keyword"></li>
                        <li><a href="#"><i class="zmdi zmdi-caret-right"></i>Type Trip</a></li>
                        <li><a href="#"><i class="zmdi zmdi-caret-right"></i>Kategori</a></li>
                        <li><a href="#"><i class="zmdi zmdi-caret-right"></i>Meeting Point</a></li>
                        <li><a href="#"><i class="zmdi zmdi-caret-right"></i>Destinasi</a></li>
                        <li><a href="#"><i class="zmdi zmdi-caret-right"></i>Harga</a></li>
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
                <div class="our-recent-post-wrap">
                    <div class="single-recent-post">
                        <div class="recent-thumb">
                            <a href="blog-details.html"><img src="images/blog/sm-img/1.jpg" alt="post images" style="width: 110px;"></a>
                        </div>
                        <div class="recent-details">
                            <div class="recent-post-dtl">
                                <h6><a href="blog-details.html">Gunung Gede Pangrango</a></h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Suscipit incidunt ea tempore hic fuga earum obcaecati quod, repellat dolorum nam, in non aperiam dolore numquam animi officia velit omnis eveniet.
                                </p>
                            </div>
                            <div class="recent-post-time">
                                <p>14 SEP 2021 s/d 15 SEP 2021 </p>
                                <p class="separator">|</p>
                                <p>2D1N</p>
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
       