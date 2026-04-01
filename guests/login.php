<?php session_start();

if(isset($_POST['Submit'])){

$logins = array('four3four' => 'hello');
$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

if (isset($logins[$Username]) && $logins[$Username] == $Password){
	$_SESSION['UserData']['Username']=$logins[$Username];
	header("location:index.php");
exit;
} else {
$msg="<span style='color:red'>Invalid Login Details</span>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://four3four.co.za/assets/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap-grid.min.css" integrity="sha256-D9AvR0EzkNZoWZVSvI3ch+uf/Z5izrIpcbsykVphwPU=" crossorigin="anonymous" />
<title>four3four - Welcome to four3four. Here at your fingertips is everything you'll need during your stay with us.</title>
<meta charset="UTF-8">
<meta name="description" content="Book and stay in this beautiful bright studio in Cape Town, South Africa">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:image" content="https://four3four.co.za/stayhere.jpg">
<meta property="og:type" content="website">
<meta property="og:url" content="https://four3four.co.za/">
<meta property="og:image:width" content="1300">
<meta name="theme-color" content="#405749">
<meta property="og:image:height" content="740">
<meta property="og:description" content="Book and stay in this beautiful bright studio in Cape Town, South Africa">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!-- ****** faviconit.com favicons ****** -->
<link rel="shortcut icon" href="https://four3four.co.za/favicons/favicon.ico">
<link rel="icon" sizes="16x16 32x32 64x64" href="https://four3four.co.za/favicons/favicon.ico">
<link rel="icon" type="image/png" sizes="196x196" href="https://four3four.co.za/favicons/favicon-192.png">
<link rel="icon" type="image/png" sizes="160x160" href="https://four3four.co.za/favicons/favicon-160.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://four3four.co.za/favicons/favicon-96.png">
<link rel="icon" type="image/png" sizes="64x64" href="https://four3four.co.za/favicons/favicon-64.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://four3four.co.za/favicons/favicon-32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://four3four.co.za/favicons/favicon-16.png">
<link rel="apple-touch-icon" href="https://four3four.co.za/favicons/favicon-57.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://four3four.co.za/favicons/favicon-114.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://four3four.co.za/favicons/favicon-72.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://four3four.co.za/favicons/favicon-144.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://four3four.co.za/favicons/favicon-60.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://four3four.co.za/favicons/favicon-120.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://four3four.co.za/favicons/favicon-76.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://four3four.co.za/favicons/favicon-152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://four3four.co.za/favicons/favicon-180.png">
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="https://four3four.co.za/favicons/favicon-144.png">
<meta name="msapplication-config" content="https://four3four.co.za/favicons/browserconfig.xml">
<!-- ****** faviconit.com favicons ****** -->
</head>

<body class="lgn">

<main>
	<section id="intro">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Hello</h1>
					
					<form action="" method="post" name="Login_Form">
						<div class="frm-fld hid">
							<label for="Username">Username</label>
							<input name="Username" type="text" value="four3four">
						</div>	
						<div class="frm-fld">
							<input name="Password" type="text" placeholder="Password">
						</div>
						<input name="Submit" type="submit" value="Login" class="btn">
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
<script type="text/javascript">
	$( document ).ready(function() {
		$("#menu").click(function(){
		  $(".offcanvas").toggleClass("open");
		});
	});
</script>
</body>

</html>