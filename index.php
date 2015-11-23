<?php

//if(!isset($_GET['q'])) {}

?>

<?php //$template_dir="template_parts"; ?>

<?php require("data/data.php"); ?>

<?php require($template_dir."/head.php"); ?>

<body>

	<?php require($template_dir."/header.php"); ?>

<main>
	<div class="container">

		<?php require($template_dir."/banner.php"); ?>

		<div class="row clearfix">
			<!-- боковое меню -->

			<?php require($template_dir."/side_nav.php"); ?>

			<div class="column column9">
				<div class="catalog">
					<div class="row clearfix">
					<!-- элементы каталога -->

						<?php require($template_dir."/list_items.php"); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</main>

	<?php require($template_dir."/footer.php"); ?>
