<?php

function funTable ($p) {
    $numCirc = $p;

    for ($i = 0; $i <= $numCirc; $i++) {
        // insert stuff here to calculate circumference and area
        // then make it so that its printed out in the table and in each row
        // yippee

        $pi = 3.14;
        $radius = $i;
        $circum = 2 * $pi * $radius;
        $area = $pi * $radius * $radius;

        print("<tr>
            <td>$radius</td>
            <td>$circum</td>
            <td>$area</td>
        </tr>
        ");
    }
}

?>

<head>
    <title></title>
</head>
<body>
    <table>
        <tr><th>Radius</th><th>Circumference</th><th>Area</th></tr>
        <?php 
        funTable(15);
        ?>
    </table>
</body>