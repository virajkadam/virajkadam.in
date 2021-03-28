<?php
if( isset($_POST['password']) && $_POST['password'] == '1234' ) {

	if (isset($_POST['upload'])){
		$string = exec("git pull");
	}elseif (isset($_POST['clear_cache'])) {
		exec("rm -rf runtime/*");
		exec("rm -r assets/*/");
		$string = 'Cache Cleared';
	}
}
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://getbootstrap.com/docs/4.0/examples/floating-labels/floating-labels.css" rel="stylesheet">
</head>

<body>
	<form class="form-signin" action="up.php" method="post" >

		<div class="text-center">
			<h1>VirajKadam.com</h1>
			<a href="//<?=$_SERVER["HTTP_HOST"]?>" >ORIGINAL SITE</a>
		</div>

		<br>
		<p class="text-center" style="font-size:12px;color:#777;">Enter Todays Password to Upload Files</p>
		<div class="form-label-group">
			<input type="text" id="inputPassword" class="form-control" placeholder="Password" name="password" pattern="\d{4}" maxlength="4" autofocus required autocomplete="off" >
			<label for="inputPassword">Password</label>
		</div>

		<p class="text-center" style="font-size:12px;color:#777;">All Activities on this Page are Tracked & Monitored</p>
		<input class="btn btn-lg btn-success btn-block" type="submit" name="upload" value="UPLOAD">

		<input class="btn btn-sm btn-danger" type="submit" name="clear_cache" value="Clear Cache" style="margin-top:10px;" >
		
		<p class="mt-5 bt-5 text-muted text-center"><?=$string?></p>

	</form>
</body>
</html>
