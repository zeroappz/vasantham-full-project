<?php require_once('header.php'); ?>

<?php
if(!isset($_REQUEST['id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM advertisement_sidebar WHERE adv_id=?");
	$statement->execute(array($_REQUEST['id']));
	$total = $statement->rowCount();
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	}
}
	
// Getting photo ID to unlink from folder
$statement = $pdo->prepare("SELECT * FROM advertisement_sidebar WHERE adv_id=?");
$statement->execute(array($_REQUEST['id']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) {
	$adv_photo = $row['adv_photo'];
}

// Unlink the photo
if($adv_photo!='') {
	unlink('../assets/uploads/'.$adv_photo);
}

// Delete from advertisement_sidebar
$statement = $pdo->prepare("DELETE FROM advertisement_sidebar WHERE adv_id=?");
$statement->execute(array($_REQUEST['id']));

header('location: advertisement-sidebar.php');
?>