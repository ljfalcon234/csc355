// now with the do while loop :D

<?php

function funWhileTable ($p) {
    $numCirc = $p;
    $i = 0;

    /* for ($i = 0; $i <= $numCirc; $i++) {
        // insert stuff here to calculate circumference and area
        // then make it so that its printed out in the table and in each row
        // yippee

        $pi = 3.14;
        $radius = $i;
        $circum = 2 * $pi * $radius;
        $area = $pi * $radius * $radius;

        print("<tr><td>$radius</td><td>$circum</td><td>$area</td></tr>
        ");
    } 
    */

    // when it enters the loop, i = 0, but at the end i is incremented by 1 so it should increase radius value
    do {
        $pi = 3.14;
        $radius = $i;
        $circum = 2 * $pi * $radius;
        $area = $pi * $radius * $radius;

        print("<tr><td>$radius</td><td>$circum</td><td>$area</td></tr>
        ");

        $i++;
    } while ($i <= $numCirc);
}

?>

<head>
    <title></title>
</head>
<body>
    <table>
        <tr><th>Radius</th><th>Circumference</th><th>Area</th></tr>
        <?php 
        funWhileTable(15);
        ?>
    </table>
</body>