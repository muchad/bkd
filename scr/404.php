<?php include "header.php";
if (empty($_SESSION['auth'])){header("location:login");} 
?>
<div class="grey">
    <div class="container" style="min-height: 500px;">
        <div class="row boxr">
            <h4>404</h4>
            <hr />
			<center>This is just a <b>CONCEPT</b><br />Example for this page please visit <a href="pendidikan">Kinerja Bidang Pendidikan</a></center>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
