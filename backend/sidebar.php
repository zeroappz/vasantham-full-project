<!-- Sidebar Container Start -->
<div class="sidebar">
	<div class="widget widget-search">
		<form action="<?php echo BASE_URL; ?>search" method="post">
			<input type="text" name="search_string" placeholder="Search">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
	<div class="widget">
		<?php
		$statement = $pdo->prepare("SELECT * FROM settings WHERE id=1");
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row) {
			$total_recent_news_sidebar = $row['total_recent_news_sidebar'];
			$total_popular_news_sidebar = $row['total_popular_news_sidebar'];
		}
		?>
		<h4>Categories</h4>
		<ul>
			<?php
			$statement = $pdo->prepare("SELECT * FROM category ORDER BY category_name ASC");
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
			foreach ($result as $row) {
				?>
				<li><a href="<?php echo BASE_URL; ?>category/<?php echo $row['category_slug']; ?>"><?php echo $row['category_name']; ?></a></li>
				<?php
			}
			?>
		</ul>
	</div>
	<div class="widget">
		<h4>Recent Posts</h4>
		<ul>
			<?php
			$i=0;
			$statement = $pdo->prepare("SELECT * FROM news ORDER BY news_id DESC");
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
			foreach ($result as $row) {
				$i++;
				if($i>$total_recent_news_sidebar) {break;}
				?>
				<li><a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>"><?php echo $row['news_title']; ?></a></li>
				<?php
			}
			?>
		</ul>
	</div>
	<div class="widget">
		<h4>Popular Posts</h4>
		<ul>
			<?php
			$i=0;
			$statement = $pdo->prepare("SELECT * FROM news ORDER BY total_view DESC");
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
			foreach ($result as $row) {
				$i++;
				if($i>$total_popular_news_sidebar) {break;}
				?>
				<li><a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>"><?php echo $row['news_title']; ?></a></li>
				<?php
			}
			?>
		</ul>
	</div>
</div>
<!-- Sidebar Container End -->