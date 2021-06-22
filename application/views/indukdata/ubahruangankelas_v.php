<div class="row ">
    <div class="col-lg-12">


        <div class="ibox tooltip-demo">
            <div class="ibox-title">
                <i class="fa fa-server"></i> <span>Ubah Ruangan / Kelas</span>
            </div>
            <div class="ibox-content">


                <form role="form" action="" method="POST">
                    <div class="container">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label font-bold text-uppercase">ID</label>
                            <div class="col-sm-10">
                                <input id="idruangankelas" name="idruangankelas" type="text" class="form-control input-sm" readonly value="<?= $ruangankelas['idruangankelas'] ?>">
                                <small class="form-text text-danger notifrequired"><?= form_error('idruangankelas'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label font-bold text-uppercase">
                                Ruangan
                            </label>
                            <div class="col-sm-10">
                                <input id="ruangan" name="ruangan" type="text" class="form-control input-sm" value="<?= $ruangankelas['ruangan'] ?>">
                                <small class="form-text text-danger notifrequired"><?= form_error('ruangan'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label font-bold text-uppercase">
                                Kelas
                            </label>
                            <div class="col-sm-10">
                                <input id="kelas" name="kelas" type="text" class="form-control input-sm" value="<?= $ruangankelas['kelas'] ?>">
                                <small class="form-text text-danger notifrequired"><?= form_error('kelas'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label font-bold text-uppercase">
                                Kapasitas
                            </label>
                            <div class="col-sm-10">
                                <input id="kapasitas" name="kapasitas" type="text" class="form-control input-sm" value="<?= $ruangankelas['kapasitas'] ?>">
                                <small class="form-text text-danger notifrequired"><?= form_error('kapasitas'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label font-bold text-uppercase">
                                Jumlah Siswa
                            </label>
                            <div class="col-sm-10">
                                <input id="jumlahsiswa" name="jumlahsiswa" type="text" class="form-control input-sm" value="<?= $ruangankelas['jumlahsiswa'] ?>">
                                <small class="form-text text-danger notifrequired"><?= form_error('jumlahsiswa'); ?></small>
                            </div>
                        </div>
                    </div>




            </div>
            <div class="ibox-footer">
                <div class="pull-right">
                    <a href="<?= base_url() ?>indukdata/ruangankelas_c" class="btn btn-danger btn-xs text-white" style="margin-top: -5px;">
                        Batal</a>
                    <button type="submit" name="ubahruangankelas" class="btn btn-primary btn-xs" style="margin-top: -5px;">
                        Simpan</button>
                </div>
                &nbsp;
            </div>
            </form>
        </div>





    </div>
</div>