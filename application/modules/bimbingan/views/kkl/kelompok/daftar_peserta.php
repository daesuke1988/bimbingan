<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Daftar Peserta
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Mahasiswa</th>
                            <th>Nama</th>
                            <th>Tahun</th>
                            <th>Semester</th>
                            <th>Lokasi</th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    foreach ($daftar->result() as $row) {
                    ?> <tr>
                            <td width="5%"><?php echo $i++; ?></td>
                            <td><?php echo $row->nim; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->tahun; ?></td>
                            <td><?php echo ($row->semester == '1') ? 'Ganjil' : 'Genap'; ?></td>
                            <td><?php echo $row->lokasi; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>