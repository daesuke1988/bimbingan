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
            <th>NIM</th>
            <th>Nama</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Semester</th>
            <th>Status</th>
            <th>Status Pendaftar</th>
            <th>Dosen</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <?php
    $i = 1;
    foreach ($bimbingan->result() as $row) {
        $id_user = $this->session->userdata('id_user');
    ?>
        <tr>
            <td width="5%"><?php echo $i++; ?></td>
            <td><?php echo $row->nim; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->judul; ?></td>
            <td><?php echo $row->tahun; ?></td>
            <td><?php echo ($row->semester == '1') ? 'Ganjil' : 'Genap'; ?></td>
            <td><?php
                if ($row->approv_kaprodi == 't') {
                    echo "<span class='label label-success'>Disetujui</span>";
                } elseif ($row->approv_kaprodi == 'f') {
                    echo "<span class='label label-danger'>Tidak Disetujui</span>";
                } else {
                    echo "<span class='label label-default'>Pengajuan</span>";
                } ?></td>
            <td><?php echo ($row->status_pendaftar == '1') ? "<span class='label label-primary'>Baru</span>" : "<span class='label label-success'>Lanjut</span>"; ?></td>
            <td><?php echo $row->dosen; ?></td>
            <td width="13%">
                <div class="tooltip-demo">
                    <?php
                    if ($row->id_user !== $id_user) {
                        $btn = '';
                        if ($row->approv_dosen == 't') {
                            $list = '<i class="fa fa-print"></i>';
                        } else {
                            $list = '<i class="fa fa-comments"></i>';
                        }
                    } else {
                        $btn = 'btn-outline';
                        if ($row->approv_dosen == 't') {
                            $list = '<i class="fa fa-print"></i>';
                        } else {
                            $list = '<i class="fa fa-list"></i>';
                        }
                    }
                    ?>
                    <a class="btn <?php echo $btn; ?> btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Bimbingan" href="<?= base_url() ?>bimbingan/skripsi/bimbingan/<?= urlencode(base64_encode($row->id_skripsi)); ?>">
                        <?php echo $list ?>
                    </a>
                    <a class="btn btn-outline btn-success" onclick="showDetail(<?php echo $row->id_skripsi; ?>);" data-target="#myModal" data-toggle="tooltip" data-original-title="Detail File"><i class="fa fa-file-text"></i></a>
                    <?php
                    if ($row->approv_kaprodi == 't') {
                    ?>
                        <a class="btn btn-outline btn-warning" data-placement="top" data-toggle="tooltip" data-original-title="Cetak SK" target="_blank" href="<?= base_url() ?>bimbingan/skripsi/cetak_sk_mhs/<?= urlencode(base64_encode($row->id_skripsi)); ?>">
                            <i class="fa fa-file-pdf-o"></i>
                        </a>
                    <?php } ?>
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
                    <h4 class="modal-title"> Detail</h4>
                </div>
                <div class="modal-body">
                    <div id="record"></div>
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
            url: '<?php echo base_url('bimbingan/skripsi/detail'); ?>',
            cache: false,
            data: {
                id: id
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