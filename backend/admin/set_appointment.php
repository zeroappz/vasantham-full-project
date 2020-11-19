<?php require_once('header.php'); ?>

<?php
$ID = $_GET['id'];
if (isset($_POST['form1'])) {
    $apmt_status = $_POST['status'];
    // updating into the database
    $statement = $pdo->prepare("UPDATE appointment SET apmt_status=? WHERE id=?");
    $statement->execute(array($apmt_status, $ID));
    $success_message = 'Appointment Status has been updated successfully.';
    header('location: appointment.php');
}
?>

<?php
if (!isset($_REQUEST['id'])) {
    header('location: logout.php');
    exit;
} else {
    // Check the id is valid or not
    $statement = $pdo->prepare("SELECT * FROM appointment WHERE id=?");
    $statement->execute(array($_REQUEST['id']));
    $total = $statement->rowCount();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    if ($total == 0) {
        header('location: logout.php');
        exit;
    }
}
?>


<section class="content-header">
    <div class="content-header-left">
        <h1>Edit Appointment Status</h1>
    </div>
    <div class="content-header-right">
        <a href="appointment.php" class="btn btn-primary btn-sm">View All</a>
    </div>
</section>

<?php
foreach ($result as $row) {
    $apmt_status = $row['apmt_status'];
}
?>

<section class="content">

    <div class="row">
        <div class="col-md-12">

            <?php if ($error_message) : ?>
                <div class="callout callout-danger">
                    <p>
                        <?php echo $error_message; ?>
                    </p>
                </div>
            <?php endif; ?>

            <?php if ($success_message) : ?>
                <div class="callout callout-success">
                    <p><?php echo $success_message; ?></p>
                </div>
            <?php endif; ?>

            <form class="form-horizontal" action="" method="post">
                <div class="box box-info">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label" style="font-size: 16px;left: -8%;">Appointment Status <span>*</span></label>
                            <select class="col-sm-4" name="status"
                            style="width: 117px; padding: 6px; left: -4%; font-size: 15px; border-color: lightblue;  border-radius: 6px;">
                                <option value="0">Pending</option>
                                <option value="1">Confirmed</option>
                                <option value="2">Completed</option>
                            </select>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>