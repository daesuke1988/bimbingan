<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-gear"></i> Set Privilledge
                </div>
                <div class="panel-body">
                    <?php
                    echo $this->session->flashdata('saveprivilege');
                    echo form_open('groups/create_privilege/' . $group_id);
                    ?>
                    <div class="portlet-body">
                        <div id="MyTree4" class="tree tree-plus-minus tree-solid-line tree-unselectable">
                            <?php
                            _render_function_manage_priviledge($list_data);
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2">
                        <?php
                        echo form_submit('update', 'Update', 'class = "btn btn-success"');
                        echo "<a class='btn btn-default' data-placement='top' data-toggle='tooltip' data-original-title='Kembali'  href='javascript:window.history.go(-1);'>
                                <i class='fa fa-mail-reply'></i> Kembali
                                </a>";
                        echo form_close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fuelux/css/tree-metronic.css" />
<script src="<?php echo base_url(); ?>assets/fuelux/js/tree.min.js" type="text/javascript"></script>
<script>
    var DataSourceTree = function(options) {
        this._data = options.data;
        this._delay = options.delay;
    };

    DataSourceTree.prototype = {
        data: function(options, callback) {
            var self = this;
            setTimeout(function() {
                var data = $.extend(true, [], self._data);
                callback({
                    data: data
                });
            }, this._delay)
        }
    };

    var treeDataSource4 = new DataSourceTree({
        data: [],
        delay: 400
    });

    $(document).ready(function() {

        $('#MyTree4').tree({
            selectable: false,
            dataSource: treeDataSource4,
            loadingHTML: '<img src="<?php echo base_url(); ?>assets/img/loading.gif"/>',
        });
    });
</script>