<?php echo $this->extend('layout/template') ?>

<?php echo $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5"><?php echo $title ?></h1>
<div class="card" style="width: 18rem;">
  <img src="/vendor/img/<?php echo $komik['sampul']  ?> "  class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?php echo $komik['judul'] ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

        </div>
    </div>
</div>

<?php echo $this->endSection() ?>