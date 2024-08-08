


<?php require_once"connection.php";
$_SESSION['page']="about";
?>

<!DOCTYPE html>
<html lang="zxx">

<link rel="stylesheet" href="./css/about.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<?php require_once"head.php"; ?>
 
<body>
    <!-- Loading -->
    <div class="loading">
        <div class="text-center middle">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    
    <?php require_once"menu.php";?>
    
    <!-- Header Banner -->

    <?php require_once"subheader.php"?>

    <!--  About -->
    <section class="section-padding mt-30 mb-30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-7 mb-60">
                            <div class="row">
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInUp"> <span class="line-one"></span> </div>
                                <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                                    <h6>YouShine Studio is a photography agency. YouShine Studio makes creative photography shoots.</h6>
                                    <p>Vestibulum at scelerisque tellus. Mauris consequat, nibh varius interdum tempus, massa odio venenatis turpis, non iaculis nisi mi a sem. Cras sagittis enim sit amet nisi malesuada pellentesque. Etiam consequat ac lacus at condimentum.</p>
                                    <p>Quality sagittis enim sit amet nisi malesuada pellentesque. Etiam consequat ac lacus at condimentum.</p>
                                    <p>Cras commodo sodales ex, non consequat lacus dapibus sed. Suspendisse non laoreet nulla. Aliquam ultrices metus ac purus porta, a aliquam ante mattis. Proin in odio ultrices massa ultricies convallis id id erat.</p> <img src="img/sign.png" class="sign" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 animate-box" data-animate-effect="fadeInUp">
                            <div class="Florenceto-about-img">
                                <div class="img"> <img src="img/about.jpg" alt=""> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <div class="testimonails bg-img section-padding" data-overlay-light="7" data-background="img/1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center over  mt-30 mb-30">
                    <div class="owl-carousel owl-theme">
                        <div class="citem">
                            <div class="client-img"> <img src="img/team/t3.jpg" alt=""> </div>
                            <h5>Freida & Pablo</h5>
                            <h6>Wedding Shooting</h6>
                            <p>Fusce blandit leo quis nulla congue dictum a ac nulla. Mauris a turpis id ligula auctor mattis. Suspendisse purus the justo hendrerit posuere lacinia dui. Nam lorem risus vel turpis pretium dignissim fermentum enim.</p>
                        </div>
                        <div class="citem">
                            <div class="client-img"> <img src="img/team/t1.jpg" alt=""> </div>
                            <h5>Olivia & Enrico</h5>
                            <h6>Wedding Shooting</h6>
                            <p>Fusce blandit leo quis nulla congue dictum a ac nulla. Mauris a turpis id ligula auctor mattis. Suspendisse purus the justo hendrerit posuere lacinia dui. Nam lorem risus vel turpis pretium dignissim fermentum enim.</p>
                        </div>
                        <div class="citem">
                            <div class="client-img"> <img src="img/team/t2.jpg" alt=""> </div>
                            <h5>Eleanor & Stefano</h5>
                            <h6>Wedding Shooting</h6>
                            <p>Fusce blandit leo quis nulla congue dictum a ac nulla. Mauris a turpis id ligula auctor mattis. Suspendisse purus the justo hendrerit posuere lacinia dui. Nam lorem risus vel turpis pretium dignissim fermentum enim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team -->
    <!-- <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30">
                    <span class="section-subtitle">Senior</span>
                    <h2 class="section-title">Our Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme animate-box" data-animate-effect="fadeInUp">
                    <div class="item">
                        <div class="img"> <img src="#" alt="Photo-1"> </div>
                        <div class="info">
                            <h6>Darshan Chabhadiya</h6>
                            <p>Web Devloper</p>
                            <div class="social valign">
                                <div class="full-width">
                                    <p>dikpatel38@gmail.com</p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="#" alt="Photo-2"> </div>
                        <div class="info">
                            <h6>Nency Gorasiya</h6>
                            <p>Web Designer</p>
                            <div class="social valign">
                                <div class="full-width">
                                    <p>nencygorasiya@gmail.com</p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="img/team/savanjpg" alt="Photo-3"> </div>
                        <div class="info">
                            <h6>Kirti Devani</h6>
                            <p>Web Designer</p>
                            <div class="social valign">
                                <div class="full-width">
                                    <p>kirtidevani@gmail.com</p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="card">
            <div class="card__circle card__circle1"></div>
            <div class="card__circle card__circle2"></div>

            <div class="card__container bd-container">
                <div class="card__glass">
                    <img src="./img/team/Dik-1.jpg" alt="" class="card__img">
    
                    <div class="card__data">
                        <h3 class="card__title">Darshan Chabhadiya</h3>
                        <span class="card__profession">Web Developer & Desiner</span>
                    </div>

                    <a href="./cv/Darshan Cv.pdf" target="_blank" class="card__button">Know more</a>
                    
                    <div class="card__social">
                        <a href="https://www.instagram.com/_dik_patel_1347_/" target="_blank" class="card__link"><i class='bx bxl-instagram' ></i></a>
                        <a href="https://www.facebook.com/darshan.chabhadiya.5/" target="_blank"class="card__link"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.twitter.com/AlphaDiks/" target="_blank" class="card__link"><i class='bx bxl-twitter' ></i></a>
                        <a href="https://wa.me/+917041859584/" target="_blank" class="card__link"><i class='bx bxl-whatsapp' ></i></a>
                    </div>
                </div>
    
                <div class="card__glass">
                    <img src="./img/team/nency.jpg" alt="" class="card__img">
    
                    <div class="card__data">
                        <h3 class="card__title">Nency Gorasiya</h3>
                        <span class="card__profession">Web Devloper</span>
                    </div>

                    <a href="#" class="card__button">Know more</a>
    
                    <div class="card__social">
                        <a href="#" class="card__link"><i class='bx bxl-instagram' ></i></a>
                        <a href="#" class="card__link"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="card__link"><i class='bx bxl-twitter' ></i></a>
                        <a href="#" target="_blank" class="card__link"><i class='bx bxl-whatsapp' ></i></a>
                    </div>
                </div>
    
                <div class="card__glass">
                    <img src="./img/team/kirti.jpg" alt="" class="card__img">
    
                    <div class="card__data">
                        <h3 class="card__title">Kirti Devani</h3>
                        <span class="card__profession">Web Devloper</span>
                    </div>

                    <a href="#" class="card__button">Know more</a>
    
                    <div class="card__social">
                        <a href="#" class="card__link"><i class='bx bxl-instagram' ></i></a>
                        <a href="#" class="card__link"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="card__link"><i class='bx bxl-twitter' ></i></a>
                        <a href="#" target="_blank" class="card__link"><i class='bx bxl-whatsapp' ></i></a>
                    </div>
                </div>
            </div>
        </section>

    <?php require_once"footer.php";?>

    <?php require_once"script.php"; ?>
</body>

<!-- Mirrored from duruthemes.com/demo/html/Florence/light/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jan 2021 10:04:19 GMT -->
</html>