
<?php
session_start();

?>

<?php

include_once "../controller/Form.php";

?>



<?php

$_SESSION['coursename'] = $_REQUEST['coursename'];





?>



<?php

$student = new Form();

$student->person($_SESSION['studentname']);

$student->guadian( $_SESSION['guadianname']);

$student->course($_SESSION['studentname']);
?>