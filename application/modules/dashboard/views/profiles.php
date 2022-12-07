<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><i class="fa fa-list"></i> Detail Profile </h5>
                    <div class="ibox-tools">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="animated fadeInRightBig">
                                <?php
                                if(!is_null($konselor['image'])){
                                    ?>
                                    <center><p><span><img alt='image' class='' src="<?php echo base_url('').$konselor['image'];?>" height='200px' width='200px'></span></p></center>
                                    <?php
                                }else{
                                    ?>
                                    <center><p><?php echo $this->master_models->image_pegawai($konselor['email']); ?></p></center>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="table table-responsive">
                                <table class="table table-striped table-bordered">
                                    <tr class="info">
                                        <th colspan="2">Data Profile</th>
                                    </tr>
                                    <tr>
                                        <td width="15%">Nama</td>
                                        <td><h4 class="no-margins"><?php echo $this->master_models->nama_dosen($konselor['email']); ?></h4></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><h4 class="no-margins"><?php echo $konselor['email'];?></h4></td>
                                    </tr>
                                    <tr>
                                        <td>Keahlian</td>
                                        <td><h4 class="no-margins"><?php echo $konselor['keahlian'];?></h4></td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td><h4 class="no-margins"><?php echo $konselor['deskripsi'];?></h4></td>
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
