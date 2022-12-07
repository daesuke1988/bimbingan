<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Data Pendaftaran Kuliah Kerja Lapangan Kelompok
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
                            <th>Kelas</th>
                            <th>Status</th>
                            <th>Kategori</th>
                            <th>Kelompok/Ketua</th>
                            <th>Pilih Kelompok</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    foreach ($kkl->result() as $row) {
                    ?>
                        <tr>
                            <td width="5%"><?php echo $i++; ?></td>
                            <td><?php echo $row->nim; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->judul; ?></td>
                            <td><?php echo $row->lokasi; ?></td>
                            <td><?php echo $row->tahun; ?></td>
                            <td><?php echo ($row->semester == '1') ? 'Ganjil' : 'Genap'; ?></td>
                            <td><?php echo $row->kelas; ?></td>
                            <td><?php
                                if ($row->approv_wakademik == 't') {
                                    echo "<span class='label label-success'>Disetujui</span>";
                                } elseif ($row->approv_wakademik == 'f') {
                                    echo "<span class='label label-danger'>Tidak Disetujui</span>";
                                } else {
                                    echo "<span class='label label-default'>Pengajuan</span>";
                                } ?></td>
                            <td><?php echo ($row->kategori == 'i') ? 'Individu' : 'Kelompok'; ?></td>
                            <td>
                                <p id=<?php echo 'nl' . $row->id; ?>><?php echo ''; ?></p>
                                <p id=<?php echo 'kl' . $row->id; ?>><?php echo ''; ?></p>
                            </td>
                            <td>
                                <div class="col-sm-10">
                                    <select name="nilai" id="<?php echo 'mySelect' . $row->id; ?>" class="form-control" onchange="<?php echo "myFunction(" . $row->id . ")"; ?>">
                                        <option value="" selected="selected"> :: Pilih Kelompok :: </option>
                                        <?php
                                        foreach ($kelompok->result() as $ro) {
                                        ?>
                                            <option value="<?php echo $ro->id . ':' . $row->id . ':' . $row->nim . ':' . $row->tahun . ':' . $row->semester; ?>"> <?php echo $ro->nama; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <select name="ketua" id="<?php echo 'mySelectKetua' . $row->id; ?>" class="form-control" onchange="<?php echo "myFunctionSetKetua(" . $row->id . ")"; ?>">
                                        <option value="<?php echo $row->nim . ': f'; ?>" selected="selected"> :: Pilih Ketua :: </option>
                                        <option value="<?php echo $row->nim . ': t' ?>"> Ketua </option>
                                    </select>
                                </div>
                            </td>
                            <td width="10%">
                                <div class="tooltip-demo">
                                    <a class="btn btn-outline btn-success" onclick="showDetail(<?php echo $row->id; ?>);" data-target="#myModal" data-toggle="tooltip" data-original-title="Detail File"><i class="fa fa-file-text"></i></a>
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
        <div class="modal-dialog" style="width: 80%;">
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
            url: '<?php echo base_url('daftar/kkl/detail'); ?>',
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

    function myFunction(id) {
        var nilai = document.getElementById("mySelect" + id).value;
        document.getElementById("nl" + id).disabled = false;
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('daftar/kkl/set_kelompok'); ?>",
            data: {
                id_kelompok: nilai
            },
            success: function(data) {
                $("#nl" + id).html(data);
                var demo = {
                    demo: $("nl" + id).val()
                };
            }
        });
    }

    function myFunctionSetKetua(id) {
        var ketua = document.getElementById("mySelectKetua" + id).value;
        document.getElementById("kl" + id).disabled = false;
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('daftar/kkl/set_ketua'); ?>",
            data: {
                ketua: ketua
            },
            success: function(data) {
                $("#kl" + id).html(data);
                var demo = {
                    demo: $("kl" + id).val()
                };
            }
        });
    }
</script>