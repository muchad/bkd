<?php include "header.php";
if (empty($_SESSION['auth'])){header("location:login");} 
?>
<div class="grey">
    <div class="container">
        <div class="row boxr">
            <h4>EDIT - Identitas Dosen<div class="pull-right circle"><a data-toggle="tooltip" data-placement="top" title="Back" href="identitas"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></a></div></h4>
            <hr />
            <div class="col-md-8">
                <form class="form-horizontal" role="form" method="post" data-toggle="validator">
                    <div class="form-group">
                        <label for="13" class="col-sm-4 control-label ">No. Sertifikat</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="number" name="13" id="13" placeholder="No. Sertifikat " aria-describedby="13" value="102100213314236" /><span id="13" class="help-block">No. Sertifikat</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="14" class="col-sm-4 control-label ">NIP</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="number" name="14" id="14" placeholder="NIP " aria-describedby="14" value="196604121998031003" /><span id="14" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="15" class="col-sm-4 control-label ">NIDN</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="15" id="15" placeholder="NIDN " aria-describedby="15" value="20-1204-6601" /><span id="15" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="16" class="col-sm-4 control-label ">Nama</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="16" id="16" placeholder="Nama " aria-describedby="16" value="Ahmadi Ahmad" /><span id="16" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="17" class="col-sm-4 control-label ">Nama PT</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="17" id="17" placeholder="Nama PT " aria-describedby="17" value="Universitas Islam Negeri Maulana Malik Ibrahim Malang" /><span id="17" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="18" class="col-sm-4 control-label ">Alamat PT</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="18" id="18" placeholder="Alamat PT " aria-describedby="18" value="Jl. Gajayana No. 50 Malang 65144" /><span id="18" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="19" class="col-sm-4 control-label ">Fakultas/Departemen</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="19" id="19" placeholder="Fakultas/Departemen " aria-describedby="19" value="Ekonomi" /><span id="19" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="20" class="col-sm-4 control-label ">Prog. Studi</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="20" id="20" placeholder="Prog. Studi " aria-describedby="20" value="Manajemen" /><span id="20" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="21" class="col-sm-4 control-label ">Jab. Fungsional</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="21" id="21" placeholder="Jab. Fungsional " aria-describedby="21" value="Lektor Kepala" /><span id="21" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="34" class="col-sm-4 control-label ">Gol.</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="34" id="34" placeholder="Gol. " aria-describedby="34" value="Iva" /><span id="34" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="22" class="col-sm-4 control-label ">Tgl. Lahir</label>
                        <div class="col-sm-8">
                            <div class="input-group date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy" data-link-format="yyyy-mm-dd" data-link-field="22">
                                <input class="form-control" type="text" value="12 April 1966" readonly /><span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                            <input type="hidden" name="22" id="22" value="12 April 1966" />
                        </div><span id="22" class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="23" class="col-sm-4 control-label ">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="23" id="23" placeholder="Tempat Lahir " aria-describedby="23" value="Malang" /><span id="23" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="24" class="col-sm-4 control-label ">S1</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="24" id="24" placeholder="S1 " aria-describedby="24" value="Universitas Muhammadiyah Malang" /><span id="24" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="25" class="col-sm-4 control-label ">S2</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="25" id="25" placeholder="S2 " aria-describedby="25" value="Universitas Muhammadiyah Malang" /><span id="25" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="26" class="col-sm-4 control-label ">S3</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="26" id="26" placeholder="S3 " aria-describedby="26" value="Universiti Kebangsaan Malaysia" /><span id="26" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="27" class="col-sm-4 control-label ">Jenis</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="27" id="27">
                                <option value=""> --- Select --- </option>
                                <option value="1" selected>DS - DOSEN BIASA</option>
                                <option value="2">PR - PROFESOR</option>
                                <option value="3">DT - DOSEN DENGAN TUGAS TAMBAHAN</option>
                                <option value="4">PT - PROFESOR DENGAN TUGAS TAMBAHAN</option>
                            </select><span id="27" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="28" class="col-sm-4 control-label ">Bidang Ilmu</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="28" id="28" placeholder="Bidang Ilmu " aria-describedby="28" value="Manajemen Strategik Sistem Informasi" /><span id="28" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="29" class="col-sm-4 control-label ">No. HP</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="tel" name="29" id="29" placeholder="No. HP " aria-describedby="29" value="085655567031" /><span id="29" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="30" class="col-sm-4 control-label ">Asesor 1</label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input class="form-control" type="text" name="30" id="30" placeholder="Asesor 1 " aria-describedby="30" readonly data-toggle="modal" data-target="#mod1" value="092100203000182" /><span class="input-group-addon" readonly data-toggle="modal" data-target="#mod1" style="cursor:pointer;"><span class="glyphicon glyphicon-th-list"></span></span>
                            </div>
                        </div>
                        <label for="31" class="col-sm-4 control-label"></label>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="31" id="31" placeholder="Asesor 1 " aria-describedby="31" readonly value="Prof. Dr. Imam Suprayogo" /><span id="31" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="32" class="col-sm-4 control-label ">Asesor 2</label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input class="form-control" type="text" name="32" id="32" placeholder="Asesor 2 " aria-describedby="32" readonly data-toggle="modal" data-target="#mod2" value="9810210021151421835" /><span class="input-group-addon" readonly data-toggle="modal" data-target="#mod2" style="cursor:pointer;"><span class="glyphicon glyphicon-th-list"></span></span>
                            </div>
                        </div>
                        <label for="33" class="col-sm-4 control-label"></label>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="33" id="33" placeholder="Asesor 2 " aria-describedby="33" readonly value="Dr. Abdul Malik Karim Amrullah, M.Pd" /><span id="33" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="35" class="col-sm-4 control-label ">Email</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="email" name="35" id="35" placeholder="Email " aria-describedby="35" value="muchad@muchad.com" /><span id="35" class="help-block"></span>
                        </div>
                    </div>
                    <button class="btn btn-info pull-right" type="submit"><span class="glyphicon glyphicon-floppy-open" aria-hidden="true"></span> Update</button>
                </form>
                <br />
                <br />
                <br />
                <link rel="stylesheet" href="lib/css/bootstrap-table.min.css">
                <div class="modal fade" id="mod1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title">Cari Nama Asesor 1</h4>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-info" role="alert">
                                    Untuk pencarian, ketik sebagian atau kesuluruhan <b>Nama Asesor</b> atau <b>Perguruan Tinggi</b> atau <b>Bidang Ilmu</b> pada kolom <i>Search</i>, klik nama asesor yang dimaksud lalu klik tombol <b>Pilih</b>.
                                </div>
                                <table id="table1" data-toggle="table" data-url="json" data-height="400" data-search="true" data-trim-on-search="false" data-click-to-select="true" data-show-export="true" data-side-pagination="client" data-pagination="true" data-page-size="20" data-page-list="[20, 50]">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-radio="true"></th>
                                            <th data-field="nama">Nama</th>
                                            <th data-field="pt">Perguruan Tinggi</th>
                                            <th data-field="ilmu">Bidang Ilmu</th>
                                        </tr>
                                    </thead>
                                </table>

                            </div>
                            <div class="modal-footer">
                                <button id="button1" class="btn btn-primary" data-dismiss="modal">Pilih</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <div class="modal fade" id="mod2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title">Cari Nama Asesor 2</h4>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-info" role="alert">
                                    Untuk pencarian, ketik sebagian atau kesuluruhan <b>Nama Asesor</b> atau <b>Perguruan Tinggi</b> atau <b>Bidang Ilmu</b> pada kolom <i>Search</i>, klik nama asesor yang dimaksud lalu klik tombol <b>Pilih</b>.
                                </div>
                                <table id="table2" data-toggle="table" data-url="json" data-height="400" data-search="true" data-trim-on-search="false" data-click-to-select="true" data-show-export="true" data-side-pagination="client" data-pagination="true" data-page-size="20" data-page-list="[20, 50]">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-radio="true"></th>
                                            <th data-field="nama">Nama</th>
                                            <th data-field="pt">Perguruan Tinggi</th>
                                            <th data-field="ilmu">Bidang Ilmu</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button id="button2" class="btn btn-primary" data-dismiss="modal">Pilih</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <div class="col-md-4">
                <h4>Petunjuk</h4>
                <br />
                <p>Pastikan data Anda telah tepat.
                    <br />Form bertanda <span class="required">*</span> wajib diisi.</p>
            </div>
        </div>
    </div>
</div>
<?php 
$addjs .='<script src="lib/js/bootstrap-table.min.js"></script>'; 
$addjs .="<script>
    var ztable = $('#table1');
    $(function () {
        $('#mod1').on('shown.bs.modal', function () {
            ztable.bootstrapTable('resetView');
        });
    });
    var ztable2 = $('#table2');
    $(function () {
        $('#mod2').on('shown.bs.modal', function () {
            ztable2.bootstrapTable('resetView');
        });
    });

	
    var ztable = $('#table1'),
        zbutton = $('#button1');
    $(function () {
        zbutton.click(function () {
	var sel = ztable.bootstrapTable('getSelections');
	$('#30').val(sel[0].nira);
	$('#31').val(sel[0].nama);
        });
    });
	
    var ztable2 = $('#table2'),
        zbutton2 = $('#button2');
    $(function () {
        zbutton2.click(function () {
	var sel2 = ztable2.bootstrapTable('getSelections');
	$('#32').val(sel2[0].nira);
	$('#33').val(sel2[0].nama);
        });
    });
</script>";	
$addjs .= '<script src="lib/js/validator.min.js"></script>';
$addjs .= "<link rel='stylesheet' href='lib/css/bootstrap-datetimepicker.css'><script src='lib/js/bootstrap-datetimepicker.js'></script><script src='lib/js/bootstrap-datetimepicker.id.js'></script>
		<script type='text/javascript'>
    $('.form_datetime').datetimepicker({
		language:  'id',
        autoclose: 1,
		todayHighlight: 1,
		startView: 4,
		minView: 2,
		pickerPosition: 'bottom-left',
		forceParse: 0
		});
</script>";
include "footer.php"; ?>