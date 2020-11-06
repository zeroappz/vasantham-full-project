<?php require_once('header.php'); ?>

<section class="content-header">
  <h1>Dashboard</h1>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM user");
$statement->execute();
$total_user = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM category");
$statement->execute();
$total_category = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM news");
$statement->execute();
$total_news = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM photo");
$statement->execute();
$total_photo = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM video");
$statement->execute();
$total_video = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM doctor");
$statement->execute();
$total_doctor = $statement->rowCount();


$statement = $pdo->prepare("SELECT * FROM department");
$statement->execute();
$total_department = $statement->rowCount();


$statement = $pdo->prepare("SELECT * FROM subscriber WHERE subs_active=1");
$statement->execute();
$total_subscriber = $statement->rowCount();
?>

<section class="content">

  <div class="row" style="margin: 30px;">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-user-plus"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total Users</span>
          <span class="info-box-number"><?php echo $total_user; ?></span>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-tasks"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total Categories</span>
          <span class="info-box-number"><?php echo $total_category; ?></span>
        </div>
      </div>
    </div>


    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-file-text"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Total News</span>
          <span class="info-box-number"><?php echo $total_news; ?></span>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-picture-o"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total Doctors</span>
          <span class="info-box-number"><?php echo $total_doctor; ?></span>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total Departments</span>
          <span class="info-box-number"><?php echo $total_department; ?></span>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-camera"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total Photos</span>
          <span class="info-box-number"><?php echo $total_photo; ?></span>
        </div>
      </div>
    </div>
  </div>


</section>

<?php require_once('footer.php'); ?>