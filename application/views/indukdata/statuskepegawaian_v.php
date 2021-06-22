<div class="row ">
    <div class="col-lg-12">


        <div class="ibox tooltip-demo">
            <div class="ibox-title">
                <i class="fa fa-server"></i> <span>Status Kepegawaian</span>

                <div class="ibox-tools">
                    <a href="<?= base_url() ?>indukdata/statuskepegawaian_c/tambahstatuskepegawaian" type="submit" class="btn btn-primary btn-xs" style="margin-top: -5px;"><i style="font-size: 10px;" class="fa fa-plus"></i> Tambah
                        Data</a>
                </div>

            </div>
            <div class="ibox-content">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">

                        <thead>
                            <tr>
                                <th style="min-width: 10px;">No</th>
                                <th style="min-width: 60px;">ID</th>
                                <th style="min-width: 150px;">Status Kepegawaian</th>
                                <th style="min-width: 250px;">Nama PTK</th>
                                <th style="min-width: 60px;">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($statuskepegawaian as $statpeg) { ?>
                                <tr>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td><?= $statpeg['idstatuskepegawaian']; ?></td>
                                    <td><?= $statpeg['statuskepegawaian']; ?></td>
                                    <td></td>
                                    <td class="text-center">
                                        <div style="margin-top: -5px;">
                                            <!-- <a type="button" class="btn btn-success  btn-xs text-white" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-edit"></i></a> -->
                                            <a href="<?= base_url(); ?>indukdata/statuskepegawaian_c/ubahstatuskepegawaian/<?= $statpeg['idstatuskepegawaian']; ?>" type="button" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Ubah">
                                                <i class="fa fa-pencil"></i>
                                            </a>


                                            <span data-toggle="modal" data-target=".bd-example-modal-sm">
                                                <a href="<?= base_url(); ?>indukdata/statuskepegawaian_c/hapusstatuskepegawaian/<?= $statpeg['idstatuskepegawaian']; ?>" type="button" class="btn btn-xs btn-danger konfirmasihapus" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </span>

                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">

        <?php if ($this->session->flashdata('flash')) :  ?>
            <div class="alert" role="alert">
                <p><i class="fa fa-check-circle"></i><br><?= $this->session->flashdata('flash'); ?></p>
            </div>
        <?php endif; ?>
    </div>
</div>