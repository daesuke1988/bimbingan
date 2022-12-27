<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Riwayat Bimbingan
        </div>
        <div class="panel-body">
            <?php
            $role = $this->session->userdata('group_id');
            if ($approv) {
            ?>
                <a class="btn btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Cetak Riwayat Bimbingan" href="<?php echo base_url(); ?>bimbingan/kkl/cetak_pdf_bimbingan_kelompok/<?php echo urlencode(base64_encode($id_kelompok_kkl)); ?>" target="_blank">
                    <i class="fa fa-print"></i> Cetak Bimbingan
                </a>
                <a class="btn btn-default" data-placement="top" data-toggle="tooltip" data-original-title="Kembali" href="javascript:window.history.go(-1);">
                    <i class="fa fa-mail-reply"></i> Kembali
                </a>
                <?php
            } else {
                if ($role == '4') {
                    if (strtotime($sk['end']) >= strtotime(date("d-m-Y"))) {
                ?>
                        <form method="post" action="<?php echo base_url(); ?>bimbingan/kkl/acc_kelompok" enctype="multipart/form-data">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal_dosen">
                                <i class="fa fa-comments"></i> Bimbingan Dosen
                            </button>
                            <?php
                            if ($count['total'] >= '12') {
                            ?>
                                <input type="hidden" name="id_kelompok_kkl" value="<?php echo $id_kelompok_kkl; ?>">
                                <button class="btn btn-info" type="submit">Acc <i class="fa fa-arrow-circle-right"></i></button>
                            <?php
                            }
                            ?>
                            <a class="btn btn-default" data-placement="top" data-toggle="tooltip" data-original-title="Kembali" href="javascript:window.history.go(-1);">
                                <i class="fa fa-mail-reply"></i> Kembali
                            </a>
                        </form>
            <?php
                    } else {
                        echo '<div class="alert alert-warning">
                        Waktu Bimbingan Telah Berakhir.
                    </div>';
                    }
                } elseif ($role == '5') {
                    if (strtotime($sk['end']) >= strtotime(date("d-m-Y"))) {
                        echo '<td width="8%"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal5">
                        <i class="fa fa-book"></i> Bimbingan
                        </button></td>';
                    }
                }
            }
            ?>

            <?php
            if (strtotime($sk['end']) < strtotime(date("d-m-Y"))) {
                echo '<div class="alert alert-warning">
                                    Waktu Bimbingan Telah Berakhir.
                                </div>';
            }
            ?>
            <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="width: 80%;">
                    <div class="modal-content">
                        <form method="post" action="<?php echo base_url(); ?>bimbingan/kkl/insert_kelompok" enctype="multipart/form-data">
                            <input type="hidden" name="id_kelompok_kkl" value="<?php echo $id_kelompok_kkl; ?>">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">Form Bimbingan</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Kategori Bimbingan</label>
                                    <select name='id_kategori' class="chosen-select">
                                        <option value='i'>Individu</option>
                                        <option value='k'>Kelompok</option>
                                    </select>
                                    <span class="form-text m-b-none">
                                        <font color="red">wajib diisi.*</font>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label>Catatan </label>
                                    <textarea type="text" class="form-control" name="catatan" placeholder="Isikan Catatan" value="" required><?php echo $this->input->post('catatan'); ?></textarea>
                                    <span class="form-text m-b-none">
                                        <font color="red">wajib diisi.*</font>
                                    </span>
                                    <?php echo form_error('catatan') ?>
                                </div>
                                <div class="form-group">
                                    <label>Upload Dokumen </label>
                                    <div class="custom-file">
                                        <input type="file" name="file_pendukung" class="form-control">
                                    </div>
                                    <?php echo @$error_upload; ?>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal inmodal fade" id="myModal_dosen" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="width: 80%;">
                    <div class="modal-content">
                        <form method="post" action="<?php echo base_url(); ?>bimbingan/kkl/insert_kelompok" enctype="multipart/form-data">
                            <input type="hidden" name="id_kelompok_kkl" value="<?php echo $id_kelompok_kkl; ?>">
                            <input type="hidden" name="id_kategori" value="k">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">Form Bimbingan</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Catatan </label>
                                    <textarea type="text" class="form-control" name="catatan" placeholder="Isikan Catatan" value="" required><?php echo $this->input->post('catatan'); ?></textarea>
                                    <span class="form-text m-b-none">
                                        <font color="red">wajib diisi.*</font>
                                    </span>
                                    <?php echo form_error('catatan') ?>
                                </div>
                                <div class="form-group">
                                    <label>Upload Dokumen </label>
                                    <div class="custom-file">
                                        <input type="file" name="file_pendukung" class="form-control">
                                    </div>
                                    <?php echo @$error_upload; ?>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php
            if ($this->session->flashdata('message')) {
                echo "<i>" . $this->session->flashdata('message') . "</i>";
            }
            echo @$error_upload;
            ?>
            <div class="hr-line-dashed"></div>
            <strong>
                <h2><i class="fa text-success">Catatan Bimbingan KKL Kelompok </i></h2>
            </strong>
            <strong>
                <h3>Jumlah Bimbingan : <?php echo $count['total']; ?> Kali </h3>
            </strong>
            <div class="hr-line-dashed"></div>
            <div class="alert alert-warning">
                <b>Bimbingan pada tanggal yang sama dihitung 1 kali bimbingan !!!</b>
            </div>
            <div id="vertical-timeline" class="vertical-container dark-timeline">
                <?php
                foreach ($bimbingan->result() as $row) {
                    $id_user = $this->session->userdata('id_user');
                    if ($role == '5') {
                ?>
                        <div class="vertical-timeline-block">
                            <?php
                            if (($row->id_kategori == 'i') && ($row->id_user == $id_user)) {
                            ?>
                                <div class="vertical-timeline-icon navy-bg">
                                    <i class="fa fa fa-comments"></i>
                                </div>
                                <div class="vertical-timeline-content">
                                    <h2><?php echo $row->nama_lengkap; ?> - <?php echo ($row->id_kategori == 'i') ? 'Bimbingan Individu' : 'Bimbingan Kelompok'; ?></h2>
                                    <p><?php echo $row->catatan; ?></p>
                                    <?php
                                    if (!is_null($row->image)) {
                                    ?>
                                        <a class="btn btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>bimbingan/kkl/download_file_bimbingan_kelompok/<?php echo $row->id_bimbingan_kelompok; ?>">
                                            <i class="fa fa-download"> Download document</i>
                                        </a>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if ($role == '4' || $role == '5') {
                                    ?>
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#komentar">
                                            <i class="fa fa-comments"></i> Komentar
                                        </button>
                                    <?php
                                    } ?>
                                    <span class="vertical-date">
                                        <small><?php echo longdate_indo(date("Y-m-d", strtotime($row->date))) ?></small>
                                    </span>

                                    <div class="modal inmodal fade" id="komentar" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <form method="post" action="<?php echo base_url(); ?>bimbingan/kkl/insert_komentar" enctype="multipart/form-data">
                                                    <input type="hidden" name="id_kelompok_kkl" value="<?php echo $id_kelompok_kkl; ?>">
                                                    <input type="hidden" name="id_bimbingan_kkl_kelompok" value="<?php echo $row->id_bimbingan_kelompok; ?>">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h4 class="modal-title">Form Komentar</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Komentar </label>
                                                            <textarea type="text" class="form-control" name="komentar" placeholder="Isikan Komentar" value="" required><?php echo $this->input->post('komentar'); ?></textarea>
                                                            <span class="form-text m-b-none">
                                                                <font color="red">wajib diisi.*</font>
                                                            </span>
                                                            <?php echo form_error('komentar') ?>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <br />
                                    <br />
                                    <?php
                                    $komentar = $this->kklmodels->find_komentar($row->id_bimbingan_kelompok);
                                    if (!empty($komentar)) {
                                        foreach ($komentar->result() as $kmn) {
                                    ?>
                                            <div class="message">
                                                <a class="message-author" href="#"> <?php echo  $kmn->nama_lengkap ?> </a>
                                                <span class="message-date"> <span class="label label-info"><?php echo $kmn->date ?></span> </span>
                                                <span class="message-content">
                                                    <?php echo $kmn->komentar ?>
                                                </span>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <?php
                            } else {
                                if (($row->id_kategori == 'k')) {
                                ?>
                                    <?php
                                    if ($row->role == '5') {
                                    ?>
                                        <div class="vertical-timeline-icon blue-bg">
                                            <i class="fa fa-file-text"></i>
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="vertical-timeline-icon yellow-bg">
                                            <i class="fa fa-user-md"></i>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                    <div class="vertical-timeline-content">
                                        <h2><?php echo $row->nama_lengkap; ?> - <?php echo ($row->id_kategori == 'i') ? 'Bimbingan Individu' : 'Bimbingan Kelompok'; ?></h2>
                                        <p><?php echo $row->catatan; ?></p>
                                        <?php
                                        if (!is_null($row->image)) {
                                        ?>
                                            <a class="btn btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>bimbingan/kkl/download_file_bimbingan_kelompok/<?php echo $row->id_bimbingan_kelompok; ?>">
                                                <i class="fa fa-download"> Download document</i>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                        <span class="vertical-date">
                                            <small><?php echo longdate_indo(date("Y-m-d", strtotime($row->date))) ?></small>
                                        </span>
                                    </div>
                            <?php
                                }
                            }
                            ?>

                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="vertical-timeline-block">
                            <?php
                            if ($row->id_kategori == 'i') {
                            ?>
                                <div class="vertical-timeline-icon navy-bg">
                                    <i class="fa fa fa-comments"></i>
                                </div>
                                <div class="vertical-timeline-content">
                                    <h2><?php echo $row->nama_lengkap; ?> - <?php echo ($row->id_kategori == 'i') ? 'Bimbingan Individu' : 'Bimbingan Kelompok'; ?></h2>
                                    <p><?php echo $row->catatan; ?></p>
                                    <?php
                                    if (!is_null($row->image)) {
                                    ?>
                                        <a class="btn btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>bimbingan/kkl/download_file_bimbingan_kelompok/<?php echo $row->id_bimbingan_kelompok; ?>">
                                            <i class="fa fa-download"> Download document</i>
                                        </a>
                                    <?php
                                    }
                                    ?>
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#komentar">
                                        <i class="fa fa-comments"></i> Komentar
                                    </button>
                                    <span class="vertical-date">
                                        <small><?php echo longdate_indo(date("Y-m-d", strtotime($row->date))) ?></small>
                                    </span>

                                    <div class="modal inmodal fade" id="komentar" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <form method="post" action="<?php echo base_url(); ?>bimbingan/kkl/insert_komentar" enctype="multipart/form-data">
                                                    <input type="hidden" name="id_kelompok_kkl" value="<?php echo $id_kelompok_kkl; ?>">
                                                    <input type="hidden" name="id_bimbingan_kkl_kelompok" value="<?php echo $row->id_bimbingan_kelompok; ?>">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h4 class="modal-title">Form Komentar</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Komentar </label>
                                                            <textarea type="text" class="form-control" name="komentar" placeholder="Isikan Komentar" value="" required><?php echo $this->input->post('komentar'); ?></textarea>
                                                            <span class="form-text m-b-none">
                                                                <font color="red">wajib diisi.*</font>
                                                            </span>
                                                            <?php echo form_error('komentar') ?>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <br />
                                    <br />
                                    <?php
                                    $komentar = $this->kklmodels->find_komentar($row->id_bimbingan_kelompok);
                                    if (!empty($komentar)) {
                                        foreach ($komentar->result() as $kmn) {
                                    ?>
                                            <div class="message">
                                                <a class="message-author" href="#"> <?php echo  $kmn->nama_lengkap ?> </a>
                                                <span class="message-date"> <span class="label label-info"><?php echo $kmn->date ?></span> </span>
                                                <span class="message-content">
                                                    <?php echo $kmn->komentar ?>
                                                </span>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            <?php
                            } else {
                            ?>
                                <?php
                                if ($row->role == '5') {
                                ?>
                                    <div class="vertical-timeline-icon blue-bg">
                                        <i class="fa fa-users"></i>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="vertical-timeline-icon yellow-bg">
                                        <i class="fa fa-user-md"></i>
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="vertical-timeline-content">
                                    <h2><?php echo $row->nama_lengkap; ?> - <?php echo ($row->id_kategori == 'i') ? 'Bimbingan Individu' : 'Bimbingan Kelompok'; ?></h2>
                                    <p><?php echo $row->catatan; ?></p>
                                    <?php
                                    if (!is_null($row->image)) {
                                    ?>
                                        <a class="btn btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>bimbingan/kkl/download_file_bimbingan_kelompok/<?php echo $row->id_bimbingan_kelompok; ?>">
                                            <i class="fa fa-download"> Download document</i>
                                        </a>
                                    <?php
                                    }
                                    ?>
                                    <span class="vertical-date">
                                        <small><?php echo longdate_indo(date("Y-m-d", strtotime($row->date))) ?></small>
                                    </span>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>