<?php include "header.php";
if (empty($_SESSION['auth'])){header("location:login");} 
?>
<div class="grey"><div class="container" style="min-height: 500px;">	
		<div class="row boxr"><h4>RIWAYAT</h4>  
	<ul class="timeline">
  	<li>
    <div class="timeline-badge"><a><span class="glyphicon glyphicon-record std" aria-hidden="true"></span></a></div>
    <div class="timeline-panel">
      <div class="timeline-body">
		<table class="table">
		<tr><td colspan="2" style="padding:10px 15px;"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> <b>2016 / 2017 SEMESTER GENAP</b></td></tr>
				<tr><td width='100px'><b>RKD: </b></td>
		<td>Belum terisi</td></tr>
		<tr><td><b>BKD: </b></td>
		<td>Belum terisi</td></tr>
				</table>
      </div>
      <div class="timeline-footer c-orange">
        <a href="identitas" class="btn btn-info"><span class="glyphicon glyphicon-equalizer" aria-hidden="true"></span> RKD</a>
        <a href="#" class="pull-right btn btn-warning disabled"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> BKD</a>
      </div>
    </div>
    </li>	
    <li class="timeline-inverted">
    <div class="timeline-badge"><a><span class="glyphicon glyphicon-record std" aria-hidden="true"></span></a></div>
    <div class="timeline-panel">
      <div class="timeline-body">
		<table class="table">
		<tr><td colspan="2" style="padding:10px 15px;"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> <b>2016 / 2017 SEMESTER GANJIL</b></td></tr>
				<tr><td width='100px'><b>RKD: </b></td>
		<td>Belum terisi</td></tr>
		<tr><td><b>BKD: </b></td>
		<td>Belum terisi</td></tr>
				</table>
      </div>
      <div class="timeline-footer c-orange">
        <a href="identitas" class="btn btn-info"><span class="glyphicon glyphicon-equalizer" aria-hidden="true"></span> RKD</a>
        <a href="#" class="pull-right btn btn-warning disabled"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> BKD</a>
      </div>
    </div>
    </li>
	</ul>
</div>	
</div>		
</div>
<?php include "footer.php"; ?>