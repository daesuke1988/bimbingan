<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Data Kerja Praktek
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Judul</th>
                            <th>Lokasi</th>
                            <th>Tahun</th>
                            <th>Semester</th>
                            <th>Status</th>
                            <th>Status Pendaftar</th>
                            <th>Dosen</th>
                            <th>Tanggal</th>
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
                            <td><?php echo $row->lokasi; ?></td>
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
                            <td><?php echo $row->tanggal; ?></td>
                            <td width="15%">
                                <div class="tooltip-demo">
                                    <table>
                                        <tr>
                                            <td style="padding:3px;">
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
                                                <a class="btn <?php echo $btn ?> btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Bimbingan" href="<?= base_url() ?>bimbingan/kerjapraktek/bimbingan/<?= urlencode(base64_encode($row->id_kp)); ?>">
                                                    <?php echo $list ?>
                                                </a>
                                            </td>
                                            <td style="padding:3px;"><a class="btn btn-outline btn-success" onclick="showDetail(<?php echo $row->id_kp; ?>);" data-target="#myModal" data-toggle="tooltip" data-original-title="Detail File"><i class="fa fa-file-text"></i></a></td>
                                            <?php
                                            if ($row->approv_kaprodi == 't') {
                                            ?>
                                                <td style="padding:3px;">
                                                    <a class="btn btn-outline btn-warning" data-placement="top" data-toggle="tooltip" data-original-title="Cetak SK" target="_blank" href="<?= base_url() ?>bimbingan/kerjapraktek/cetak_sk_mhs/<?= urlencode(base64_encode($row->id_kp)); ?>">
                                                        <i class="fa fa-file-pdf-o"></i>
                                                    </a>
                                                </td>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            if ($row->approv_dosen == 't') {
                                            } else {
                                                if (strtotime($row->end) < strtotime(date("d-m-Y"))) {
                                            ?>
                                                    <td style="padding:3px;">
                                                        <form action="<?php echo base_url(); ?>bimbingan/kerjapraktek/lanjut" method="post">
                                                            <input type="hidden" name="id_kp" value="<?php echo $row->id_kp; ?>">
                                                            <button class="btn btn-outline btn-success" type="submit" data-placement="top" data-toggle="tooltip" data-original-title="Lanjut Bimbingan"><i class="fa fa-telegram"></i></button>
                                                        </form>
                                                    </td>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tr>
                                    </table>
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
<script>
    var $modal = '';
    // jQuery.noConflict();
    $(document).ready(function() {
        $modal = $('#myModal').modal({
            show: false
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