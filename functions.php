<?php 

$link = 'https://pbs.twimg.com/profile_images/857345239794712588/';

function capture_img($src, $alt, $height, $width){
	$GLOBALS['link'] .= $src;

	echo '<img src="' . $GLOBALS['link'] . '" alt= "' . $alt . '" height="' . $height . '" width="' . $width . '" />';
}
