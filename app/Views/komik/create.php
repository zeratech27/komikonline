<?php echo $this->extend('layout/template') ?>

<?php echo $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3"><?php echo $title ?> </h2>
            <form action="/komik/data/save" method="post">
                <?php echo csrf_field() ?>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Komik</label>
                    <input type="text" class="form-control" id="judul" name="judul" autofocus>
                    </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Nama Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Nama Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit">
                </div>
                <div class="mb-3">
                    <label for="sampul" class="form-label">Cover</label>
                    <input type="text" class="form-control" id="sampul" name="sampul">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>