<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include('partials/head.php'); ?>
	</head>
	<body>
		<div id="app">
			<div class="main-wrapper">
				
				<?php include('partials/header.php'); ?>
				<?php include('partials/sidebar.php'); ?>

				<!-- Main Content -->
				<div class="main-content">
					<section class="section">
						<?php include('shop/orders/index.php') ?>
					</section>
				</div>
			</div>
		</div>

		<?php include('partials/footer.php'); ?>
	</body>
</html>
