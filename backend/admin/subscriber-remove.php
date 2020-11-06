<?php require_once('header.php'); ?>

<?php
	
	// Delete from subscriber
	$statement = $pdo->prepare("DELETE FROM subscriber WHERE subs_active=0");
	$statement->execute();

	header('location: subscriber.php');
?>