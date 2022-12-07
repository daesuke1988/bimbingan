<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Data KKL Individu
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <div class="form-group row">
                    <div class="col-sm-1">
                        <label class="col-form-label" for="cname">Filter</label>
                    </div>
                    <div class="col-sm-3">
                        <select name="tahun" id="tahun" class="form-control">
                            <option value=""> :: Pilih Tahun ::</option>
                            <option value="2021"> 2021 </option>
                            <option value="2022"> 2022 </option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="semester" id="semester" class="form-control">
                            <option value=""> :: Pilih Semester :: </option>
                            <option value="1"> Ganjil </option>
                            <option value="2"> Genap </option>
                        </select>
                    </div>
                </div>
                <hr color="green">
                <div id="result">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        load_data();

        function load_data(semester, tahun) {
            $.ajax({
                url: "<?php echo base_url(); ?>acc/result_kkl_individu",
                method: "POST",
                data: {
                    semester: semester,
                    tahun: tahun
                },
                success: function(data) {
                    $('#result').html(data);
                }
            })
        }

        $('#tahun').change(function() {
            var semester = $("#semester").val();
            var tahun = $("#tahun").val();
            load_data(semester, tahun)
        });

        $('#semester').change(function() {
            var semester = $("#semester").val();
            var tahun = $("#tahun").val();
            load_data(semester, tahun)
        });
    });
</script>