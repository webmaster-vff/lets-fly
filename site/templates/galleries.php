<?php snippet('header') ?>

  <main class="main" role="main">
  <div class="wrap wide">

    <div class="w730">
      <h2><?= $page->title()->html() ?></h2>
      <hr />
      <?php if($galleries->count()): ?>
        <?php foreach ($galleries as $gallery): ?>
          <?php $images = $gallery->images() ?>
          <h4><a href="<?= $gallery->url() ?>"><?= $gallery->title()->html() ?> (<?= $images->count() ?> Bilder)</a></h4>
          <?php if($images->count()): ?>
           <figure class="gallery">
             <a class="noline" href="<?= $gallery->url() ?>"><?= thumb($images->first(), array('width' => 360)) ?></a>
             <a class="noline" href="<?= $gallery->url() ?>"><?= thumb($images->last(), array('width' => 360)) ?></a>
           </figure>
          <?php endif ?>
        <?php endforeach ?>
      <?php else: ?>
        <p>Es gibt noch keine Bildergallerien</p>
      <?php endif ?>
    </div>

    <?php snippet('sidebar') ?>

  </div>
  </main>

<?php snippet('footer') ?>
