<div class="row ">
    <div class="col-lg-12">


        <div class="ibox tooltip-demo">
            <div class="ibox-title">
                <i class="fa fa-database"></i> <span>Tambah Data Guru</span>
            </div>
            <div class="ibox-content">


                <form role="form" action="" method="POST">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 inputguru">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">ID
                                        Guru
                                    </label>
                                    <div class="col-md-8">
                                        <input id="idguru" name="idguru" type="text" class="form-control input-sm" value="<?= set_value('idguru') ?>">
                                        <small class="form-text text-danger notifrequired"><?= form_error('idguru'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        Nama Lengkap
                                    </label>
                                    <div class="col-md-8">
                                        <input id="guru" name="guru" type="text" class="form-control input-sm" value="<?= set_value('guru') ?>">
                                        <small class="form-text text-danger notifrequired"><?= form_error('guru'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        Jenis Kelamin
                                    </label>
                                    <div class="col-md-8">
                                        <select id="jeniskelamin" name="jeniskelamin" type="text" class="select2_demo_jk form-control input-sm">
                                            <option></option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <small class="form-text text-danger notifrequired"><?= form_error('jeniskelamin'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        Tempat Lahir
                                    </label>
                                    <div class="col-md-8">
                                        <input id="tempatlahir" name="tempatlahir" type="text" class="form-control input-sm" value="<?= set_value('tempatlahir') ?>">
                                        <small class="form-text text-danger notifrequired"><?= form_error('tempatlahir'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        Tanggal Lahir
                                    </label>
                                    <div class="col-md-8">
                                        <input id="tanggallahir" name="tanggallahir" type="date" class="form-control input-sm" value="<?= set_value('tanggallahir') ?>">
                                        <small class="form-text text-danger notifrequired"><?= form_error('tanggallahir'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        Alamat Lengkap
                                    </label>
                                    <div class="col-md-8">
                                        <input id="alamat" name="alamat" type="text" class="form-control input-sm" value="<?= set_value('alamat') ?>">
                                        <small class="form-text text-danger notifrequired"><?= form_error('alamat'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        Jenis PTK
                                    </label>
                                    <div class="col-md-8">
                                        <select id="jenisptk" name="jenisptk" type="text" class="select2_demo_ptk form-control input-sm" value="<?= set_value('jenisptk') ?>">
                                            <option></option>
                                            <?php foreach ($jenisptk->result() as $key => $data) { ?>
                                                <option value=""><?= $data->jenisptk  ?> </option>
                                            <?php } ?>
                                        </select>
                                        <small class="form-text text-danger notifrequired"><?= form_error('jenisptk'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        Matapelajaran yang diampu
                                    </label>
                                    <div class="col-md-8">
                                        <select id="matapelajaran" name="matapelajaran" type="text" class="select2_demo_mapel form-control input-sm" multiple="multiple" value="<?= set_value('matapelajaran') ?>" style="width: 100%;">
                                            <option></option>

                                        </select>
                                        <small class="form-text text-danger notifrequired"><?= form_error('matapelajaran'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        Tugas Tambahan
                                    </label>
                                    <div class="col-md-8">
                                        <input id="tugastambahan" name="tugastambahan" type="text" class="form-control input-sm" value="<?= set_value('tugastambahan') ?>">
                                        <small class="form-text text-danger notifrequired"><?= form_error('tugastambahan'); ?></small>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 inputguru">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        Status Kepegawaian
                                    </label>
                                    <div class="col-md-8">
                                        <select id="statuskepegawaian" name="statuskepegawaian" type="text" class="select2_demo_kepegawaian form-control input-sm" value="<?= set_value('statuskepegawaian') ?>">
                                            <option></option>
                                            <option value="pegawai1">Pegawai 1</option>
                                            <option value="pegawai2">Pegawai 2</option>
                                            <option value="pegawai3">Pegawai 3</option>
                                            <option value="pegawai4">Pegawai 4</option>
                                            <option value="pegawai5">Pegawai 5</option>
                                        </select>
                                        <small class="form-text text-danger notifrequired"><?= form_error('statuskepegawaian'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">NIP
                                    </label>
                                    <div class="col-md-8">
                                        <input id="nip" name="nip" type="text" class="form-control input-sm" value="<?= set_value('nip') ?>">
                                        <small class="form-text text-danger notifrequired"><?= form_error('nip'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        SK CPNS
                                    </label>
                                    <div class="col-md-8">
                                        <input id="skcpns" name="skcpns" type="text" class="form-control input-sm" value="<?= set_value('skcpns') ?>">
                                        <small class="form-text text-danger notifrequired"><?= form_error('skcpns'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        Tanggal CPNS
                                    </label>
                                    <div class="col-md-8">
                                        <input id="tanggalcpns" name="tanggalcpns" type="text" class="form-control input-sm" value="<?= set_value('tanggalcpns') ?>">
                                        <small class="form-text text-danger notifrequired"><?= form_error('tanggalcpns'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        SK Pengangkat
                                    </label>
                                    <div class="col-md-8">
                                        <input id="skpengangkat" name="skpengangkat" type="text" class="form-control input-sm" value="<?= set_value('skpengangkat') ?>">
                                        <small class="form-text text-danger notifrequired"><?= form_error('skpengangkat'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        TMT Pengangkat
                                    </label>
                                    <div class="col-md-8">
                                        <input id="tmtpengangkat" name="tmtpengangkat" type="text" class="form-control input-sm" value="<?= set_value('tmtpengangkat') ?>">
                                        <small class="form-text text-danger notifrequired"><?= form_error('tmtpengangkat'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        Lemb. Pengangkat
                                    </label>
                                    <div class="col-md-8">
                                        <input id="lembagapengangkat" name="lembagapengangkat" type="text" class="form-control input-sm" value="<?= set_value('lembagapengangkat') ?>">
                                        <small class="form-text text-danger notifrequired"><?= form_error('lembagapengangkat'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        Pangkat/Gol. Ruang
                                    </label>
                                    <div class="col-md-8">
                                        <input id="pangkatgolruang" name="pangkatgolruang" type="text" class="form-control input-sm" value="<?= set_value('pangkatgolruang') ?>">
                                        <small class="form-text text-danger notifrequired"><?= form_error('pangkatgolruang'); ?></small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label font-bold text-uppercase">
                                        Foto
                                    </label>
                                    <div class="col-md-8">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <span class="btn btn-primary btn-outline btn-file"><span class="fileinput-new">Pilih File</span>
                                                <span class="fileinput-exists">Ubah</span><input type="file" name="..." /></span>
                                            <span style="margin-left: 5px; color:teal" class="fileinput-filename "></span>
                                            <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none; color:black">×</a>
                                        </div>
                                        <small class="form-text text-danger notifrequired"><?= form_error('statuskeaktifan'); ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>







                    </div>




            </div>
            <div class="ibox-footer">
                <div class="pull-right">
                    <a href="<?= base_url() ?>masterdata/guru_c" class="btn btn-danger btn-xs text-white" style="margin-top: -5px;">
                        Batal</a>
                    <button type="submit" name="tambahguru" class="btn btn-primary btn-xs" style="margin-top: -5px;">
                        Simpan</button>
                </div>
                &nbsp;
            </div>
            </form>
        </div>





    </div>
</div>