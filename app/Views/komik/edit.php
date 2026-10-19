<?php echo $this->extend('layout/template') ?>

<?php echo $this->section('content') ?>
<?php session(); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Create Data validasi </h2>
            <?php $errors = session()->getFlashdata('errors'); ?>

            <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

            <form action="/komik/update/<?php echo $komik['id'] ?>" method="post"> 
                <?php echo csrf_field() ?>
                <input type="hidden" name="slug" value="<?php echo $komik['slug'] ?>">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Komik</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $komik['judul'] ?>" autofocus > 
                    </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Nama Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $komik['penulis'] ?>">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Nama Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $komik['penerbit'] ?>">
                </div>
                <div class="mb-3">
                    <label for="sampul" class="form-label">Cover</label>
                    <input type="text" class="form-control" id="sampul" name="sampul" value="<?php echo $komik['sampul'] ?>">
                </div>
                
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
            
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>