<?php

function page_header($color){
	print '<html><head><title></title></head>';
	print '<body bgcolor="' . $color . '">';
}

page_header('cc00cc');
$user = 'Marcos Souza';
print 'Welcome, ' . $user;
page_footer();

function page_footer(){
	print '<hr>Thanks for visiting.';
	print '</body></html>';
}