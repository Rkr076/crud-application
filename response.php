<?php

$data = $_GET['datavalue'];

$a = array('pune', 'mumbai', 'kalyan');
$b = array('gorakhpur', 'varanasi', 'lucknow');
$c = array('patna', 'muzaffarpur', 'araria');

if ($data == "Maharashtra")
 {
	foreach ($a as $aone) 
	{
		echo "<option> $aone </option>";
	}
}

if ($data == "UP")
 {
	foreach ($b as $bone) 
	{
		echo "<option> $bone </option>";
	}
}

if ($data == "Bihar")
 {
	foreach ($c as $cone) 
	{
		echo "<option> $cone </option>";
	}
}


?>