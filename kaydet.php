<?php
$servername = $_POST['servername'];
$kapasite = $_POST['kapasite'];
$steamid1 = $_POST['yetkili1'];
$rutbe1 = $_POST['rutbe1'];
$steamid2 = $_POST['yetkili2'];
$rutbe2 = $_POST['rutbe2'];
$steamid3 = $_POST['yetkili3'];
$rutbe3 = $_POST['rutbe3'];
$steamid4 = $_POST['yetkili4'];
$rutbe4 = $_POST['rutbe4'];
$steamid5 = $_POST['yetkili5'];
$rutbe5 = $_POST['rutbe5'];
$steamid6 = $_POST['yetkili6'];
$rutbe6 = $_POST['rutbe6'];
$duyuru = $_POST['duyuru'];

echo 'serveradi: '.$servername;


$icerik ='<?php
$servername = "'.$servername.'";
$kapasite = '.$kapasite.';
$steamid1 = '.$steamid1.';
$steamid2 = '.$steamid2.';
$steamid3 = '.$steamid3.';
$steamid4 = '.$steamid4.';
$steamid5 = '.$steamid4.';
$steamid6 = '.$steamid4.';
$rutbe1 = "'.$rutbe1.'";
$rutbe2 = "'.$rutbe2.'";
$rutbe3 = "'.$rutbe3.'";
$rutbe4 = "'.$rutbe4.'";
$rutbe5 = "'.$rutbe5.'";
$rutbe6 = "'.$rutbe6.'";
$duyuru = "'.$duyuru.'";


?>
';


$belge = fopen('config.php','w+');
fwrite($belge, $icerik);
fclose($belge);


?>