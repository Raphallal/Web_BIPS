<?php
	
	$dir = $_POST["directory"]; 
	$weeds = array('.', '..'); 
	$file = array_diff(scandir($dir), $weeds); 
	    
	foreach($file as $value) 
	{ 
	    echo '<option value="'.$value.'">'.$value.'</option>'."\n"; 
	} 
?>