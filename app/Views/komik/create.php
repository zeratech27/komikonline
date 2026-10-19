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

            <form action="/komik/data/save" method="post" enctype="multipart/form-data">
                <?php echo csrf_field() ?>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Komik</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?php echo old('judul') ?>" autofocus > 
                    </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Nama Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo old('penulis') ?>">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Nama Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo old('penerbit') ?>">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control" aria-label="sampul" id="sampul" name="sampul" required>
                    <div class="invalid-feedback">Example invalid form file feedback</div>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>