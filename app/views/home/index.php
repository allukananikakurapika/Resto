<div class="container text-center min-vh-100 d-flex flex-column">
    <div class="jumbotron mt-5">
        <h1 class="display-4 text-danger fw-bold fs-1 text-center">Roast The Taste</h1>
        <p class="lead fw-bold text-center">Welcome to <?=$data['nama'];?></p>
        <p class="px-3">Selamat Datang Di Website Makanan Cepat Saji dengan Sensasi Baru yang menggugah Selera Makan Anda</p>
    </div>
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide mb-4 mb-sm-5" data-bs-ride="carousel" data-bs-interval="2500">
        <!-- Indicators/dots -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
        </ol>
        <!-- Carousel inner -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="<?=BASEURL;?>/image/f1.jpg" class="d-block w-100 img-fluid" alt="Slide 1">
                <div class="carousel-caption d-block">
                    <h5 class="d-none d-sm-block">PAKET 1</h5>
                    <p class="d-none d-sm-block">BEEF KARL BURGER</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="<?=BASEURL;?>/image/f2.jpg" class="d-block w-100 img-fluid" alt="Slide 2">
                <div class="carousel-caption d-block">
                    <h5 class="d-none d-sm-block">PAKET 2</h5>
                    <p class="d-none d-sm-block">AVOCADO FIESTA HOTDOG</p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="<?=BASEURL;?>/image/f3.jpg" class="d-block w-100 img-fluid" alt="Slide 3">
                <div class="carousel-caption d-block">
                    <h5 class="d-none d-sm-block">PAKET 3</h5>
                    <p class="d-none d-sm-block">FRENCH FRIES PARMESAN</p>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="carousel-item">
                <img src="<?=BASEURL;?>/image/d1.jpg" class="d-block w-100 img-fluid" alt="Slide 4">
                <div class="carousel-caption d-block">
                    <h5 class="d-none d-sm-block">New Comer </h5>
                    <p class="d-none d-sm-block">LIME MOJITO</p>
                </div>
            </div>
        </div>

        <!-- Carousel Navigation Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev" style="background: rgba(0,0,0,0.5); width: 40px; height: 40px; border-radius: 50%; margin: auto 10px;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next" style="background: rgba(0,0,0,0.5); width: 40px; height: 40px; border-radius: 50%; margin: auto 10px;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- <div class="container px-4 mt-3 mt-sm-4 mt-md-5"> -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 justify-content-center">
            <div class="col">
                <div class="card h-100">
                    <img src="<?=BASEURL;?>/image/f1r.jpg" class="card-img-top"></img>
                    <div class="card-body">
                        <h5 class="card-title">BEEF KARL BURGER</h5>
                        <p class="card-text"> Beef Karl Burger ini merupakan sajian yang menggugah selera,<br>
                            <span>erdiri dari patty daging sapi panggang yang juicy, dilapisi dengan keju leleh,  potongan selada segar,</span><span>
                            dan disajikan dalam roti yang lembut, lengkap dengan kentang goreng renyah di sampingnya.
                            </span></p>
                        <a href="<?=BASEURL;?>/produk" class="btn btn-primary">See Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="<?=BASEURL;?>/image/f2r.jpg" class="card-img-top"></img>
                    <div class="card-body">
                        <h5 class="card-title">AVOCADO FIESTA HOTDOG</h5>
                        <p class="card-text">Avocado Fiesta Hot Dog ini adalah hot dog unik yang dipenuhi topping alpukat segar,
                            <span>potongan tomat, bawang cincang, dan jamur yang lembut. Disajikan dengan kentang wedges
                            berbumbu di sampingnya, makanan ini semakin lezat dengan tambahan saus keju creamy.</span></p>
                        <a href="<?=BASEURL;?>/produk" class="btn btn-primary">See Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="<?=BASEURL;?>/image/f3r.jpg" class="card-img-top"></img>
                    <div class="card-body">
                        <h5 class="card-title">FRENCH FRIES PARMESAN</h5>
                        <p class="card-text">French Fries Parmesan ini adalah kentang goreng yang disajikan dengan taburan keju parmesan dan potongan daun peterseli segar di atasnya,
                            memberikan rasa gurih dan aroma yang menggugah selera.</p>
                        <a href="<?=BASEURL;?>/produk" class="btn btn-primary">See Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="<?=BASEURL;?>/image/f4r.jpg" class="card-img-top"></img>
                    <div class="card-body">
                        <h5 class="card-title">LIME MOJITO</h5>
                        <p class="card-text">Lime Mojito ini adalah minuman segar yang terbuat dari campuran air soda,
                            perasan jeruk nipis, daun mint, dan es batu. Minuman ini memberikan sensasi kesegaran yang ideal untuk melepas dahaga.</p>
                        <a href="<?=BASEURL;?>/produk" class="btn btn-primary">See Detail</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
</div>


<!-- Bootstrap JS and dependencies (Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
