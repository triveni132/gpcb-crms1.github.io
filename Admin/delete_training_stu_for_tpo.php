<?php

require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM registration_for_training WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error("deleted"));
header("Location: manage_training_student_for_tpo.php"); 

?>