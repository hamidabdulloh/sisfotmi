                </div>
                </div>
                </div>
                </div>
                </div>



                </div>


                </div>
                </div>



                <!-- Mainly scripts -->
                <script src="<?php echo base_url() ?>/assets/js/jquery-3.1.1.min.js"></script>
                <script src="<?php echo base_url() ?>/assets/js/popper.min.js"></script>
                <script src="<?php echo base_url() ?>/assets/js/bootstrap.js"></script>
                <script src="<?php echo base_url() ?>/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
                <script src="<?php echo base_url() ?>/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

                <!-- Custom and plugin javascript -->
                <script src="<?php echo base_url() ?>/assets/js/inspinia.js"></script>
                <script src="<?php echo base_url() ?>/assets/js/plugins/pace/pace.min.js"></script>

                <script src="<?php echo base_url() ?>/assets/js/plugins/dataTables/datatables.min.js"></script>
                <script src="<?php echo base_url() ?>/assets/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

                <script src="<?php echo base_url() ?>/assets/js/plugins/sweetalert/sweetalert.min.js"></script>

                <script src="<?php echo base_url() ?>/assets/js/plugins/jasny/jasny-bootstrap.min.js"></script>

                <script src="<?php echo base_url() ?>/assets/js/plugins/select2/select2.full.min.js"></script>

                <script>
                        $(document).ready(function() {

                                $(".select2_demo_ptk").select2({
                                        placeholder: "Jenis PTK",
                                        allowClear: true
                                });
                                $(".select2_demo_jk").select2({
                                        placeholder: "Jenis Kelamin",
                                        allowClear: true
                                });
                                $(".select2_demo_mapel").select2({
                                        placeholder: "Mata Pelajaran",
                                        allowClear: true
                                });
                                $(".select2_demo_kepegawaian").select2({
                                        placeholder: "Status Kepegawaian",
                                        allowClear: true
                                });

                                $('.konfirmasihapus').on('click', function() {
                                        var getLink = $(this).attr('href');
                                        swal({
                                                title: "Hapus Data?",
                                                // text: "You will not be able to recover this imaginary file!",
                                                type: "warning",
                                                showCancelButton: true,
                                                cancelButtonText: "Batal",
                                                confirmButtonColor: "#0B8585",
                                                confirmButtonText: "Hapus",
                                                closeOnConfirm: false
                                        }, function() {
                                                window.location.href = getLink;
                                        });
                                        return false;
                                });


                                window.setTimeout(function() {
                                        $(".alert").fadeTo(500, 0).slideDown(500, function() {
                                                $(this).remove();
                                        });
                                }, 3000);

                                window.setTimeout(function() {
                                        $(".notifrequired").fadeTo(200, 0).slideDown(200, function() {
                                                $(this).remove();
                                        });
                                }, 3000);


                                $('.dataTables-example').DataTable({
                                        "language": {
                                                "url": "indonesia.json",
                                                "sUrl": "",
                                                "sEmptyTable": "",
                                                "sZeroRecords": "Tidak ada data di database",
                                                "sInfo": "Jumlah Data : <b>_TOTAL_</b> data",
                                                "sInfoEmpty": "Jumlah Data : <b>_TOTAL_</b> data",
                                                "sInfoFiltered": "",
                                                "sInfoPostFix": "",
                                                "sSearch": "Cari",
                                                "oPaginate": {
                                                        "sFirs": "<b>«<b>",
                                                        "sPrevious": "<b>‹<b>",
                                                        "sNext": "<b>›<b>",
                                                        "sLast": "<b>»<b>",
                                                }

                                        },
                                        pageLength: 5,
                                        responsive: true,
                                        dom: '<"html5buttons"B>ftpi',
                                        buttons: [
                                                // {
                                                //         extend: 'excel',
                                                //         title: 'ExampleFile'
                                                // },
                                                {
                                                        extend: 'pdf',
                                                        title: 'ExampleFile'
                                                },
                                                {
                                                        extend: 'print',
                                                        customize: function(win) {
                                                                $(win.document.body).addClass('white-bg');
                                                                $(win.document.body).css('font-size', '10px');
                                                                $(win.document.body).find('table').addClass('compact').css('font-size', 'inherit');
                                                        }
                                                }
                                        ],
                                });

                                // $(document).ready(function() {
                                //         $('a[data-confirm]').click(function(ev) {
                                //                 var href = $(this).attr('href');
                                //                 if (!$('#dataConfirmModal').length) {
                                //                         $('body').append('<div id="dataConfirmModal" class="modal modalkonfirmasihapus" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-body modalbodykonfirmasihapus"></div><div class="modal-footer modalfooterkonfirmasihapus"><a class="btn btn-primary" id="dataConfirmOK">Hapus</a><button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button></div></div>');
                                //                 }
                                //                 $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
                                //                 $('#dataConfirmOK').attr('href', href);
                                //                 $('#dataConfirmModal').modal({
                                //                         show: true
                                //                 });
                                //                 return false;
                                //         });
                                // });


                        });
                </script>
                </body>

                </html>