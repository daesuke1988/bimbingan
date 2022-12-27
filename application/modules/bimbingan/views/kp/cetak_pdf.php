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
                <center><img alt="image" src="<?php echo $_SERVER["DOCUMENT_ROOT"]; ?>/assets/images/logo_elrahma.png" width="75%"></center>
            </td>
            <td>
                <center>
                    <font size="15">
                        Sekolah Tinggi Manajemen Informatika Dan Ilmu Komputer
                        <br />El Rahma Yogyakarta
                    </font>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    <h2 class="text-center">LEMBAR KONSULTASI KERJA PRAKTEK</h2>
                </center>
            </td>
        </tr>
    </table>
    <table class="table1">
        <tr>
            <td width=" 30%">Nama</td>
            <td width="5%">
                <center>:</center>
            </td>
            <td><?php echo $kp['nama'] ?></td>
            <td rowspan="5" width="20%">
                <center><img alt="image" src="<?php echo base_url(); ?>assets/images/logo_elrahma.png" width="50%"></center>
            </td>
        </tr>
        <tr>
            <td>No. Mahasiswa</td>
            <td>
                <center>:</center>
            </td>
            <td><?php echo $kp['nim'] ?></td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>
                <center>:</center>
            </td>
            <td><?php echo $kp['nm_prodi'] ?></td>
        </tr>
        <tr>
            <td>Pembimbing</td>
            <td>
                <center>:</center>
            </td>
            <td><?php echo $kp['dosen'] ?></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>
                <center>:</center>
            </td>
            <td><?php echo $kp['judul'] ?></td>
        </tr>
    </table>
    <table class="table1">
        <tr>
            <th style="border: 1px solid #999" width="8%">No</th>
            <th style="border: 1px solid #999" width="25%">Tanggal</th>
            <th style="border: 1px solid #999">Catatan Konsultasi</th>
            <th style="border: 1px solid #999" width="20%">Paraf</th>
        </tr>
        <?php
        $i = 1;
        foreach ($bimbingan->result() as $row) {
        ?>
            <tr>
                <td align="center" style="border: 1px solid #999"><?php echo $i++; ?></td>
                <td align="center" style="border: 1px solid #999"><?php echo date_indo(date("Y-m-d", strtotime($row->date))); ?></td>
                <td style="border: 1px solid #999"><?php echo $row->catatan; ?></td>
                <td style="border: 1px solid #999"></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <table width='100%'>
        <tr>
            <td width='50%'></td>
            <td align="center">Dosen Pembimbing &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td width='50%'></td>
            <td align="center"><br><br><br><?php echo $kp['dosen'] ?><br><?php echo 'NPP. ' . $kp['npp_dosen'] ?></td>
        </tr>
    </table>
</body>

</html>