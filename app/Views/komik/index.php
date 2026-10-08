<?php echo $this->extend('layout/template') ?>

<?php echo $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col">
        <h1 class="mt-5"> <?php echo $title ?></h1>
       <table class="table" style="vertical-align: middle;" >
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Sampul</th>
                <th scope="col">Judul</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <?php 
                  $no=1;
                  foreach ($komik as $k): ?>
                <th scope="row"><?php echo $no++ ?></th> 
                <td><img src="vendor/img/<?php echo $k['sampul']  ?> " alt="" width="70px"> </td> 
                <td><?php echo $k['judul'] ?></td>
                <td><a href="<?php echo '/komik/'.$k['slug']; ?>" class="btn btn-success">Detail  </td> 
                </tr>
                <?php endforeach ?>

            </tbody>
            </table>

    </div>
  </div>
</div>

<?php echo $this->endSection() ?>