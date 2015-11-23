<?php require("data/data.php"); ?>

<?php require($template_dir."/head.php"); ?>
<body>
	<?php require($template_dir."/header.php"); ?>
<section>
<div class="container">
	<div class="row clearfix">
	    <!-- боковое меню -->
		<?php require($template_dir."/side_nav.php"); ?>
		<div class="catalog column column9">
			<div class="order-status ">
				<div class="row clearfix">
					<p>Мини-утка брелок добавлена в корзину</p>
					<a href="" class="order-status-btn-basket">В Корзину</a>
				</div>
			</div>
			<!-- хлебные крошки -->
			<div class="breadcrumbs item-breadcrumbs">
				<a href="index.html">Магазин</a>
				<a href="catalog.html">Мини - утки</a>
			</div>
			
			<div class=" row clearfix item-heading">
				<!-- название товара -->
				<h1 class="item-name column column6">Мини-утка брелок</h1>
				<!-- цена -->
				<p class="price column column6">99 P</p>
			</div>
			<div class="row clearfix">
				<div class="column column6">
					<!-- галерея картинок -->
					<div class="item-gallery">
						<img src="img/item.jpeg" alt="уточка">
						<div class="small-images">
							<?php for ($i=0; $i < 3; $i++): ?>
								<img src="img/item.jpeg" alt="уточка">
							<?php endfor; ?>
						</div>
					</div>
				</div>
				<div class="column column6">
				<!-- описание -->
					<p class="item-description">
					<span class="grey-bold">Резиновая уточка</span> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.
					</p>
					<!-- цена -->
					<p class="price">99 P</p>
					<div class="order-btns">
						<a href="" class="btn-basket">В Корзину</a>
						<a href="" class="btn-click">Купить в 1 клик</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<?php require($template_dir."/footer.php"); ?>