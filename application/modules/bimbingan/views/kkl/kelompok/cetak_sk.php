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
            border: 1px solid #999;
            /* background: #fff;
            color: #fff; */
        }
    </style>
</head>

<body>
    <table class="table1">
        <tr>
            <td width="15%">
                <center><img alt="image" src="<?php echo $_SERVER["DOCUMENT_ROOT"]; ?>/assets/images/logo_elrahma.png" width="75%"></center>
            </td>
            <td>
                <font size="15">
                    Sekolah Tinggi Manajemen Informatika Dan Ilmu Komputer
                </font><br />
                <font size="18" font-family="arial">
                    <strong>El Rahma Yogyakarta</strong>
                </font>
            </td>
        </tr>
    </table>
    <hr color="black">

    <strong>Lampiran SK KKL Nomor : ........ /KET/SKep/VI/2022</strong>
    <br>
    <br>
    <table class="table1">
        <tr>
            <th>Nama Kelompok</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Ketua</th>
            <th>Tahun</th>
            <th>Semester</th>
            <th>Dosen</th>
        </tr>
        <?php
        $i = 1;
        foreach ($bimbingan->result() as $row) {
        ?>
            <tr>
                <td style="border: 1px solid #999"><?php echo $row->nm_kelompok; ?></td>
                <td style="border: 1px solid #999"><?php echo $row->nim; ?></td>
                <td style="border: 1px solid #999"><?php echo $row->nama; ?></td>
                <td style="border: 1px solid #999"><?php echo ($row->ketua == 't') ? 'Ketua' : ''; ?></td>
                <td style="border: 1px solid #999"><?php echo $row->tahun; ?></td>
                <td style="border: 1px solid #999"><?php echo ($row->semester == '1') ? 'Ganjil' : 'Genap'; ?></td>
                <td style="border: 1px solid #999"><?php echo $row->dosen; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>