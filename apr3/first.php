<?php

function fun()
{
	$asgnmnt1 = $_POST["a1"];
	$asgnmnt2 = $_POST["a2"];
	$asgnmnt3 = $_POST["a3"];
	$midtm = $_POST["midterm"];
	$finl = $_POST["final"];	   
	$proj = $_POST["project"];	
	
	$grade = $asgnmnt1*0.1 + $asgnmnt2*0.1 + $asgnmnt3*0.1 + $midtm*0.2 + $finl*0.35 + $proj*0.15;	
	$letter = "";
	
    if(($grade>90)&&($grade<=100))
	{
		$letter = "A";
	}
	else if(($grade>80)&&($grade<=90))
	{
		$letter = "B";
	}
	else if(($grade>70)&&($grade<=80))
	{
		$letter = "C";
	}	
	else if(($grade>=60)&&($grade<=70))
	{
		$letter = "D";
	}	
	else if(($grade>=0)&&($grade<60))
	{
		$letter = "F";
	}	
	else
	{
		$letter = "wrong";
	}
	

	$htmltop = "<!DOCTYPE html>
	<html>
	   <head>
		  <title>   form validation      </title>
		  
		  <style type=\"text/css\">
		  body{background-color:pink;}
		  h2{color: red;}
		  
		  td
		  {
			color: blue;
			font-family: helvetica, serif;
			font-weight: bold;
			font-size: 12pt;
		  }
		  
		  </style>
		  
	   </head>
	   <body>";
	 
	$htmlbottom = "
	   </body>
	</html>"; 
	   
	print("$htmltop");
	print("<h2>Calculation Result</h2>");   
	print("<table><tr><td><u>Numeric grade</u>: </td><td>$grade</td></tr>");
	print("<tr><td><u>Letter grade</u>: </td><td>$letter</td></tr></table>");
	print("$htmlbottom");
}
fun();
?>