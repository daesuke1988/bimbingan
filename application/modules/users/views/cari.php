<script src="<?php echo base_url()?>assets/js/jquery-2.0.3.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        function search(){
            var strcari = $("#txtcari").val();
            if(strcari != "")
            {
                $("#hasil").html("<div class='progress progress-striped active'><div style='width: 100%' aria-valuemax='100' aria-valuemin='0' aria-valuenow='50' role='progressbar' class='progress-bar progress-bar-success'></div></div>")
                $.ajax({
                    type:"post",
                    url:"<?php echo base_url().'users/search';?>",
                    data:"keyword="+ strcari,
                    success:function(data){
                        $("#hasil").html(data);
                        $("#txtcari").val("");
                    }
                });
            }
        }

        $("#button").click(function(){
            search();
        })
    });
</script>

<a class="btn btn-primary" href="<?=base_url()?>users/insert"> <i class="fa fa-plus-square"></i> Tambah User</a>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><i class="fa fa-search"></i> Pencarian User</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-field-1"> Keyword </label>
                            <div class="col-sm-7">
                                <input id="txtcari" class="form-control" type="text" name="keyword" placeholder="masukan pencarian" value="">
                            </div>
                            <div class="col-sm-2">
                                <input type="button" id="button" value="Cari" class="btn btn-primary"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="hasil"></div>