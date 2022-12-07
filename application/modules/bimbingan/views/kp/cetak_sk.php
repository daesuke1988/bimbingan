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
    <center>
        <strong>
            SURAT KEPUTUSAN KETUA PROGRAM STUDI INFORMATIKA<br />
            STMIK EL RAHMA YOGYAKARTA<br />
            Nomor : 06/Prodi-I/KP/X/22<br /><br />
            TENTANG : <br />PEMBIMBINGAN KP<strong>
    </center>
    <table class="table1">
        <tr>
            <td colspan="3">Ketua Program Studi Informatika STMIK El Rahma Yogyakarta, setelah;</td>
        </tr>
        <tr>
            <td width='10%'>Menimbang</td>
            <td width='3%'>:</td>
            <td>Bahwa untuk kelancaran pelaksanaan KP perlu adanya surat tugas pembimbingan</td>
        </tr>
        <tr>
            <td valign='top'>Mengingat</td>
            <td valign='top'>:</td>
            <td>1. Kurikulum STMIK El Rahma.<br />
                2. Peraturan pelaksanaan kegiatan akademik khususnya mengenai KP.<br />
                3. Peraturan-peraturan yang berlaku di Yayasan El Rahma. <br /></td>
        </tr>
        <tr>
            <td>Memperhatikan</td>
            <td>:</td>
            <td>Hasil pertemuan pimpinan STMIK El Rahma.</td>
        </tr>
    </table>
    <center><strong>MEMUTUSKAN</strong></center>
    <table class="table1">
        <tr>
            <td valign='top'>Menetapkan</td>
            <td valign='top'>:</td>
            <td align="justify" colspan="2">
                Surat tugas sebagai pembimbing KP kepada dosen yang ditunjuk untuk mahasiswa Informatika sebagaimana terlampir.
                Surat keputusan ini mulai berlaku sejak tanggal ditetapkan, disampaikan kepada yang bersangkutan untuk diketahui
                dan dilaksanakan sebagaimana mestinya dengan ketentuan akan ditinjau kembali apabila dipandang perlu.
            </td>
        </tr>
        <tr>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td align="center"> Ditetapkan di Yogyakarta <br /> Tanggal <?php echo date_indo(date('Y-m-d')); ?> <br /> Ketua Program Studi Informatika
                <br /><br /><br /><br /><br /> (Yuli Praptomo PHS, S.Kom.,M.Cs)
            </td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table class="table1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Dosen</th>
        </tr>
        <?php
        $i = 1;
        foreach ($bimbingan->result() as $row) {
        ?>
            <tr>
                <td style="border: 1px solid #999" width="5%"><?php echo $i++; ?></td>
                <td style="border: 1px solid #999" width="10%"><?php echo $row->nim; ?></td>
                <td style="border: 1px solid #999"><?php echo $row->nama; ?></td>
                <td style="border: 1px solid #999"><?php echo $row->dosen; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>