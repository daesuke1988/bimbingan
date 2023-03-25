<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- Sweet Alert -->
<link href="<?php echo base_url(); ?>assets/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<?php
if ($this->session->flashdata('message')) {
    echo "<i>" . $this->session->flashdata('message') . "</i>";
}
?>
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Data Jadwal Seminar
        </div>
        <div class="panel-body">
            <?php
            if ($this->session->flashdata('message_pembayaran')) {
                echo "<i>" . $this->session->flashdata('message_pembayaran') . "</i>";
            }
            ?>
            <div class="table-responsive">
                <?php
                $group = $this->session->userdata('group_id');
                if ($group == '1') {
                ?>
                    <a class="btn btn-success" href="<?= base_url() ?>jadwal/insert"> <i class="fa fa-plus-square"></i> Tambah </a>
                    <br />
                    <br />
                <?php
                }
                ?>

                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    //                            if(count($all_groups)){
                    foreach ($jadwal->result() as $row) {
                    ?>
                        <tr>
                            <td width="5%"><?php echo $i++; ?></td>
                            <td><?php echo $row->keterangan; ?></td>
                            <td><?php echo date_indo(date("Y-m-d", strtotime($row->date))) ?></td>
                            <td><?php
                                if (!is_null($row->image)) { ?>
                                    <div class="tooltip-demo">
                                        <a class="btn btn-outline btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>jadwal/download/<?php echo $row->id; ?>">
                                            <i class="fa fa-download"> Download</i>
                                        </a>
                                    </div>
                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                    <?php
                    }
                    //                            }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>