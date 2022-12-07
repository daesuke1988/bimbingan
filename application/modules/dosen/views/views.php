<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
if ($this->session->flashdata('message')) {
    echo "<i>" . $this->session->flashdata('message') . "</i>";
}
?>

<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Data Dosen
        </div>
        <div class="panel-body">
            <a class="btn btn-success" href="<?= base_url() ?>dosen/insert"> <i class="fa fa-plus-square"></i> Tambah Dosen</a>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP/NPP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    foreach ($dosen->result() as $row) {
                    ?>
                        <tr>
                            <td width="5%"><?php echo $i++; ?></td>
                            <td><?php echo $row->gelar_depan . ' ' . $row->nama . ', ' . $row->gelar_belakang; ?></td>
                            <td><?php echo $row->npp; ?></td>
                            <td width="10%">
                                <div class="tooltip-demo">
                                    <a class="btn btn-outline btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Edit" href="<?= base_url() ?>dosen/update/<?= urlencode(base64_encode($row->id)); ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-outline btn-danger" data-placement="top" data-toggle="tooltip" data-original-title="Hapus" href="<?= base_url() ?>dosen/delete/<?php echo $row->id; ?>" onclick="return confirm('Are you sure')">
                                        <i class="fa fa-times fa fa-white"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>