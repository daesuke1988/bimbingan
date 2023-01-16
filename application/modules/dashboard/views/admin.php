<link href="<?php echo base_url(); ?>assets/css/plugins/c3/c3.min.css" rel="stylesheet">

<div class="panel panel-primary">
    <div class="panel-heading">
        :: Data Bimbingan Tahun Ajaran Aktif
    </div>
    <div class="panel-body">
        <div class="tabs-container">
            <ul class="nav nav-tabs" role="tablist">
                <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Kerja Praktek </a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-2">Skripsi</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-3">KKL Individu</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-4">KKL Kelompok</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" id="tab-1" class="tab-pane active">
                    <div class="panel-body">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">:: Chart Kerja Praktek</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="dataTable_wrapper">
                                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Status</th>
                                                        <th>Jumlah</th>
                                                        <th>Persentase</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                $data = array();
                                                $total = 0;
                                                foreach ($chart->result() as $r) {
                                                    $chart_value[] = array($r->label, (int) $r->jml);
                                                    $data[$r->label] = (int) $r->jml;
                                                    $total += $r->jml;
                                                }
                                                foreach ($data as $k => $r) {
                                                ?>
                                                    <tr>
                                                        <td align="center"><?php echo $k; ?></td>
                                                        <td align="center"><?php echo $r; ?></td>
                                                        <td align="center"><?php echo round($r / $total * 100, 2); ?>%</td>
                                                    </tr>
                                                <?php
                                                    $data_chart_value = json_encode($chart_value);
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div>
                                        <div id="pie"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" id="tab-2" class="tab-pane">
                    <div class="panel-body">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">:: Chart Skripsi</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="dataTable_wrapper">
                                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Status</th>
                                                        <th>Jumlah</th>
                                                        <th>Persentase</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                $data = array();
                                                $total = 0;
                                                foreach ($skripsi->result() as $s) {
                                                    $chart_skripsi_value[] = array($s->label, (int) $s->jml);
                                                    $data[$s->label] = (int) $s->jml;
                                                    $total += $s->jml;
                                                }
                                                foreach ($data as $k => $s) {
                                                ?>
                                                    <tr>
                                                        <td align="center"><?php echo $k; ?></td>
                                                        <td align="center"><?php echo $s; ?></td>
                                                        <td align="center"><?php echo round($s / $total * 100, 2); ?>%</td>
                                                    </tr>
                                                <?php
                                                    $data_chart_skripsi_value = json_encode($chart_skripsi_value);
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div>
                                        <div id="skripsi"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" id="tab-3" class="tab-pane">
                    <div class="panel-body">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">:: Chart KKL Individu</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="dataTable_wrapper">
                                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Status</th>
                                                        <th>Jumlah</th>
                                                        <th>Persentase</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                $data = array();
                                                $total = 0;
                                                foreach ($individu->result() as $s) {
                                                    $chart_individu_value[] = array($s->label, (int) $s->jml);
                                                    $data[$s->label] = (int) $s->jml;
                                                    $total += $s->jml;
                                                }
                                                foreach ($data as $k => $s) {
                                                ?>
                                                    <tr>
                                                        <td align="center"><?php echo $k; ?></td>
                                                        <td align="center"><?php echo $s; ?></td>
                                                        <td align="center"><?php echo round($s / $total * 100, 2); ?>%</td>
                                                    </tr>
                                                <?php
                                                    $data_chart_individu_value = json_encode($chart_individu_value);
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div>
                                        <div id="individu"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" id="tab-4" class="tab-pane">
                    <div class="panel-body">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">:: Chart KKL Kelompok</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="dataTable_wrapper">
                                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Status</th>
                                                        <th>Jumlah</th>
                                                        <th>Persentase</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                $data = array();
                                                $total = 0;
                                                foreach ($kelompok->result() as $s) {
                                                    $chart_kelompok_value[] = array($s->label, (int) $s->jml);
                                                    $data[$s->label] = (int) $s->jml;
                                                    $total += $s->jml;
                                                }
                                                foreach ($data as $k => $s) {
                                                ?>
                                                    <tr>
                                                        <td align="center"><?php echo $k; ?></td>
                                                        <td align="center"><?php echo $s; ?></td>
                                                        <td align="center"><?php echo round($s / $total * 100, 2); ?>%</td>
                                                    </tr>
                                                <?php
                                                    $data_chart_kelompok_value = json_encode($chart_individu_value);
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div>
                                        <div id="kelompok"></div>
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

<!-- Mainly scripts -->
<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<!-- d3 and c3 charts -->
<script src="<?php echo base_url(); ?>assets/js/plugins/d3/d3.min.js"></script>
<script>
    $(document).ready(function() {
        c3.generate({
            bindto: '#pie',
            data: {
                columns: <?php echo $data_chart_value; ?>,
                colors: {
                    data1: '#1ab394',
                    data2: '#BABABA'
                },
                type: 'pie'
            }
        });

        c3.generate({
            bindto: '#skripsi',
            data: {
                columns: <?php echo $data_chart_skripsi_value; ?>,
                colors: {
                    data1: '#1ab394',
                    data2: '#BABABA'
                },
                type: 'pie'
            }
        });

        c3.generate({
            bindto: '#individu',
            data: {
                columns: <?php echo $data_chart_individu_value; ?>,
                colors: {
                    data1: '#1ab394',
                    data2: '#BABABA'
                },
                type: 'pie'
            }
        });

        // c3.generate({
        //     bindto: '#kelompok',
        //     data: {
        //         columns: <?php //echo $data_chart_kelompok_value; 
                            ?>,
        //         colors: {
        //             data1: '#1ab394',
        //             data2: '#BABABA'
        //         },
        //         type: 'pie'
        //     }
        // });

    });
</script>