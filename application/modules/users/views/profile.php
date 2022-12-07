<div class="wrapper wrapper-content animated fadeInRight">
<?php $row = $user->row();?>

<div class="ibox-content">
<?php
$nama =explode('@',$row->email)[1];
if($nama == 'uny.ac.id'){
    ?>
    <a class="btn btn-primary" href="<?=base_url()?>setting/edit_user_setting"> <i class="fa fa-pencil-square-o teal"></i> Ubah data User</a>
    <div class="row m-b-lg m-t-lg">
        <div class="col-md-6">
            <div class="profile-image">
                <img alt="image" class="" src="<?php echo base_url('').$row->image;?>" width="48px" height="48px"/>
            </div>
            <div class="profile-info">
                <div class="">
                    <div>
                        <table width="100%">
                            <tr>
                                <td width="15%">Nama</td>
                                <td width="5%"> : </td>
                                <td><h4 class="no-margins"><?php echo $this->master_models->nama_dosen($row->email); ?></h4></td>
                            </tr>
                            <tr>
                                <td>Email</td><td> : </td>
                                <td><h4 class="no-margins"><?php echo $row->email;?></h4></td>
                            </tr>
                            <tr>
                                <td>Keahlian</td><td> : </td>
                                <td><h4 class="no-margins"><?php echo $row->keahlian;?></h4></td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td><td> : </td>
                                <td><h4 class="no-margins"><?php echo $row->deskripsi;?></h4></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}else{
    ?>
    <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><i class="fa fa-list"></i> Biodata Mahasiswa </h5>
                    <div class="ibox-tools">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <?php $biodata_mhs = $this->master_models->nama_mahasiswa();?>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="animated fadeInRightBig">
                                <?php
                                echo "<img src='https://registrasi.uny.ac.id/upload/" . $biodata_mhs['angkatan'] . "/" . $biodata_mhs['nim'] . ".jpg' >";
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="table table-responsive">
                                <table class="table table-striped table-bordered">
                                    <tr class="info">
                                        <th colspan="2">Data Mahasiswa</th>
                                    </tr>
                                    <tr>
                                        <th>NIM</th>
                                        <td><?php echo $biodata_mhs['nim'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td><?php echo $biodata_mhs['nama_mhs'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Email Student</th>
                                        <td><?php echo $biodata_mhs['email_uny'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Kelompok Bayar</th>
                                        <td><?php echo ($biodata_mhs['id_kelompok_bayar'] == 35) ? 'BIDIKMISI' : 'NON BIDIKMISI';?></td>
                                    </tr>
                                    <tr>
                                        <th>Angkatan</th>
                                        <td><?php echo $biodata_mhs['angkatan'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Fakultas</th>
                                        <td><?php echo $biodata_mhs['fakultas'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Program Studi</th>
                                        <td><?php echo $biodata_mhs['prodi'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Mahasiswa</th>
                                        <td><?php echo $biodata_mhs['jenis_mahasiswa'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Jalur Masuk</th>
                                        <td><?php echo $biodata_mhs['jalurmasuk'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Batas Studi</th>
                                        <td><?php echo $biodata_mhs['batas_studi'];?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
<?php
};?>
</div>
</div>


