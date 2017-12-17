<?php if($image = $item->coverimage()->toFile()): ?>
  <figure class="cover">
    <a href="<?= $image->url() ?>" data-lightbox="Coverimage" data-title="">
      <!--<img src="<?= $image->url() ?>" alt="" width="100%"/>-->
      <img src="<?= thumb($image, array('width' => 738))->url() ?>" alt="" width="100%"/>
    </a>
  </figure>
<?php endif ?>
