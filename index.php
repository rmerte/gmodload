<!DOCTYPE HTML>

<html lang="tr-TR">

<head>

	<meta charset="UTF-8">

	<title></title>

<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"> -->
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/all.min.css">



<style>
body {
 background: url(images/background.png) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	
	font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
}
</style>


<?php include 'steamapi.php';?>

</head>

<body>
<!-- container -->
<div class="container"> <!-- container -->

	<div class="one">
	<div class="clientarea"> 
					
					<div class="imagearea">
						<img class="imagesettings" src="<?php echo $useravatar; ?>">
					</div>
					<center><div class="profile"><b><?php echo $usernick; ?></b></div></center>
					<center><div class="steamid"> <?php echo $usersteamid; ?></div></center>
				
				</div>
	
	</div>
	
	<div class="two">
	
		<div class="container ekip border"><b>Staff</b></div>
		<div class="ekipavatarlar">
			<div class="polaroid">
			
				<img src="<?php echo $yetkili1avatar; ?>"  style="width:100%">
				<div class="nickname <?php echo $yetkili1durum; ?>">
				<b><?php echo $yetkili1nick; ?></b>
				</div>
				<div class="rutbe"><?php echo $rutbe1; ?></div>
			</div>
		<div class="polaroid">
			
				<img src="<?php echo $yetkili2avatar; ?>"  style="width:100%">
				<div class="nickname <?php echo $yetkili2durum; ?>">
				<b><?php echo $yetkili2nick; ?></b>
				</div>
				<div class="rutbe"><?php echo $rutbe2; ?></div>
			</div>
			
			<div class="polaroid">
			
				<img src="<?php echo $yetkili3avatar; ?>"  style="width:100%">
				<div class="nickname <?php echo $yetkili3durum; ?>">
				<b><?php echo $yetkili3nick; ?></b>
				</div>
				<div class="rutbe"><?php echo $rutbe3; ?></div>
			</div>
			<div class="polaroid">
			
				<img src="<?php echo $yetkili4avatar; ?>"  style="width:100%">
				<div class="nickname <?php echo $yetkili4durum; ?>">
				<b><?php echo $yetkili4nick; ?></b>
				</div>
				<div class="rutbe"><?php echo $rutbe4; ?></div>
			</div>
			
			<div class="polaroid">
			
				<img src="<?php echo $yetkili5avatar; ?>"  style="width:100%">
				<div class="nickname <?php echo $yetkili5durum; ?>">
				<b><?php echo $yetkili4nick; ?></b>
				</div>
				<div class="rutbe"><?php echo $rutbe5; ?></div>
			</div>
			
			<div class="polaroid">
			
				<img src="<?php echo $yetkili6avatar; ?>"  style="width:100%">
				<div class="nickname <?php echo $yetkili6durum; ?>">
				<b><?php echo $yetkili6nick; ?></b>
				</div>
				<div class="rutbe"><?php echo $rutbe4; ?></div>
			</div>
		
		
		
		
		
		</div> <!-- ekipavatar bitiş -->
		<div class="containertwo">
			<div class="three">
				<div class="duyurubaslik">Announcements</div>
				<p class="duyuru"><?php echo $duyuru; ?></p>
			</div>
		</div>
		
		<div class="four"><div class="duyurubaslik">Server</div>
		
		<div><i class="fas fa-star"></i><div class="sunucubilgileri"><?php echo $servername; ?></div></div>
		<div><i class="fas fa-user"></i><div class="sunucubilgileri"><?php echo $kapasite; ?></div></div>
		<div><i class="fas fa-map-marked-alt"></i><div class="sunucubilgileri"><?php echo $mapname; ?></div></div>
		<div><i class="fab fa-goodreads"></i><div class="sunucubilgileri">Sandbox</div></div>
		
		</div>
		
		
	</div> <!-- two bitiş -->



</div><!-- container bitiş -->

</body>

</html>
