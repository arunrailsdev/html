<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

   $values = array_values($_POST);  
       echo json_encode($values);
    ?>

    <form method="post" action="test.php">
        <input type="text" name="test1" value="one" />
        <input type="text" name="test2" value="two" />
        <input type="text" name="test3" value="three" />
        <input type="submit" value="Test Me" />
    </form>
    <h1>output</h1>


</body>
</html>