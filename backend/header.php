<?php
ob_start();
session_start();
include("admin/config.php");
include("admin/functions.php");
$error_message = '';
$success_message = '';
?>
<?php
// Delete all subscribers who did not confirm email within 1 day / 24 hours
$statement = $pdo->prepare("SELECT * FROM subscriber WHERE subs_active=0");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach($result as $row)
{
	$subs_date_time = $row['subs_date_time'];
	$current_date_time = date('Y-m-d H:i:s');
	$t1 = strtotime($subs_date_time);
	$t2 = strtotime($current_date_time);
	$diff = $t2 - $t1;
	$res = floor($diff/(60));
	if($res > 1440)
	{
		$statement1 = $pdo->prepare("DELETE FROM subscriber WHERE subs_id=?");
		$statement1->execute(array($row['subs_id']));
	}
}
// Getting the basic data for the website from database
$statement = $pdo->prepare("SELECT * FROM settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$logo = $row['logo'];
	$favicon = $row['favicon'];
	$contact_email = $row['contact_email'];
	$contact_phone = $row['contact_phone'];
	$color = $row['color'];
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

	<!-- Meta Tags -->	
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>


	<!-- Showing the SEO related meta tags data -->
	<?php
	
	// Getting the current page URL
	$cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

	if($cur_page == 'news.php')
	{
		$statement = $pdo->prepare("SELECT * FROM news WHERE news_slug=?");
		$statement->execute(array($_REQUEST['slug']));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row) 
		{
		    $og_photo = $row['photo'];
		    $og_title = $row['news_title'];
		    $og_slug = $row['news_slug'];
			$og_description = substr(strip_tags($row['news_content']),0,200).'...';
			echo '<meta name="description" content="'.$row['meta_description'].'">';
			echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
			echo '<title>'.$row['meta_title'].'</title>';
		}
	}

	if($cur_page == 'page.php')
	{
		$statement = $pdo->prepare("SELECT * FROM page WHERE page_slug=?");
		$statement->execute(array($_REQUEST['slug']));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row) 
		{
			echo '<meta name="description" content="'.$row['meta_description'].'">';
			echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
			echo '<title>'.$row['meta_title'].'</title>';
		}
	}

	if($cur_page == 'category.php')
	{
		$statement = $pdo->prepare("SELECT * FROM category WHERE category_slug=?");
		$statement->execute(array($_REQUEST['slug']));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row)
		{
			echo '<meta name="description" content="'.$row['meta_description'].'">';
			echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
			echo '<title>'.$row['meta_title'].'</title>';
		}
	}

	if($cur_page == 'index.php')
	{
		$statement = $pdo->prepare("SELECT * FROM settings WHERE id=1");
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row) 
		{
			echo '<meta name="description" content="'.$row['meta_description_home'].'">';
			echo '<meta name="keywords" content="'.$row['meta_keyword_home'].'">';
			echo '<title>'.$row['meta_title_home'].'</title>';
		}
	}
	?>

	<!-- Favicon -->
	<link href="<?php echo BASE_URL; ?>assets/uploads/<?php echo $favicon; ?>" rel="shortcut icon" type="image/png">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/slicknav.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/superfish.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/animate.css">
	
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery.bxslider.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/hover.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/responsive.css">

	<script src="<?php echo BASE_URL; ?>assets/js/modernizr.min.js"></script>

	<?php if($cur_page == 'news.php'): ?>
		<meta property="og:title" content="<?php echo $og_title; ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo BASE_URL; ?>news/<?php echo $og_slug; ?>">
		<meta property="og:description" content="<?php echo $og_description; ?>">
		<meta property="og:image" content="<?php echo BASE_URL; ?>assets/uploads/<?php echo $og_photo; ?>">
	<?php endif; ?>

	<style>
		
		<?php $color = '#'.$color; ?>
		.sf-menu li:hover a,
		.department-v2 .department-tab .nav-tabs > li > a,
		.doctor-v1 .item .text h3 a,
		.pricing-v1 .pricing-item:hover .price .hexa .amount,
		.pricing-v1 .pricing-item:hover .price .hexa .time,
		.pricing-v1 .pricing-item:hover .button a,
		.news-v1 .date .day:before,
		.blog h4,
		.widget ul li a:hover,
		.doctor-detail .doctor-detail-tab .nav-tabs>li>a,
		.heading-normal h2,
		.doctor-v2 .text h3 a {
			color: <?php echo $color; ?>!important;
		}

		.top-bar,
		.sf-menu li li:hover,
		.slider p.button a,
		.service-v1 .text p.button a:hover,
		.department-v2 .department-tab .nav-tabs > li.active > a, 
		.department-v2 .department-tab .nav-tabs > li.active > a:hover, 
		.department-v2 .department-tab .nav-tabs > li.active > a:focus, 
		.department-v2 .department-tab .nav-tabs > li a:hover, 
		.department-v2 .department-tab .nav-tabs > li a:focus,
		.department-v2 .department-tab .department-content p.button a,
		.doctor-v1 .item:hover .text,
		.doctor-v1 .social-icons ul li a,
		.pricing-v1 .pricing-item:hover,
		.pricing-v1 .pricing-item .price .hexa,
		.pricing-v1 .pricing-item .button a,
		.testimonial-v1 .overlay,
		.news-v1 .date .day,
		.footer-social,
		.footer-social .item ul li,
		.footer-col h3:after,
		.scrollup i,
		.news-v1 .owl-controls .owl-prev:hover, 
		.news-v1 .owl-controls .owl-next:hover,
		.doctor-v1 .owl-controls .owl-prev:hover, 
		.doctor-v1 .owl-controls .owl-next:hover,
		.doctor-detail .doctor-single .social ul li a,
		.doctor-detail .contact .icon,
		.doctor-v2 .owl-controls .owl-prev:hover, 
		.doctor-v2 .owl-controls .owl-next:hover,
		.doctor-v2 .social-icons ul li a {
			background: <?php echo $color; ?>!important;
		}

		.department-v2 .department-tab .nav-tabs > li.active > a, 
		.department-v2 .department-tab .nav-tabs > li.active > a:hover, 
		.department-v2 .department-tab .nav-tabs > li.active > a:focus, 
		.department-v2 .department-tab .nav-tabs > li a:hover, 
		.department-v2 .department-tab .nav-tabs > li a:focus,
		.footer-social .item ul li a {
			border-color: <?php echo $color; ?>!important;
		}

		.pricing-v1 .pricing-item .price .hexa:before,
		.widget h4,
		.heading-normal h2 {
			border-bottom-color: <?php echo $color; ?>!important;
		}
		.pricing-v1 .pricing-item .price .hexa:after {
			border-top-color: <?php echo $color; ?>!important;
		}

	</style>

	<script type="text/javascript" src=""></script>
	<!--//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons-->
</head>
<body>

<?php
// Getting Facebook comment code from the database
$statement = $pdo->prepare("SELECT * FROM comment WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) 
{
	echo $row['code_body'];
}
?>
	
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<div class="page-wrapper">
		
		<!-- Top Bar Start -->
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-4 top-contact">
						<div class="list">
							<i class="fa fa-envelope"></i> <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a>
						</div>
						<div class="list">
							<i class="fa fa-phone"></i> <?php echo $contact_phone; ?>
						</div>
					</div>
					<div class="col-md-8 top-social">
						<ul>
							<?php
							// Getting and showing all the social media icon URL from the database
							$statement = $pdo->prepare("SELECT * FROM social");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
							foreach ($result as $row) 
							{
								if($row['social_url']!='')
								{
									echo '<li><a href="'.$row['social_url'].'"><i class="'.$row['social_icon'].'"></i></a></li>';
								}
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Top Bar End -->

		<!-- Header Start -->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-4 logo">
						<a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $logo; ?>" alt=""></a>
					</div>
					<div class="col-md-8 nav-wrapper">

						<!-- Nav Start -->
						<div class="nav">
							<ul class="sf-menu">

								<?php
								// Showing the menu dynamically from the database
								$statement = $pdo->prepare("SELECT * FROM menu ORDER BY menu_order ASC");
								$statement->execute();
								$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
								foreach ($result as $row) 
								{
									echo '<li>';
									if($row['menu_parent']==0)
									{
										if($row['menu_type']=='Category')
										{
											echo '
											<a href="'.BASE_URL.'category/'.$row['category_or_page_slug'].'">
												<span class="menu-title">
													'.$row['menu_name'].'
												</span>
											</a>
											';
										}
										if($row['menu_type']=='Page')
										{
											echo '
											<a href="'.BASE_URL.'page/'.$row['category_or_page_slug'].'">
												<span class="menu-title">
													'.$row['menu_name'].'
												</span>
											</a>
											';
										}
										if($row['menu_type']=='Other')
										{
											echo '<a href="'.$row['menu_url'].'">';
											echo '
												<span class="menu-title">
													'.$row['menu_name'].'
												</span>
												';
											echo '</a>';
										}
									}

									$statement1 = $pdo->prepare("SELECT * FROM menu WHERE menu_parent=?");
									$statement1->execute(array($row['menu_id']));
									$total = $statement1->rowCount();
									if($total)
									{
										echo '<ul>';
										$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);							
										foreach ($result1 as $row1) 
										{
											echo '<li>';
											if($row1['menu_type']=='Category')
											{
												echo '<a href="'.BASE_URL.'category/'.$row1['category_or_page_slug'].'">';
											}
											if($row1['menu_type']=='Page')
											{
												echo '<a href="'.BASE_URL.'page/'.$row1['category_or_page_slug'].'">';
											}
											if($row1['menu_type']=='Other')
											{
												echo '<a href="'.$row1['menu_url'].'">';
											}											
											echo $row1['menu_name'];
											echo '</a>';
											echo '</li>';
										}
										echo '</ul>';
									}
									echo '</li>';
								}
								?>
							</ul>
						</div>
						<!-- Nav End -->

					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->