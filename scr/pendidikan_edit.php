<?php include "header.php";
if (empty($_SESSION['auth'])){header("location:login");} 
?>
<div class="grey">
    <div class="container">
        <div class="row boxr">
            <h4>EDIT - Kinerja Bidang Pendidikan<div class="pull-right circle"><a data-toggle="tooltip" data-placement="top" title="Back" href="pendidikan"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></a></div></h4>
            <hr />
            <div class="col-md-8 col-xs-18">
                <form class="form-horizontal" role="form" method="post" data-toggle="validator">
                    <div class="form-group">
                        <label for="5" class="col-sm-4 control-label ">JENIS KEGIATAN<span class="required">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="5" id="5" placeholder="JENIS KEGIATAN " aria-describedby="5" value="Mengajar Mata Kuliah MSDM" required /><span id="5" class="help-block"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="7" class="col-sm-4 control-label ">BUKTI PENUGASAN<span class="required">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="7" id="7" placeholder="BUKTI PENUGASAN " aria-describedby="7" value="SK Rektor" required /><span id="7" class="help-block"> * Beban Kerja</span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="8" class="col-sm-4 control-label ">SKS<span class="required">*</span>
                        </label>
                        <div class="col-sm-4">
                            <input class="form-control" type="number" name="8" id="8" placeholder="SKS " aria-describedby="8" value="3" required /><span id="8" class="help-block"> * Beban Kerja</span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="9" class="col-sm-4 control-label ">MASA PENUGASAN<span class="required">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="9" id="9" placeholder="MASA PENUGASAN " aria-describedby="9" value="2 Semester" required /><span id="9" class="help-block"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <button class="btn btn-info pull-right" type="submit"><span class="glyphicon glyphicon-floppy-open" aria-hidden="true"></span> Update</button>
                </form>
                <form role="form" method="post">
                    <button style="margin-top: 0px;" class="btn btn-danger" name="delete" id="delete" type="submit"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</button>
                </form>
                <br />
                <br />
                <br /> </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>