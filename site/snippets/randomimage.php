<?php if($n = $item->pictures()->toStructure()->count()): ?>
  <?php $rnd = rand ( 1 , $n ) ?>
  <?php $i = 1 ?>
  <?php foreach($item->pictures()->toStructure() as $image): ?>
    <?php if($i == $rnd) break ?>
    <?php $i++ ?>
  <?php endforeach ?>
  <figure class="cover">
    <a href="<?= $item->file($image)->url() ?>" data-lightbox="Coverimage" data-title="">
      <!--<img src="<?= $image->url() ?>" alt="" width="100%"/>-->
      <img src="<?= thumb($item->file($image), array('width' => 738))->url() ?>" alt="" width="100%"/>
    </a>
  </figure>
<?php endif ?>
