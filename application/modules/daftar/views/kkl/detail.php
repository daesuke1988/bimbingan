<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

<div class="wrapper wrapper-content animated fadeIn">
    <div class="wrapper wrapper-content animated fadeIn">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    :: Detail Formulir Pendaftaran Kuliah Kerja Lapangan
                </div>
                <div class="panel-body">
                    <div class="col-lg-5">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Biodata Mahasiswa
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label><img alt="image" class="feed-photo" style="width: 50%;" src="<?php echo base_url(); ?>assets/img/gallery/12.jpg"></label>
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" value="<?php echo $profile['nm_mhs']; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>No. Mahasiswa</label>
                                    <input type="text" class="form-control" value="<?php echo $profile['nim']; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Program Studi</label>
                                    <input type="text" class="form-control" value="<?php echo $profile['nm_prodi']; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>SKS Total</label>
                                    <input type="text" class="form-control" value="<?php echo $akademik['sks_total']; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>IPK</label>
                                    <input type="text" class="form-control" value="<?php echo round($akademik['ipk'], 2); ?>" disabled>
                                </div>
                                <!-- <div class="form-group">
                                        <label>Tahun Akademik</label>
                                        <input type="text" class="form-control" value="<?php //echo $krs['tahun']; 
                                                                                        ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Pengambilan Semester</label>
                                        <input type="text" class="form-control" value="<?php //echo ($krs['semester'] == '1') ? 'Ganjil' : 'Genap'; 
                                                                                        ?>" disabled>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Formulir Pendaftaran Kuliah Kerja Lapangan
                            </div>
                            <div class="panel-body">
                                <?php
                                if ($this->session->flashdata('message')) {
                                    echo "<i>" . $this->session->flashdata('message') . "</i>";
                                }
                                ?>
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Rencana Judul Kuliah Kerja Lapangan</label>
                                        <input type="text" class="form-control" name="judul" placeholder="Masukan Rencana Judul Kuliah Kerja Lapangan" value="<?php echo $pengajuan['judul']; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Lokasi Kuliah Kerja Lapangan </label>
                                        <textarea type="text" class="form-control" name="lokasi" placeholder="Lokasi Kuliah Kerja Lapangan" disabled> <?php echo $pengajuan['lokasi']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Rencana Lokasi Kuliah Kerja Lapangan </label>
                                        <textarea type="text" class="form-control" name="alamat_kkl" placeholder="Masukan Alamat Rencana Lokasi Kuliah Kerja Lapangan" disabled> <?php echo $pengajuan['alamat_kkl']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon yang dapat dihubungi </label>
                                        <input type="number" class="form-control" name="telpon" placeholder="Masukan Nomor Telpon Aktif" value="<?php echo $pengajuan['telpon']; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat </label>
                                        <textarea type="text" class="form-control" name="alamat_dihub" placeholder="Alamat yang bisa dihubungi" value="" disabled><?php echo $pengajuan['alamat_dihub']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Kemampuan </label>
                                        <textarea type="text" class="form-control" name="" placeholder="Alamat yang bisa dihubungi" value="" disabled><?php echo $pengajuan['kemampuan']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun </label>
                                        <input type="number" class="form-control" name="tahun" placeholder="Masukan Tahun Aktif" value="<?php echo $pengajuan['tahun']; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester </label>
                                        <input type="text" class="form-control" name="tahun" placeholder="Masukan Tahun Aktif" value="<?php echo ($pengajuan['semester'] == '1') ? 'Ganjil' : 'Genap'; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori KKL</label>
                                        <input type="text" class="form-control" name="tahun" placeholder="Masukan Tahun Aktif" value="<?php echo ($pengajuan['kategori'] == 'i') ? 'Individu' : 'Kelompok'; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Kelas</label>
                                        <input type="text" class="form-control" name="tahun" placeholder="Masukan Tahun Aktif" value="<?php echo $pengajuan['kelas']; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Dokumen Pendukung </label>
                                        <?php
                                        if (!is_null($pengajuan['image'])) { ?>
                                            <div class="tooltip-demo">
                                                <a class="btn btn-outline btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>daftar/kkl/download/<?php echo $pengajuan['id']; ?>">
                                                    <i class="fa fa-download"> Download</i>
                                                </a>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>