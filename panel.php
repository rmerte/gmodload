<!DOCTYPE HTML>

<html lang="tr-TR">

<head>

	<meta charset="UTF-8">

	<title>Panel</title>

</head>

<body>

<?php include "config.php" ?>


<form action="kaydet.php" method="POST">
  Server Title
  <input type="text" name="servername" value="<?php echo $servername; ?>"><br>
  Slot
  <input type="number" name="kapasite" value="<?php echo $kapasite; ?>"><br><br>
  Staff (Steamid) <br/>
  1 steamid:  <input type="number" name="yetkili1" value="<?php echo $steamid1; ?>"><br><br>
  1 rank:  <input type="text" name="rutbe1" value="<?php echo $rutbe1; ?>"><br><br>
  
   2 steamid:  <input type="number" name="yetkili2" value="<?php echo $steamid2; ?>"><br><br>
  2 rank:  <input type="text" name="rutbe2" value="<?php echo $rutbe2; ?>"><br><br>
  
  
   3 steamid:  <input type="number" name="yetkili3" value="<?php echo $steamid3; ?>"><br><br>
  3 rank:  <input type="text" name="rutbe3" value="<?php echo $rutbe3; ?>"><br><br>
  
  
   4 steamid:  <input type="number" name="yetkili4" value="<?php echo $steamid4; ?>"><br><br>
  4 rank:  <input type="text" name="rutbe4" value="<?php echo $rutbe4; ?>"><br><br>
    5 steamid:  <input type="number" name="yetkili5" value="<?php echo $steamid5; ?>"><br><br>
  5 rank:  <input type="text" name="rutbe5" value="<?php echo $rutbe5; ?>"><br><br>
    6 steamid:  <input type="number" name="yetkili6" value="<?php echo $steamid6; ?>"><br><br>
  6 rank:  <input type="text" name="rutbe6" value="<?php echo $rutbe6; ?>"><br><br>
  
  
  
   Announcement  <textarea type="text" name="duyuru" rows="4" cols="50"><?php echo $duyuru; ?></textarea>
  <br/>
  <input type="submit">
</form> 

</body>

</html>
