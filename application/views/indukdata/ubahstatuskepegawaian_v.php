<div class="row ">
    <div class="col-lg-12">


        <div class="ibox tooltip-demo">
            <div class="ibox-title">
                <i class="fa fa-server"></i> <span>Ubah Status Kepegawaian</span>
            </div>
            <div class="ibox-content">


                <form role="form" action="" method="POST">
                    <div class="container">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label font-bold text-uppercase">ID
                                Mata Pelajaran
                            </label>
                            <div class="col-sm-10">
                                <input id="idstatuskepegawaian" name="idstatuskepegawaian" type="text" class="form-control input-sm" readonly value="<?= $statuskepegawaian['idstatuskepegawaian'] ?>">
                                <small class="form-text text-danger notifrequired"><?= form_error('idstatuskepegawaian'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label font-bold text-uppercase">
                                Mata Pelajaran
                            </label>
                            <div class="col-sm-10">
                                <input id="statuskepegawaian" name="statuskepegawaian" type="text" class="form-control input-sm" value="<?= $statuskepegawaian['statuskepegawaian'] ?>">
                                <small class="form-text text-danger notifrequired"><?= form_error('statuskepegawaian'); ?></small>
                            </div>

                        </div>
                    </div>




            </div>
            <div class="ibox-footer">
                <div class="pull-right">
                    <a href="<?= base_url() ?>indukdata/statuskepegawaian_c" class="btn btn-danger btn-xs text-white" style="margin-top: -5px;">
                        Batal</a>
                    <button type="submit" name="ubahstatuskepegawaian" class="btn btn-primary btn-xs" style="margin-top: -5px;">
                        Simpan</button>
                </div>
                &nbsp;
            </div>
            </form>
        </div>





    </div>
</div>