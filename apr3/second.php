<?php

function fun2()
{

	$letter = $_POST["letter"];
	$numeric = "";
	
	switch($letter)
	{
		case "A":
		$numeric = "Your grade is >90, but <=100";
		break;
		case "B":
		$numeric = "Your grade is >80, but <=90";
		break;
		case "C":
		$numeric = "Your grade is >70, but <=80";
		break;
		case "D":
		$numeric = "Your grade is >=60, but <=70";
		break;
		case "F":
		$numeric = "Your grade is >=0, but <60";
		break;	
		default:
		$numeric = "WRONG LETTER";					
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
	print("<h2>Grade Result</h2>");   
	print("<table><tr><td><u>Letter Grade</u>: </td><td>$letter</td></tr>");
	print("<tr><td><u>Numerica Grade</u>: </td><td>$numeric </td></tr>");
	print("$htmlbo");
}
fun2();
?>