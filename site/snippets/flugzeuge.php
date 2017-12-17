<?php if($image = $item->coverimage()->toFile()): ?>
  <figure class="cover">
    <a href="<?= $image->url() ?>" data-lightbox="Flugzeuge" data-title="">
      <img src="<?= $image->url() ?>" alt="" width="100%"/>
    </a>
  </figure>
<?php endif ?>
