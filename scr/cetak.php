<?php include "header.php";
if (empty($_SESSION['auth'])){header("location:login");} 
?>
<div class="grey">
    <div class="container" style="min-height: 500px;">
        <div class="row boxr">
            <h4>Cetak Form<div class="pull-right circle"><a data-toggle="tooltip" data-placement="top" title="Edit" href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></div></h4>
            <hr />
            <div class="col-md-8 col-xs-18">
                <form class="form-horizontal">
                    <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                        <label for="37" class="col-sm-4 control-label tleft">Kajur/Kaprodi/Kadep</label>
                        <div class="col-sm-6">
                            <p class="form-control-static">Dr. H. Misbahul Munir., Lc., Mei</p>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                        <label for="41" class="col-sm-4 control-label tleft">Kota</label>
                        <div class="col-sm-6">
                            <p class="form-control-static">Malang</p>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                        <label for="42" class="col-sm-4 control-label tleft">Tgl. Diserahkan</label>
                        <div class="col-sm-6">
                            <p class="form-control-static">12 November 2015</p>
                        </div>
                    </div>
                </form>
                <br />
                <br />
                <br />
                <div class="pull-right"><a class="btn btn-success disabled" href="" target="_blank" role="button"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</a> <a class="btn btn-info disabled" href="" role="button">Save as PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>