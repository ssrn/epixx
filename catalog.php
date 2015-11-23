<?php require("data/data.php"); ?>

<?php require($template_dir."/head.php"); ?>
<body>
	<?php require($template_dir."/header.php"); ?>
<section>
<div class="container">
	<div class="row clearfix">
	    <!-- боковое меню -->
		<?php require($template_dir."/side_nav.php"); ?>
		<div class="column column9">
			<div class="catalog">
				<!-- хлебные крошки -->
				<div class="breadcrumbs">
					<a href="index.html">Магазин</a>
					<p>Мини - утки</p>
				</div>
				<div class="row clearfix">
					<!-- элементы каталога -->
					<?php require($catalog_template_dir."/list_items.php"); ?>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<?php require($template_dir."/footer.php"); ?>