<header>
	<div class="container clearfix">
		<!-- логотип -->
		<a href="#" class="logo"> <?php echo $sitename ?> </a>
<!-- меню -->
<nav>
  <ul>
    <?php foreach($pages as $slug=>$title): ?>
      <li><a href="<?php echo $slug; ?>"><?php echo $title; ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>
</div>
</header>
