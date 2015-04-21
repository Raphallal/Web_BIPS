<?php

$namePage = $_POST['namePage'];
$innerPage = $_POST['innerPage'];

//$file = file_get_contents('./clubs/cinefips.php', true);

file_put_contents('./clubs/'.$namePage, $innerPage);
 
?>