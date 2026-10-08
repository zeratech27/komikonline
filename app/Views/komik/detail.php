<?php echo $this->extend('layout/template') ?>

<?php echo $this->section('content') ?>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
          <h1 class="mt-5"><?php echo $title; ?> </h1>
    <div class="col-md-4">
      <img src="/vendor/img/<?php echo $komik['sampul']  ?> " class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $komik['judul']  ?></h5>
        <p class="card-text">Penulis : <?php echo $komik['penulis']  ?> </p>
        <p class="card-text"><small class="text-body-secondary">Penerbit: <?php echo $komik['penerbit']  ?> </small></p>
        <a href="http://" class="btn btn-warning">Edit</a>
        <a href="http://" class="btn btn-danger">Hapus</a>
        <br>
        <a href="/komik">Daftar Komik</a>
      </div>
    </div>
  </div>
</div>

<?php echo $this->endSection() ?>