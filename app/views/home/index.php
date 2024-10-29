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
                    <h5 class="d-none d-sm-block">Slide 1</h5>
                    <p class="d-none d-sm-block">Description for slide 1.</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="<?=BASEURL;?>/image/f2.jpg" class="d-block w-100 img-fluid" alt="Slide 2">
                <div class="carousel-caption d-block">
                    <h5 class="d-none d-sm-block">Slide 2</h5>
                    <p class="d-none d-sm-block">Description for slide 2.</p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="<?=BASEURL;?>/image/f3.jpg" class="d-block w-100 img-fluid" alt="Slide 3">
                <div class="carousel-caption d-block">
                    <h5 class="d-none d-sm-block">Slide 3</h5>
                    <p class="d-none d-sm-block">Description for slide 3.</p>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="carousel-item">
                <img src="<?=BASEURL;?>/image/d1.jpg" class="d-block w-100 img-fluid" alt="Slide 4">
                <div class="carousel-caption d-block">
                    <h5 class="d-none d-sm-block">Slide 4</h5>
                    <p class="d-none d-sm-block">Description for slide 4.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container px-4 mt-3 mt-sm-4 mt-md-5"> -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 justify-content-center">
            <div class="col">
                <div class="card h-100">
                    <video src="<?=BASEURL;?>/image/8.mp4" class="card-img-top" autoplay muted loop></video>
                    <div class="card-body">
                        <h5 class="card-title">Naren Jatuh Cinta</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="<?=BASEURL;?>/about" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <video src="<?=BASEURL;?>/image/7.mp4" class="card-img-top" autoplay muted loop></video>
                    <div class="card-body">
                        <h5 class="card-title">Naren Jatuh Cinta</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <video src="<?=BASEURL;?>/image/6.mp4" class="card-img-top" autoplay muted loop></video>
                    <div class="card-body">
                        <h5 class="card-title">Naren Jatuh Cinta</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <video src="<?=BASEURL;?>/image/5.mp4" class="card-img-top" autoplay muted loop></video>
                    <div class="card-body">
                        <h5 class="card-title">Naren Jatuh Cinta</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
</div>


<!-- Bootstrap JS and dependencies (Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
