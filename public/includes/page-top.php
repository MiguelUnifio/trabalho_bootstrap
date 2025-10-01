<?php
// includes/page-top.php
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Linkin Park</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/default.css">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="../img/logo.png" width="70" height="70"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
              aria-controls="mainNavbar" aria-expanded="false" aria-label="Tog gle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#">Home Page</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="discografia.php" id="menuDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Discografia
            </a>
            <ul class="dropdown-menu" aria-labelledby="menuDropdown">
              <li><a class="dropdown-item" href="https://music.youtube.com/playlist?list=OLAK5uy_ncbxWnjKunOOgJ7N1XELrneNgiaMMPXxA&si=BWuAMSDl5l1kiGZz"target="_blank">Hybrid Theory</a></li>
              <li><a class="dropdown-item" href="https://music.youtube.com/playlist?list=OLAK5uy_nE-SkwNA6lYF99wd-MHzJVqThnUIJGe3I"target="_blank">Meteora</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="discografia.php">Ver mais</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

