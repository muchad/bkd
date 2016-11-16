<?php include "header.php";
if (empty($_SESSION['auth'])){header("location:login");} 
?>
<div class="grey"><div class="container">	
<div class="row boxr">
    <h4>Identitas Dosen<div class="pull-right circle"><a data-toggle="tooltip" data-placement="top" title="Edit" href="identitas-edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></div></h4>
    <hr />
    <div class="col-md-8">
        <form class="form-horizontal">
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="13" class="col-sm-4 control-label tleft">No. Sertifikat</label>
                <div class="col-sm-8">
                    <p class="form-control-static">102100213314236</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="14" class="col-sm-4 control-label tleft">NIP</label>
                <div class="col-sm-8">
                    <p class="form-control-static">196604121998031003</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="15" class="col-sm-4 control-label tleft">NIDN</label>
                <div class="col-sm-8">
                    <p class="form-control-static">20-1204-6601</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="16" class="col-sm-4 control-label tleft">Nama</label>
                <div class="col-sm-8">
                    <p class="form-control-static">Ahmadi Ahmad</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="17" class="col-sm-4 control-label tleft">Nama PT</label>
                <div class="col-sm-8">
                    <p class="form-control-static">Universitas Islam Negeri Maulana Malik Ibrahim Malang</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="18" class="col-sm-4 control-label tleft">Alamat PT</label>
                <div class="col-sm-8">
                    <p class="form-control-static">Jl. Gajayana No. 50 Malang 65144</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="19" class="col-sm-4 control-label tleft">Fakultas/Departemen</label>
                <div class="col-sm-8">
                    <p class="form-control-static">Ekonomi</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="20" class="col-sm-4 control-label tleft">Prog. Studi</label>
                <div class="col-sm-8">
                    <p class="form-control-static">Manajemen</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="21" class="col-sm-4 control-label tleft">Jab. Fungsional</label>
                <div class="col-sm-6">
                    <p class="form-control-static">Lektor Kepala</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="34" class="col-sm-4 control-label tleft">Gol.</label>
                <div class="col-sm-6">
                    <p class="form-control-static">Iva</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="22" class="col-sm-4 control-label tleft">Tgl. Lahir</label>
                <div class="col-sm-8">
                    <p class="form-control-static">12 April 1966</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="23" class="col-sm-4 control-label tleft">Tempat Lahir</label>
                <div class="col-sm-8">
                    <p class="form-control-static">Malang</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="24" class="col-sm-4 control-label tleft">S1</label>
                <div class="col-sm-8">
                    <p class="form-control-static">Universitas Muhammadiyah Malang</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="25" class="col-sm-4 control-label tleft">S2</label>
                <div class="col-sm-8">
                    <p class="form-control-static">Universitas Muhammadiyah Malang</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="26" class="col-sm-4 control-label tleft">S3</label>
                <div class="col-sm-8">
                    <p class="form-control-static">Universiti Kebangsaan Malaysia</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="27" class="col-sm-4 control-label tleft">Jenis</label>
                <div class="col-sm-8">
                    <p class="form-control-static">DS - DOSEN BIASA</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="28" class="col-sm-4 control-label tleft">Bidang Ilmu</label>
                <div class="col-sm-8">
                    <p class="form-control-static">Manajemen Strategik Sistem Informasi</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="29" class="col-sm-4 control-label tleft">No. HP</label>
                <div class="col-sm-8">
                    <p class="form-control-static">085655567031</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="30" class="col-sm-4 control-label tleft">Asesor 1</label>
                <div class="col-sm-6">
                    <p class="form-control-static">092100203000182</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="31" class="col-sm-4 control-label hidden-xs"></label>
                <div class="col-sm-6">
                    <p class="form-control-static">Prof. Dr. Imam Suprayogo</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="32" class="col-sm-4 control-label tleft">Asesor 2</label>
                <div class="col-sm-6">
                    <p class="form-control-static">9810210021151421835</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="33" class="col-sm-4 control-label hidden-xs"></label>
                <div class="col-sm-6">
                    <p class="form-control-static">Dr. Abdul Malik Karim Amrullah, M.Pd</p>
                </div>
            </div>
            <div class="form-group" style="margin-bottom:7px !important;padding-bottom:7px !important;">
                <label for="35" class="col-sm-4 control-label tleft">Email</label>
                <div class="col-sm-8">
                    <p class="form-control-static">muchad@muchad.com</p>
                </div>
            </div>
        </form>
        <br />
        <br />
        <br />
		</div>
		<div class="col-md-4"><h4>Petunjuk</h4><br /><p>Pastikan data Anda telah tepat.<br />Form bertanda <span class="required">*</span> wajib diisi.</p></div></div>
</div></div>
<?php include "footer.php"; ?>