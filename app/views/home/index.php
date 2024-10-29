<div class="container text-center">
    <div class="jumbotron mt-5">
        <h1 class="display-4 text-danger fw-bold fs-1 text-center">Roast The Taste</h1>
    <p class="lead fw-bold text-center">Welcome to <?= $data ['nama'];?></p>
    <!-- <hr class="my-2"> -->
        <p>Selamat Datang Di Website Makanan Cepat Saji dengan Sensasi Baru yang menggugah Selera Makan Anda</p>
</div>
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
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
            <img src="<?=BASEURL;?>/image/f1.jpg" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 1</h5>
                <p>Description for slide 1.</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="<?=BASEURL;?>/image/f2.jpg"  class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 2</h5>
                <p>Description for slide 2.</p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="<?=BASEURL;?>/image/f3.jpg" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 3</h5>
                <p>Description for slide 3.</p>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item">
            <img src="<?=BASEURL;?>/image/d1.jpg" class="d-block w-100" alt="Slide 4">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 4</h5>
                <p>Description for slide 4.</p>
            </div>
        </div>
    </div>


</div>
<!-- Bootstrap JS and dependencies (Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


