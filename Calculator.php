<?php
	$Num1=50;
	$Num2=6;
	$Ans;
	$Choice='3';
	
	echo("1 For Calculate Addition<br/>");
	echo("2 For Calculate Subtreaction<br/>");
	echo("3 For Calculate Multiplication<br/>");
	echo("4 For Calculate Divsion<br/>");
	echo("5 For Calculate Modulas<br/>");
	
	echo("<br/>Enter Your Choice:- ");
	echo($Choice);
	
	switch($Choice){
		case '1': $Ans = $Num1 + $Num2; echo("<br/><br/>".$Ans." Is Anwer"); break;
		case '3': $Ans = $Num1 * $Num2; echo("<br/><br/>".$Ans." Is Anwer"); break;
		case '2': $Ans = $Num1 - $Num2; echo("<br/><br/>".$Ans." Is Anwer"); break;
		case '4': $Ans = $Num1 / $Num2; echo("<br/><br/>".$Ans." Is Anwer"); break;
		case '5': $Ans = $Num1 % $Num2; echo("<br/><br/>".$Ans." Is Anwer"); break;
		default : echo("<br/> <br/>Invalid Choice");
	}
	
?>