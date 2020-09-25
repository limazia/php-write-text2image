<?php
$image = imagecreatefromjpeg("sample.jpg");
$color = imagecolorallocate($image, 255, 255, 255);
$text = "Criado por Acacio De Lima";

$number = mt_rand();
$final = $number . ".jpg";

imagestring($image, 5, 15, 515, $text, $color);
header('Content-type: image/jpeg');
imagejpeg($image, 'images/' . $final, 80);
imagejpeg($image, NULL, 80);
