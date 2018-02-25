<?php

function page_header($color = 'cc3399', $title = 'default'){
	print '<html><head><title>' . $title . '</title></head>';
	print '<body bgcolor="' . $color . '">';
}

//page_header('cc00cc');
page_header('cccccc','my title');
$user = 'Marcos Souza';
print 'Welcome, ' . $user;

$counter = 5;

print "<br><br>";
countdown($counter);
print 'Now, counter is ' . $counter;

page_footer();

function page_footer(){
	print '<hr>Thanks for visiting.';
	print '</body></html>';
}

function countdown($stop){
	while($stop > 0){
		print $stop . '..';
		$stop--;
	}
	print 'Boom!'."<br>";
}

