
<?php
session_start();
?>


<?php

$_SESSION['guadianname'] = $_REQUEST['guadianname'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<fieldset>
<legend> Course Details</legend>
<form action="display.php" method="post">

<input type="text" name="coursename" placeholder="Enter Course Name">

<input type="submit" value="send">

</form>

</fieldset>

<a href="person.php">back to home</a>

    
</body>
</html>