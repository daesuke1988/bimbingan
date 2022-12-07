<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<?php
error_reporting(0);
?>
<table class="table table-striped table-bordered table-hover dataTables-example">
    <thead>
        <tr>
            <th>No</th>
            <th>NPP/NIP</th>
            <th>Dosen</th>
            <th>Jml Mhs Bimbingan KP</th>
            <th>Jml Mhs Bimbingan Skripsi</th>
            <th>Jml Mhs Bimbingan KKL Individu</th>
            <th>Total</th>
        </tr>
    </thead>
    <?php
    $i = 1;
    foreach ($rekap->result() as $row) {
    ?> <tr>
            <td width="5%"><?php echo $i++; ?></td>
            <td><?php echo $row->npp; ?></td>
            <td><?php echo $row->dosen; ?></td>
            <td><?php echo $row->jml_mhs_kp; ?></td>
            <td><?php echo $row->jml_mhs_s; ?></td>
            <td><?php echo $row->jml_mhs_kkl; ?></td>
            <td><?php echo $row->jml_mhs_kp + $row->jml_mhs_kkl + $row->jml_mhs_kkl; ?></td>
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

    function showDetail(id) {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('bimbingan/kerjapraktek/detail'); ?>',
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