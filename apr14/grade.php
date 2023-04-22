<?php
function funA()
{
        /*
        calculate the numeric grade
        */
        $total =
            ($_POST["assignment_1"]/100)*0.1+($_POST["assignment_2"]/100)*0.1+($_POST["assignment_3"]/100)*0.1 
            +($_POST["midterm_exam"]/100)*0.2+($_POST["final_exam"]/100)*0.5;
        $total = $total*100;
            //decide the letter grade
        $letter = funB($total);
            //print the result as a webpage
        funC($total, $letter);
}

function funB($total)
{
        /*
        decide the letter grade based on the value of $total
        and return a letter representing the letter grade
        */
        
        $checktotal = $total;

        if ($checktotal > 89 && $checktotal < 100) 
            $checktotal = "A";
        elseif ($checktotal > 79 && $checktotal < 90)
            $checktotal = "B";
        elseif ($checktotal > 69 && $checktotal < 80)
            $checktotal = "C";
        elseif ($checktotal > 59 && $checktotal < 60)
            $checktotal = "D";
        else $checktotal = "F";

        return $checktotal;
}

function funC($total, $letter)
{
        /*
        print the result as a webpage
        when printing, using a "foreach" loop to print the key and value of each element in the accociative array
        "$_POST" as the
        content of the table
        */
        
        $htmltop = "<!DOCTYPE html>
        <html>
            <head>
                <title>Printing Grades</title>
            </head>
            <body>
                <p>";
        
        $htmlbo="</body></html>";
        $htmlmiddle="
            <h2>Grade Result</h2>
            <table width=\"400\" height=\"100\" border=\"0\">";
        $tmp = "";
        foreach($_POST as $keys=>$vals)
        {
            $tmp = $tmp."<tr><td>$keys</td><td>$vals</td></tr>";
        }
        $htmlmiddle = $htmlmiddle.$tmp."</table>";

        print("$htmltop");
        print("$htmlmiddle");
        print("$htmlbo");
        
}

funA();
?>