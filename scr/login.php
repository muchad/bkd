<?php include 'header.php'; 
$note='';
if(isset($_SESSION['auth'])){header('location: home');}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $_SESSION['auth']='muchad';
  header ('Location: home');	
}
?>
<div class="container-fluid" style="margin-top: 50px;">
  <div class="row">
	<div class="jumbotron cover">
		<div class="container">
			<div class="col-md-6" style="margin-top: 70px;">
			<div class="linear-form">
	        <form method="post">
	        <?php echo $note; ?>
	        <div class="username"><input type="text" name="username" id="username" placeholder="Username"/></div>
	        <div class="password"><input type="password" name="password" id="password" placeholder="Password"/></div>
			<div class="checkbox visible-xs-block"><label><input id="methods" type="checkbox"> Show password</label><br /><br /></div>
			<button>Login</button> 			
	        </form><div class="visible-xs-block"><br /></div><a href="#">Lupa password?</a>
			</div>
			</div>
		</div>
	</div>
  </div>
</div>
<div class="container"> 	
	<div class="row">
		<div class="col-md-6">
				<h3>Easy to Use and Flexible</h3>
				<p style="line-height:2 !important;">Aplikasi ini sangat mudah digunakan dan meringankan pengisian BKD Anda. Anda cukup sekali mengisi identitas Anda dan ketika ada perubahan identitas, riwayat identitas dan data lama Anda tetap tersimpan dengan baik, bahkan dokumen-dokumen BKD Anda pun dapat diunggah sehingga memudahkan Anda bila membutuhkannya sewaktu-waktu dimanapun kapanpun.</p>
		</div>
		<div class="col-md-6">
			<img class="img-responsive" src="lib/img/about.jpg" /><hr />
		</div>
		
		<div class="col-md-6">
			<img class="img-responsive" src="lib/img/about1.jpg" />
		</div>
		<div class="col-md-6">
				<h3>Access it Anywhere</h3>
				<p style="line-height:2 !important;">Aplikasi ini dapat Anda akses baik dari PC, Laptop, Tablet, bahkan HP Anda dimanapun kapanpun, dengan desain menarik dan responsif akan memudahkan Anda menggunakannya melalui gadget kesayangan Anda. Pimpinan kampus pun dapat memonitor seluruh perkembangannya secara langsung.</p>
		</div>
	</div>
	<hr />
</div>
<?php 
$addjs .='<script src="lib/js/bootstrap-show-password.js"></script>';
$addjs .="<script>
    $(function() {
        $('#password').password().on('show.bs.password', function(e) {
            $('#methods').prop('checked', true);
        }).on('hide.bs.password', function(e) {
                    $('#methods').prop('checked', false);
                });
        $('#methods').click(function() {
            $('#password').password('toggle');
        });
    });
</script>";
include 'footer.php'; ?>