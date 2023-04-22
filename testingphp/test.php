<?php

if ( $_POST["name"] || $_POST["age"])
{
    echo "Welcome ". $_POST['name']. "<br />";
    echo "You are ". $_POST['age']. "years old.";
}

?>

<html>
    <body>
        <form action = "<?php $_PHP_SELF ?>" method = "POST">
        Name: <input type="text" name="name" />
        Age: <input type = "text" name="age" />
        </form>
    </body>
</html>