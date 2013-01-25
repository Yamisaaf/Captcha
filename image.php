<?php
//création du code
session_start();
$rand=md5(rand());
$rand=substr($rand,0,6);
$_SESSION['rand']=$rand;

//création de l'image
$image=imagecreatefrompng('fond.png');
$text_color=imagecolorallocate($image,0,0,0);
imagestring($image,15,40,15,$rand,$text_color);

//l'affichage de l'image
header('Content-type:image/png');
imagepng($image);

?>
