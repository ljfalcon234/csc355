<?php

$htmltop_tableincl = "<!DOCTYPE html>
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
	   <body>
            <table>
            ";

$htmlbottom_tableincl = "
            </table>          
	    </body>
	</html>"; 

print("htmltop_tableincl");

print("<tr><td>Index</td><td>Value</td><td>Squared</td><td>Cubed</td></tr> ");

$basearray = array([1, 2, 3, 5, 8, 13, 21]);

foreach ($basearray as $value) 
{
    $index = key($basearray);
    $number = $value;
    print("<tr><td>");
    print($index);
    print("</td><td>"); 
    print($number);
    print("</td><td>");
    print($number * $number);
    print("</td><td>");
    print($number * $number * $number);
    print("</td></tr> ");
}

print("htmlbottom_tableincl");

?>