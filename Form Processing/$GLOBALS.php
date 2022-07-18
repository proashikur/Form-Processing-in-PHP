<?php 
$x=500;
$y=580;

function add()
{
	$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}

add();
echo $z;
?>