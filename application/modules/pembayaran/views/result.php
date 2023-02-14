<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover dataTables-example">
        <thead>
            <tr>
                <th>No</th>
                <th>No. Mahasiswa</th>
                <th>Nama</th>
                <th>Jenis Pembayaran</th>
                <th>Tahun</th>
                <th>Semester</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        $i = 1;
        //                            if(count($all_groups)){
        foreach ($pembayaran->result() as $row) {
        ?>
            <tr>
                <td width="5%"><?php echo $i++; ?></td>
                <td><?php echo $row->nim; ?></td>
                <td><?php echo $row->namamhs; ?></td>
                <td><?php echo $row->jenis_pembayaran; ?></td>
                <td><?php echo $row->tahun; ?></td>
                <td><?php echo $row->semester == '1' ? 'Ganjil' : 'Genap'; ?></td>
                <td><?php echo $row->approv_dosen == 't' ? 'Selesai' : 'Belum Selesai' ?></td>
                <td width="15%">
                    <div class="tooltip-demo">
                        <a class="btn btn-outline btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Edit" href="<?= base_url() ?>pembayaran/update/<?= urlencode(base64_encode($row->id)); ?>">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a class="btn btn-outline btn-danger" data-placement="top" data-toggle="tooltip" data-original-title="Hapus" href="#" onclick="return confirmDelete(<?php echo $row->id; ?>)">
                            <i class="fa fa-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php
        }
        //                            }
        ?>
    </table>
</div>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/datatables.min.js"></script>
<!-- Custom and plugin javascript -->
<script src="<?php echo base_url(); ?>assets/js/inspinia.js"></script>
<script>
    $(document).ready(function() {
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
</script>