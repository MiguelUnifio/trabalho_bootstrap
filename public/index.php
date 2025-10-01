<?php
include __DIR__ . '/includes/page-top.php';
?>

<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/img1.webp" class="d-block w-100" alt="Slide 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Linkin Park</h5>
        <p>Nova formação</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/img1.webp" class="d-block w-100" alt="Slide 2">
      <div class="carousel-caption d-none d-md-block">
          <h5>Linkin Park</h5>
        <p>Nova formação</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/img1.webp" class="d-block w-100" alt="Slide 3">
      <div class="carousel-caption d-none d-md-block">
         <h5>Linkin Park</h5>
        <p>Nova formação</p>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>


<section class="container my-5">
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card h-100">
        <img src="/img/wpp1.jpg" class="card-img-top" alt="Destaque 1">
        <div class="card-body">
          <h5 class="card-title">Discografia</h5>
          <p class="card-text">Conheça a discografia da Banda</p>
          <a href="discografia.php" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <img src="/img/fromzero.png" class="card-img-top" alt="Destaque 2">
        <div class="card-body">
          <h5 class="card-title">From Zero</h5>
          <p class="card-text">Conheça o novo album da banda com sua nova formação e Emily Armstrong estreando nos vocais.</p>
          <a href="https://music.youtube.com/playlist?list=OLAK5uy_miCUHAHUPqc21dc-Vs7KTxbbqqzFCl68c" class="btn btn-primary" target="_blank">Saiba mais</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <img src="/img/emily.jpg" class="card-img-top" alt="Destaque 3">
        <div class="card-body">
          <h5 class="card-title">Emily Armstrong</h5>
          <p class="card-text">Conheça a nova vocalista do Linkin Park.</p>
          <a href="https://pt.wikipedia.org/wiki/Emily_Armstrong" class="btn btn-primary" target="_blank">Saiba mais</a>
        </div>
      </div>
    </div>
  </div>
</section>




<?php
include __DIR__ . '/includes/page-bottom.php';
?>
