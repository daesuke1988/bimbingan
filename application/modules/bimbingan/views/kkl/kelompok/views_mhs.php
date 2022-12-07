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
                            <th>No Mhs</th>
                            <th>Nama Mhs</th>
                            <th>Judul</th>
                            <th>Alamat</th>
                            <th>Nama Kelompok</th>
                            <th>Tahun</th>
                            <th>Semester</th>
                            <th>Dosen</th>
                            <th>Tanggal SK</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    foreach ($bimbingan->result() as $row) {
                    ?> <tr>
                            <td width="5%"><?php echo $i++; ?></td>
                            <td><?php echo $row->nim; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->judul; ?></td>
                            <td><?php echo $row->lokasi; ?></td>
                            <td><?php echo $row->nm_kelompok; ?></td>
                            <td><?php echo $row->tahun; ?></td>
                            <td><?php echo ($row->semester == '1') ? 'Ganjil' : 'Genap'; ?></td>
                            <td><?php echo $row->dosen; ?></td>
                            <td><?php echo $row->tanggal; ?></td>
                            <td width="16%">
                                <div class="tooltip-demo">
                                    <?php
                                    if ($row->dosen !== 'dosen belum diset') {
                                    ?>
                                        <a class="btn btn-outline btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Bimbingan" href="<?= base_url() ?>bimbingan/kkl/bimbingan_kelompok/<?= urlencode(base64_encode($row->id_kelompok_kkl)); ?>">
                                            <i class="fa fa-list"></i>
                                        </a>
                                        <a class="btn btn-outline btn-warning" data-placement="top" data-toggle="tooltip" data-original-title="Cetak SK" target="_blank" href="<?= base_url() ?>bimbingan/kkl/cetak_sk_kelompok_by_id/<?= urlencode(base64_encode($row->id_kelompok_kkl)); ?>">
                                            <i class="fa fa-file-pdf-o"></i>
                                        </a>
                                    <?php
                                    }
                                    ?>
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