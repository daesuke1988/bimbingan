<!DOCTYPE html>
<html>

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Dokumen Bimbingan</title>
    <style>
        .table1 {
            font-family: arial;
            color: #232323;
            border-collapse: collapse;
            width: 100%;
        }

        .table1,
        tr,
        th,
        td {
            border: 1px solid #fff;
            padding: 8px 8px;
        }

        .table1 tr th {
            background: #35A9DB;
            color: #fff;
        }
    </style>
</head>

<body>
    <table class="table1">
        <tr>
            <td rowspan="2" width="20%">
                <center><img alt="image" src="<?php echo base_url(); ?>/assets/images/logo_elrahma.png" width="50%"></center>
            </td>
            <td>
                <font size="6">
                    Sekolah Tinggi Manajemen Informatika Dan Ilmu Komputer
                    <br />El Rahma Yogyakarta
                </font>
            </td>
        </tr>
    </table>
    <hr color="black">
    <table class="table1">
        <tr>
            <td width="20%">Nama</td>
            <td width="5%">
                <center>:</center>
            </td>
            <td><?php echo $skripsi['nama'] ?></td>
        </tr>
        <tr>
            <td>No. Mahasiswa</td>
            <td>
                <center>:</center>
            </td>
            <td><?php echo $skripsi['nim'] ?></td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>
                <center>:</center>
            </td>
            <td><?php echo 'Informatika' ?></td>
        </tr>
        <tr>
            <td>Pembimbing</td>
            <td>
                <center>:</center>
            </td>
            <td><?php echo $skripsi['dosen'] ?></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>
                <center>:</center>
            </td>
            <td><?php echo $skripsi['tahun'] ?></td>
        </tr>
        <tr>
            <td>Semester</td>
            <td>
                <center>:</center>
            </td>
            <td><?php echo ($skripsi['semester'] == '1') ? 'Ganjil' : 'Genap'; ?></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>
                <center>:</center>
            </td>
            <td><?php echo $skripsi['judul'] ?></td>
        </tr>
        <tr>
            <td>Telpon</td>
            <td>
                <center>:</center>
            </td>
            <td><?php echo $skripsi['telpon'] ?></td>
        </tr>
        <tr>
            <td>Dokumen Syarat</td>
            <td>
                <center>:</center>
            </td>
            <td><?php
                if (!is_null($skripsi['image_syarat'])) { ?>
                    <div class="tooltip-demo">
                        <a class="btn btn-outline btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>daftar/skripsi/download/<?php echo $skripsi['id_skripsi']; ?>">
                            <i class="fa fa-download"> Download</i>
                        </a>
                    </div>
                <?php
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Dokumen Proposal</td>
            <td>
                <center>:</center>
            </td>
            <td><?php
                if (!is_null($skripsi['image_proposal'])) { ?>
                    <div class="tooltip-demo">
                        <a class="btn btn-outline btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>daftar/skripsi/download_proposal/<?php echo $skripsi['id_skripsi']; ?>">
                            <i class="fa fa-download"> Download</i>
                        </a>
                    </div>
                <?php
                }
                ?>
            </td>
        </tr>
    </table>
</body>

</html>