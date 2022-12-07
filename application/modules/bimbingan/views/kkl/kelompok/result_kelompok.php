<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<div class="form-group row">
    <div class="col-sm-12">
        <a class="btn btn-warning pull-right" data-placement="top" data-toggle="tooltip" data-original-title="Cetak SK" target="_blank" href="<?= base_url() ?>bimbingan/kkl/cetak_sk_kelompok/<?php echo urlencode(base64_encode(@$tahun)); ?>/<?php echo urlencode(base64_encode(@$semester)); ?>">
            <i class="fa fa-file-pdf-o"></i> Cetak SK
        </a>
    </div>
</div>
<table class="table table-striped table-bordered table-hover dataTables-example">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kelompok</th>
            <th>Tahun</th>
            <th>Semester</th>
            <th>Dosen</th>
            <th>Peserta</th>
            <th>Tanggal SK</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <?php
    $i = 1;
    foreach ($bimbingan->result() as $row) {
    ?> <tr>
            <td width="5%"><?php echo $i++; ?></td>
            <td><?php echo $row->nm_kelompok; ?></td>
            <td><?php echo $row->tahun; ?></td>
            <td><?php echo ($row->semester == '1') ? 'Ganjil' : 'Genap'; ?></td>
            <td><?php echo $row->dosen; ?></td>
            <td><?php echo $row->peserta; ?></td>
            <td><?php echo $row->tanggal; ?></td>
            <td width="16%">
                <div class="tooltip-demo">
                    <a href="<?= base_url() ?>bimbingan/kkl/set_dosen/<?= urlencode(base64_encode($row->id_kelompok_kkl)); ?>" class="btn btn-outline btn-warning" data-toggle="tooltip" data-original-title="Seting Dosen Pembimbing KKL"><i class="fa fa-gears"></i></a>
                    <a class="btn btn-outline btn-success" onclick="showDetail(<?php echo $row->id_kelompok_kkl; ?>);" data-target="#myModal" data-toggle="tooltip" data-original-title="Daftar Peserta KKL"><i class="fa fa-users"></i></a>
                    <?php
                    if ($row->dosen !== 'dosen belum diset') {
                    ?>
                        <a class="btn btn-outline btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Bimbingan" href="<?= base_url() ?>bimbingan/kkl/bimbingan_kelompok/<?= urlencode(base64_encode($row->id_kelompok_kkl)); ?>">
                            <i class="fa fa-list"></i>
                        </a>
                        <a class="btn btn-outline btn-warning" data-placement="top" data-toggle="tooltip" data-original-title="Cetak SK" target="_blank" href="<?= base_url() ?>bimbingan/kkl/cetak_sk_kelompok_by_id/<?= urlencode(base64_encode($row->id_kelompok_kkl)); ?>">
                            <i class="fa fa-file-pdf-o"></i>
                        </a>
                    <?php
                    }
                    ?>

                    <?php
                    $role = $this->session->userdata('group_id');
                    if ($role == '2') {
                    ?>
                        <a class="btn btn-outline btn-danger" data-placement="top" data-toggle="tooltip" data-original-title="Tidak Setuju" href="<?= base_url() ?>bimbingan/kkl/unapprov/<?= urlencode(base64_encode($row->id_kelompok_kkl)); ?>">
                            <i class="fa fa-thumbs-down"></i>
                        </a>
                    <?php
                    } ?>
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