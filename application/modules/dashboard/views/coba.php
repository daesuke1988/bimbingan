<html>

<head>
    <title>Aplikasi WEB</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jquery.js"></script>
</head>

<body>
    <div class="bingkai">
        <div class="header">
            <h1>Aplikasi Berbasis Web</h1>
            <p>Mata Kuliah Sistem Informasi Manajemen</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=tentang">Tentang</a></li>
                <li><a href="index.php?page=kontak">Kontak</a></li>
            </ul>
        </div>
        <div class="badan">
            <div class="sidebar">
                <ul>
                    <li><a href="index.php?page=list-mahasiswa">Data Mahasiswa</a></li>
                    <li><a href="">Data Dosen</a></li>
                </ul>
            </div>
            <div class="content">
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    switch ($page) {
                        case 'home':
                            include "halaman/home.php";
                            break;
                        case 'tentang':
                            include "halaman/tentang.php";
                            break;
                        case 'kontak':
                            include "halaman/kontak.php";
                            break;
                        case 'list-mahasiswa':
                            include "crud/list-mahasiswa.php";
                            break;
                        case 'form-tambah':
                            include "crud/form-tambah.php";
                            break;
                        case 'proses-tambah':
                            include "crud/proses-tambah.php";
                            break;
                        case 'form-edit':
                            include "crud/form-edit.php";
                            break;
                        case 'proses-edit':
                            include "crud/proses-edit.php";
                            break;
                        case 'hapus':
                            include "crud/hapus.php";
                            break;
                        default:
                            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                            break;
                    }
                } else {
                    include "halaman/home.php";
                } ?>
            </div>
        </div>
        <div class="clear"></div>
        <div class="footer">
            Footer
        </div>
    </div>
</body>

</html>