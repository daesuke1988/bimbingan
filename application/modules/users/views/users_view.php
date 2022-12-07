<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Data Pengguna
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <?php
                if ($this->session->flashdata('message')) {
                    echo "<i>" . $this->session->flashdata('message') . "</i>";
                }
                ?>
                <a class="btn btn-success" href="<?= base_url() ?>users/insert"> <i class="fa fa-plus-square"></i> Tambah Pengguna</a>
                <br />
                <br />
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Nama Lengkap</th>
                            <th>Group</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    foreach ($all_user->result() as $row) {
                    ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row->username; ?></td>
                            <td><?php echo $row->nama_lengkap; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td width="15%">
                                <div class="tooltip-demo">
                                    <a class="btn btn-outline btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Edit" href="<?= base_url() ?>users/update/<?= urlencode(base64_encode($row->user_id)); ?>">
                                        <i class="fa fa-pencil-square"></i>
                                    </a>
                                    <a class="btn btn-outline btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Edit Password" href="<?= base_url() ?>users/update_password/<?= urlencode(base64_encode($row->user_id)); ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-outline btn-danger" data-placement="top" data-toggle="tooltip" data-original-title="Hapus" href="<?= base_url() ?>users/delete/<?php echo urlencode(base64_encode($row->user_id)); ?>" onclick="return confirm('Are you sure')">
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