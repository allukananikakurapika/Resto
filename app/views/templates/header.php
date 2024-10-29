<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'];?></title>
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<header class="p-3 text-bg-warning">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-between">
      <!-- Logo dan Teks Rostic di sebelah kiri -->
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        <span class="nav-link px-2 text-danger fw-bold fs-4">Rostic</span>
      </a>

      <!-- Menu di sebelah kanan -->
      <ul class="nav col-12 col-lg-auto mb-2 justify-content-center mb-md-0 ms-auto">
        <li><a href="<?= BASEURL; ?>" class="nav-link px-2 text-dark fw-bold fs-6"><i class="bi bi-house-door-fill"></i>Home</a></li>
        <li><a href="<?= BASEURL;?>/Produk" class="nav-link px-2 text-dark fw-bold fs-6"><i class="bi bi-basket-fill"></i>Product</a></li>
        <li><a href="<?= BASEURL;?>/About" class="nav-link px-2 text-dark fw-bold fs-6"><i class="bi bi-person-rolodex"></i>About</a></li>
      </ul>
    </div>
  </div>
</header>


      