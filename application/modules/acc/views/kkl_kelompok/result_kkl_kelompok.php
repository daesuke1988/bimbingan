<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<table class="table table-striped table-bordered table-hover dataTables-example">
    <thead>
        <tr>
            <th>No</th>
            <th>Kelompok</th>
            <th>Jml MHS</th>
            <th>Tahun</th>
            <th>Semester</th>
            <th>Dosen Pembimbing</th>
            <th>Tanggal ACC</th>
            <th>Jml Bimbingan</th>
            <th>Lama Bimbingan</th>
            <th>Cetak</th>
        </tr>
    </thead>
    <?php
    $i = 1;
    foreach ($acc->result() as $row) {
        $tgl1 = new DateTime($row->tgl_awal);
        $tgl2 = new DateTime($row->tgl_approv);
        $jarak = $tgl2->diff($tgl1);
    ?> <tr>
            <td width="5%"><?php echo $i++; ?></td>
            <td><?php echo $row->nm_kelompok; ?></td>
            <td><a class="btn btn-outline btn-success" onclick="showDetail(<?php echo $row->id_kelompok_kkl; ?>);" data-target="#myModal" data-toggle="tooltip" data-original-title="Daftar Peserta KKL"><?php echo $row->jml_mhs; ?></a></td>
            <td><?php echo $row->tahun; ?></td>
            <td><?php echo ($row->semester == '1') ? 'Ganjil' : 'Genap'; ?></td>
            <td><?php echo $row->dosen; ?></td>
            <td><?php echo $row->tgl_approv; ?></td>
            <td><?php echo $row->jml_bimbingan; ?></td>
            <td><?php echo $jarak->m . ' bulan, ' . $jarak->d . ' hari'; ?></td>
            <td>
                <div class="tooltip-demo">
                    <a class="btn btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Cetak Riwayat Bimbingan" href="<?php echo base_url(); ?>bimbingan/kkl/cetak_pdf_bimbingan_kelompok/<?php echo urlencode(base64_encode($row->id_kelompok_kkl)); ?>" target="_blank">
                        <i class="fa fa-print"></i>
                    </a>
                </div>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<div class="modal fade">
    <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 80%;">
            <!-- Modal content-->
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"> Daftar Peserta KKL</h4>
                </div>
                <div class="modal-body" id="record">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/datatables.min.js"></script>
<!-- Custom and plugin javascript -->
<script src="<?php echo base_url(); ?>assets/js/inspinia.js"></script>
<script>
    var $modal = '';
    // jQuery.noConflict();
    $(document).ready(function() {
        $modal = $('#myModal').modal({
            show: false
        });

        $('.dataTables-example').DataTable({
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [{
                    extend: 'copy'
                },
                {
                    extend: 'csv'
                },
                {
                    extend: 'excel',
                    title: 'ExampleFile'
                },
                {
                    extend: 'pdf',
                    title: 'ExampleFile'
                },

                {
                    extend: 'print',
                    customize: function(win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]
        });

    });

    function showDetail(id) {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('bimbingan/kkl/daftar_peserta'); ?>',
            cache: false,
            data: {
                id_kelompok: id
            },
            dataType: 'html',
            success: function(data) {
                $modal.find('#record').html(data);
                $modal.modal('show');
            },

            error: function(xhr, status, msg_error) {
                $modal.find('#record').html("");
                alert("Data gagal ditampilkan. \n " + msg_error);
                return false;
            }
        });
    }
</script>