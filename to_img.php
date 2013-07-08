<?php
    $file = file_get_contents('random.txt');

    $l = explode("\n", $file);

    
    $v = rand(0, count($l)-1 );
    
    header("Content-type: image/png");

    $string = $l[$v];

    

    $font  = 2;
    $width  = imagefontwidth($font) * strlen($string)+5;
    $height = imagefontheight($font)+2;

    $image = imagecreatetruecolor ($width,$height);
    $white = imagecolorallocate ($image,20,20,20);
    $black = imagecolorallocate ($image,255,255,255);
    imagefill($image,0,0,$white);

    imagestring ($image,$font,0,0,$string,$black);

    imagepng ($image);
    imagedestroy($image);
?>