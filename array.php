<?php
	$myarray=array("RED","PINK","ORANGE","TOMATO");
	print_r($myarray);
	echo "<br>".$myarray[0];
	//$myarray[1]="WHITE";
	echo "<br>".$myarray[1];
	//$myarray["myin"]="THIS IS NOT COLOR";
	echo "<br>".$myarray["myin"];
	echo "<br>".sizeof($myarray);
	echo "<br>".indexOf($myarray[1]);
?>