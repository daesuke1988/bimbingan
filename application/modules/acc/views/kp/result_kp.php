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
            <th>Prodi</th>
            <th>Judul</th>
            <th>Lokasi</th>
            <th>Tahun</th>
            <th>Semester</th>
            <th>Dosen Pembimbing</th>
            <th>Tanggal ACC</th>
            <th>Jml Bimbingan</th>
            <th>Lama Bimbingan</th>
            <td>Cetak</td>
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
            <td><?php echo $row->nim; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->nm_prodi; ?></td>
            <td><?php echo $row->judul; ?></td>
            <td><?php echo $row->lokasi; ?></td>
            <td><?php echo $row->tahun; ?></td>
            <td><?php echo ($row->semester == '1') ? 'Ganjil' : 'Genap'; ?></td>
            <td><?php echo $row->dosen; ?></td>
            <td><?php echo $row->tgl_approv; ?></td>
            <td><?php echo $row->jml_bimbingan; ?></td>
            <td><?php echo $jarak->m . ' bulan, ' . $jarak->d . ' hari'; ?></td>
            <td>
                <div class="tooltip-demo">
                    <a class="btn btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Cetak Riwayat Bimbingan" href="<?php echo base_url(); ?>bimbingan/kerjapraktek/cetak_pdf/<?php echo urlencode(base64_encode($row->id_kp)); ?>" target="_blank">
                        <i class="fa fa-print"></i>
                    </a>
                </div>
            </td>
        </tr>
    <?php
    }
    ?>
</table>

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
</script>