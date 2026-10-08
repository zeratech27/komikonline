<?php echo $this->extend('layout/template') ?>

<?php echo $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Contact Me if you can</h1>
      <Ul>
        
      <li><?php echo 'Alamat :'.$kontak['alamat'] ?></li>
      <li><?php echo 'Blok: '. $kontak['blok'] ?></li>
      <li><?php echo 'Nomor telp:'.$kontak['notelp'] ?></li>
        
        


      </Ul>
        


      </div>
  </div>
</div>

<?php echo $this->endSection() ?>