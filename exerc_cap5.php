<?php

function capture_img($src, $alt, $height, $width){
	echo '<img src="' . $src . '" alt= "' . $alt . '" height="' . $height . '" width="' . $width . '" />';
}

capture_img('https://pbs.twimg.com/profile_images/857345239794712588/oFv-DFr0.jp', 'img test', 220, 220);