<?php

require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM new_training WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error("deleted"));
header("Location: delete_training_for_com.php"); 

?>