<?php

function fun()
{
	$as1 = $_POST["assignment_1"];
	$as2 = $_POST["assignment_2"];
	$as3 = $_POST["assignment_3"];
	$mid = $_POST["midtermexam"];
	$fin = $_POST["finalexame"];	   
	$pro = $_POST["project"];	
	
	$grade = $as1*0.1 + $as2*0.1 + $as2*0.1 + $mid*0.2 + $fin*0.35 + $pro*0.15;	
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
	 
	$htmlbo = "
	   </body>
	</html>"; 
	   
	print("$htmltop");
	print("<h2>Calculation Result</h2>");   
	print("<table><tr><td><u>Numeric grade</u>: </td><td>$grade</td></tr>");
	print("<tr><td><u>Letter grade</u>: </td><td>$letter</td></tr></table>");
	print("$htmlbo");
}
fun();
?>