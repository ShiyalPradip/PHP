<?php
	$Num=1;
	
	Label:
	if($Num<=15){
		echo $Num." ";
		$Num++;
		
		goto Label;
	}
		
?>