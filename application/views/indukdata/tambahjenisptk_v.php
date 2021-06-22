<div class="row ">
    <div class="col-lg-12">


        <div class="ibox tooltip-demo">
            <div class="ibox-title">
                <i class="fa fa-server"></i> <span>Tambah Jenis PTK</span>
            </div>
            <div class="ibox-content">


                <form role="form" action="" method="POST">
                    <div class="container">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label font-bold text-uppercase">ID PTK
                            </label>
                            <div class="col-sm-10">
                                <input id="idjenisptk" name="idjenisptk" type="text" class="form-control input-sm" value="<?= set_value('idjenisptk') ?>">
                                <small class="form-text text-danger notifrequired"><?= form_error('idjenisptk'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label font-bold text-uppercase">
                                Jenis PTK
                            </label>
                            <div class="col-sm-10">
                                <input id="jenisptk" name="jenisptk" type="text" class="form-control input-sm" value="<?= set_value('jenisptk') ?>">
                                <small class="form-text text-danger notifrequired"><?= form_error('jenisptk'); ?></small>
                            </div>

                        </div>
                    </div>




            </div>
            <div class="ibox-footer">
                <div class="pull-right">
                    <a href="<?= base_url() ?>indukdata/jenisptk_c" class="btn btn-danger btn-xs text-white" style="margin-top: -5px;">
                        Batal</a>
                    <button type="submit" name="tambahjenisptk" class="btn btn-primary btn-xs" style="margin-top: -5px;">
                        Simpan</button>
                </div>
                &nbsp;
            </div>
            </form>
        </div>





    </div>
</div>