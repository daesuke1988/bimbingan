<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<div class="table-responsive">
    <?php
    $group = $this->session->userdata('group_id');
    if ($group == '5') {
    ?>
        <a class="btn btn-success" href="<?= base_url() ?>upload/insert"> <i class="fa fa-plus-square"></i> Tambah </a>
        <br />
        <br />
    <?php
    }
    ?>

    <table class="table table-striped table-bordered table-hover dataTables-example">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Judul</th>
                <th>Tahun</th>
                <th>Semester</th>
                <th>Cover</th>
                <th>Pengesahan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        $i = 1;
        //                            if(count($all_groups)){
        foreach ($upload->result() as $row) {
        ?>
            <tr>
                <td width="5%"><?php echo $i++; ?></td>
                <td><?php echo $row->nim; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->judul; ?></td>
                <td><?php echo $row->tahun; ?></td>
                <td><?php echo $row->semester == '1' ? 'Ganjil' : 'Genap'; ?></td>
                <td><?php
                    if (!is_null($row->image_cover)) { ?>
                        <div class="tooltip-demo">
                            <a class="btn btn-outline btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>upload/download_cover/<?php echo $row->id; ?>">
                                <i class="fa fa-download"> Download</i>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </td>
                <td><?php
                    if (!is_null($row->image_pengesahan)) { ?>
                        <div class="tooltip-demo">
                            <a class="btn btn-outline btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>upload/download_pengesahan/<?php echo $row->id; ?>">
                                <i class="fa fa-download"> Download</i>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </td>
                <td width="15%">
                    <div class="tooltip-demo">
                        <a class="btn btn-outline btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Edit" href="<?= base_url() ?>upload/update/<?= urlencode(base64_encode($row->id)); ?>">
                            <i class="fa fa-edit"></i>
                        </a>
                        <?php
                        if ($group == '5') {
                        ?>
                            <a class="btn btn-outline btn-danger" data-placement="top" data-toggle="tooltip" data-original-title="Hapus" href="<?= base_url() ?>upload/delete/<?php echo $row->id; ?>" onclick="return confirm('Are you sure')">
                                <i class="fa fa-trash"></i>
                            </a>
                        <?php
                        }
                        ?>
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