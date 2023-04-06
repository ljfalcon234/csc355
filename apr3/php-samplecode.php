<!DOCTYPE html>
<html>

<head>
	<title> form validation </title>
	<script type="text/javascript">
		function validate() {
			var as1 = document.grade_form.assignment_1.value;
			var as2 = document.grade_form.assignment_2.value;
			var as3 = document.grade_form.assignment_3.value;
			var mid = document.grade_form.midtermexam.value;
			var fin = document.grade_form.finalexame.value;
			var pro = document.grade_form.project.value;

			if ((as1 == "") || (isNaN(as1)) || (as1 < 0) || (as1 > 100)) {
				alert("1 It can not be empty, <0, or not a number");
				document.grade_form.assignment_1.focus();
				return false;
			}

			if ((as2 == "") || (isNaN(as2)) || (as2 < 0) || (as2 > 100)) {
				alert("2 It can not be empty, <0, or not a number");
				document.grade_form.assignment_2.focus();
				return false;
			}

			if ((as3 == "") || (isNaN(as3)) || (as3 < 0) || (as3 > 100)) {
				alert("3 It can not be empty, <0, or not a number");
				document.grade_form.assignment_3.focus();
				return false;
			}

			if ((mid == "") || (isNaN(mid)) || (mid < 0) || (mid > 100)) {
				alert("4 It can not be empty, <0, or not a number");
				document.grade_form.midtermexam.focus();
				return false;
			}

			if ((fin == "") || (isNaN(fin)) || (fin < 0) || (fin > 100)) {
				alert("5 It can not be empty, <0, or not a number");
				document.grade_form.finalexame.focus();
				return false;
			}

			if ((pro == "") || (isNaN(pro)) || (pro < 0) || (pro > 100)) {
				alert("6 It can not be empty, <0, or not a number");
				document.grade_form.project.focus();
				return false;
			}
			return true;

		}


		function validateA() {

			var ltr = document.grade_formA.letter.value;


			if ((ltr == "") || (!(isNaN(ltr))) || (ltr.length > 1)) {
				alert("7 It can not be empty, <0, or not a number");
				document.grade_formA.letter.focus();
				return false;
			}

			return true;
		}


	</script>
	<style type="text/css">
		body {
			background-color: pink;
		}

		h2 {
			color: red;
		}

		td {
			color: blue;
			font-family: helvetica, serif;
			font-weight: bold;
			font-size: 12pt;
		}

		input[type="text"] {
			color: green;
			font-family: helvetica, serif;
			font-weight: bold;
			font-size: 10pt;
		}
	</style>

</head>

<body>

	<table width="600" height="100" border="0">
		<tr>
			<td colspan="2">
				<h2 align="center"><u>Input Numeric Grade</u></h2>
			</td>
		</tr>

		<form action="2.php" method="POST" name="grade_form" onsubmit="return (validate())">
			<tr>
				<td align="right">Grade of Assignment #1</td>
				<td><input type="text" name="assignment_1" value="" /></td>
			</tr>

			<tr>
				<td align="right">Grade of Assignment #2</td>
				<td><input type="text" name="assignment_2" value="" /></td>
			</tr>

			<tr>
				<td align="right">Grade of Assignment #3</td>
				<td><input type="text" name="assignment_3" value="" /></td>
			</tr>

			<tr>
				<td align="right">Grade of Midterm Exam</td>
				<td><input type="text" name="midtermexam" value="" /></td>
			</tr>

			<tr>
				<td align="right">Grade of Final Exam</td>
				<td><input type="text" name="finalexame" value="" /></td>
			</tr>

			<tr>
				<td align="right">Grade of Project</td>
				<td><input type="text" name="project" value="" /></td>
			</tr>

			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Calculate Total">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</form>

		<form action="3.php" method="POST" name="grade_formA" onsubmit="return (validateA())">
			<tr>
				<td colspan="2">
					<h2 align="center"><u>Input Letter Grade</u></h2>
				</td>
			</tr>
			<tr>
				<td align="right">Numeric Grade</td>
				<td><input type="text" name="letter" value="" /></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submitA" value="Show Numeric Grade">
					<input type="reset" name="resetA" value="Reset">
				</td>
			</tr>

		</form>

	</table>

</body>

</html>


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
	 
	$htmlbo = "
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
