<?= $this->extend('layout/main') ?>
<?= $this->section('halamanutama') ?>
<div class="container">
    <br>
    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total Pembayaran</h5>
                    <h6 class="card-subtitle mb-2 text-muted">100</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total bank</h5>
                    <h6 class="card-subtitle mb-2 text-muted">15</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total Admin</h5>
                    <h6 class="card-subtitle mb-2 text-muted">10</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container-md">
    <div class="p-3 mb-2 bg-light text-dark">
        <div class="row mx-md-n5">
            <div class="col px-md-5">
                <div class="p-3 ">
                    <h1>WELCOME TO ELECTRIK-O</h1>
                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure blanditiis molestias nihil rem! Explicabo perferendis necessitatibus assumenda sunt cum veniam! Inventore rerum nulla cum distinctio harum atque vitae, voluptatum sapiente?
                    </h6>
                </div>
            </div>
            <div class="col px-md-5">
                <div class="p-3 "><img src="<?= base_url() ?>/assets/images/unplash.jpg" class="img-fluid rounded-sm" alt="..."></div>
            </div>
        </div>
        <div class="row mx-md-n5">
            <div class="col px-md-5">
                <div class="p-3 ">
                    <img src="<?= base_url() ?>/assets/images/unplash.jpg" class="img-fluid rounded-sm" alt="...">

                </div>
            </div>
            <div class="col px-md-5">
                <div class="p-3 ">
                    <h1>Mudah digunakan</h1>
                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure blanditiis molestias nihil rem! Explicabo perferendis necessitatibus assumenda sunt cum veniam! Inventore rerum nulla cum distinctio harum atque vitae, voluptatum sapiente?
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>