<?php 

$link = 'images\\';

function capture_img($src, $alt, $height, $width){
	
	$linkFull = $GLOBALS['link'] . $src;

	echo '<img src="' . $linkFull . '" alt= "' . $alt . '" height="' . $height . '" width="' . $width . '" />';
}

