<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Tambah FUngsi
        </div>
        <div class="panel-body">
            <a class="btn btn-success" href="<?= base_url() ?>functions/insert"> <i class="fa fa-plus-square"></i> Tambah Fungsi</a>
            <br />
            <br />
            <div class="table-responsive">
                <?php
                if ($this->session->flashdata('message')) {
                    echo "<i>" . $this->session->flashdata('message') . "</i>";
                }
                ?>
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name URL</th>
                            <th>Deskripsi URL</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        //                            if(count($functions)){
                        foreach ($functions->result() as $row) {
                        ?>
                            <tr>
                                <td width="5%"><?php echo $i++; ?></td>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->desc; ?></td>
                                <td><?php echo ($row->menu == 't') ? '<span class="label label-success">Active</span>' : '<span class="label label-danger">Non Active</span>'; ?></td>
                                <td width="10%">
                                    <div class="tooltip-demo">
                                        <a class="btn btn-outline btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Edit" href="<?= base_url() ?>functions/update/<?= urlencode(base64_encode($row->id)); ?>">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a class="btn btn-outline btn-danger" data-placement="top" data-toggle="tooltip" data-original-title="Hapus" href="<?= base_url() ?>functions/delete/<?php echo $row->id; ?>" onclick="return confirm('Are you sure')">
                                            <i class="fa fa-times fa fa-white"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        //                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>