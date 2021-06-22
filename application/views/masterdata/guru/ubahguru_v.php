<div class="row ">
    <div class="col-lg-12">


        <div class="ibox tooltip-demo">
            <div class="ibox-title">
                <i class="fa fa-database"></i> <span>Ubah Data Guru</span>
            </div>
            <div class="ibox-content">


                <form role="form" action="" method="POST">
                    <div class="container">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label font-bold text-uppercase">ID
                                Mata Pelajaran
                            </label>
                            <div class="col-sm-10">
                                <input id="idguru" name="idguru" type="text" class="form-control input-sm" readonly value="<?= $guru['idguru'] ?>">
                                <small class="form-text text-danger notifrequired"><?= form_error('idguru'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label font-bold text-uppercase">
                                Mata Pelajaran
                            </label>
                            <div class="col-sm-10">
                                <input id="guru" name="guru" type="text" class="form-control input-sm" value="<?= $guru['guru'] ?>">
                                <small class="form-text text-danger notifrequired"><?= form_error('guru'); ?></small>
                            </div>

                        </div>
                    </div>




            </div>
            <div class="ibox-footer">
                <div class="pull-right">
                    <a href="<?= base_url() ?>masterdata/guru_c" class="btn btn-danger btn-xs text-white" style="margin-top: -5px;">
                        Batal</a>
                    <button type="submit" name="ubahguru" class="btn btn-primary btn-xs" style="margin-top: -5px;">
                        Simpan</button>
                </div>
                &nbsp;
            </div>
            </form>
        </div>





    </div>
</div>