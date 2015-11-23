<?php for ($i=0; $i < 9; $i++): ?>

  <div class="item-block column column4">
    <a href="single-item.html" class="item">
      <img src="<?php echo $duckface ?>" alt="уточка">
    </a>
    <p>
      Цена: <?php $price = ($i+1)*100;
      echo $price; ?> Р
    </p>
    <?php if($price>500): ?>
      <a href="" class="btn-basket">В Корзину</a>
    <?php else: ?>
      <a href="" class="btn-basket">Не продается</a>
    <?php endif;?>
  </div>

<?php endfor; ?>