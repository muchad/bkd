<?php include "header.php";
if (empty($_SESSION['auth'])){header("location:login");} 
?>
<div class="grey">
    <div class="container" style="min-height: 500px;">
        <div class="row boxr">
            <h4>Kinerja Bidang Pendidikan<div class="pull-right circle"><a data-toggle="tooltip" data-placement="top" title="New" href="pendidikan-new"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></div></h4>
            <hr />
            <div class="col-md-12 col-xs-18">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover orange">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Jenis Kegiatan</th>
                                <th colspan="2">Beban Kerja</th>
                                <th rowspan="2">Masa Penugasan</th>
                            </tr>
                            <tr>
                                <th>Bukti Penugasan</th>
                                <th>SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="pendidikan-edit">Mengajar Mata Kuliah MSDM</a>
                                </td>
                                <td>SK Rektor
                                </td>
                                <td>3</td>
                                <td>2 Semester</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="#">Mengajar Mata Kuliah Manajemen Stratejik</a>
                                </td>
                                <td>SK Rektor
                                </td>
                                <td>2</td>
                                <td>1 Tahun</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>