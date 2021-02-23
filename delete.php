<?php
include("connection.php");

if (isset($_GET['del'])) 
{
	$id = $_GET['del'];
	$sql  = "DELETE FROM registration WHERE registration_id = '$id'";
	$ex = $conn->query($sql); 
    $_SESSION['message'] = "Address deleted!"; 
	header('location: registration.php');
    
}
?>

