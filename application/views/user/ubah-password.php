<!-- awal konten halaman -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">

            <?= $this->session->flashdata('pesan'); ?>

            <form action="<?= base_url('user/ubahPassword'); ?>" method="post">
                <div class="form-gorup">
                    <label for="password_sekarang">Password Saat ini</label>
                    <input type="password" class="form-control" id="password_sekarang" name="password_sekarang">
                    <?= form_error('password_sekarang', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-gorup">
                    <label for="password_baru1">Password Baru</label>
                    <input type="password" class="form-control" id="password_baru1" name="password_baru1">
                    <?= form_error('password_baru1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-gorup">
                    <label for="password_baru2">Ulangi Password </label>
                    <input type="password" class="form-control" id="password_baru2" name="password_baru2">
                    <?= form_error('password_baru2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mt-3">Ubah Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir konten halaman -->

</div>
<!-- End of Main Content -->