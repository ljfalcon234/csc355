<?php
// making a function that will calculate a user's BMI 

    function funBMI($weight, $height) {
        // BMI = (weight in pounds * 703)/(height in inches * heigh in inches)

        // variables
        $BMI = 0;
        $tmpWeight = $weight;
        $tmpHeight = $height;
        $evaluation = "";
        $b = "</br>";

        // calculate and display the user's BMI
        $BMI = (($tmpWeight * 703) / ($tmpHeight * $tmpHeight));
        print("Your BMI is at $tmpWeight.");
        print($b);

        // evaluate how the user's health is based on the BMI value
        if ($BMI >= 30)
            $evaluation = "Obese";
        elseif ($BMI >= 25 && $BMI <= 29.9)
            $evaluation = "Overweight";
        elseif ($BMI >= 18.5 && $BMI <= 24.9)
            $evaluation = "Normal";
        elseif ($BMI < 18.5)
            $evaluation = "Underweight";
        // else $evaluation = "Unknown";

        print("According to the Department of Health and Human Services/National Institutes of Health, you are considered to be $evaluation based on your BMI.");
        print($b);
        print($b);
    }

    /* funBMI(120, 64);
    funBMI(89, 54);
    funBMI(198, 69);
    funBMI(56, 44); */

?>


<head>
    <title>Calculate the PHP</title>
</head>
<body>
    <h1>Here are some examples of the BMI calculator being used.</h1>
    </br>

    <?php 
    funBMI(120, 64);
    funBMI(89, 54);
    funBMI(198, 69);
    funBMI(56, 44);
    ?>
</body>
