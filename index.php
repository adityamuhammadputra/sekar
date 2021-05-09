
<?php
    include('layouts/header.php');
?>
    <div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url(images/banner2.jpg) no-repeat scroll center center / cover ;">
        <div class="container">
            
            <div class="row">
                <div class="text-head">
                    <h1>Berwisata dengan kearifan lokal itu menyenangkan</h1>
                    <h2>Dapatkan Pengalaman kamu disini</h2>
                </div>
            </div>
            <!-- Start Login Register Content -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="htc__login__register__wrap">
                        <!-- Start Single Content -->
                        <div id="register" role="tabpanel" class="single__tabs__panel tab-pane fade active in">
                            <h3> Bergabung dengan Email </h3>
                            <form class="login" method="post">
                                <div class="field">
                                    <input type="text" name="name" id="name" placeholder="Masukan Nama">
                                    <label for="name">Nama *</label>
                                </div>
                                <div class="field">
                                    <input type="email" name="email" id="email" placeholder="Masukan Email">
                                    <label for="email">Email *</label>
                                </div>
                                <div class="field">
                                    <input type="password" name="password" id="password" placeholder="Masukan Password">
                                    <label for="password">Password *</label>
                                </div>
                                <br>
                            </form>
                            <div class="tabs__checkbox">
                                <input type="checkbox">
                                <span> Ingatkan saya</span>
                                <h4 class="pull-right pt-1">Sudah punya akun? <a href="#" class="text-primary"><u>Login</u></a></h2>
                            </div>
                            <div class="htc__login__btn">
                                <a href="#" class="btn btn-primary-2 btn-primary-2-outlet">Bergabung</a>
                            </div>
                            <div class="htc__social__connect">
                                <h2 class="separator">Atau bergabung dengan</h2>
                                <ul class="htc__soaial__list">
                                    <li><a class="bg--facebook" href="#"><i class="zmdi zmdi-facebook"></i> Facebook</a></li>
                                    <li><a class="bg--googleplus" href="#"><i class="zmdi zmdi-google-plus"></i> Google</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
            <!-- End Login Register Content -->
        </div>
    </div>
<?php
    include('layouts/footer.php');
?>
       