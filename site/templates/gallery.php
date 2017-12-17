<?php snippet('header') ?>

  <main class="main" role="main">
	<div class="wrap wide">

    <div class="w730">
      <h2><?= $page->title()->html() ?></h2>
      <hr />
      <div class="text">
       <?= $page->text()->kirbytext() ?>
      </div>
      <?php $i=1 ?>
      <?php foreach ($page->images() as $image): ?>
        <?php if ($i % 2 <> 0): ?>
         <figure>
        <?php endif ?>
          <a href="<?= $image->url() ?>" data-lightbox="<?= $page->title() ?>" data-title="<?= $page->title() ?>">
            <!--<img src="<?= $image->url() ?>" alt="" width="360"/>-->
            <?= thumb($image, array('width' => 360)) ?>
          </a>
        <?php if ($i % 2 == 0): ?>
         </figure>
       <?php endif ?>
       <?php $i++ ?>
      <?php endforeach ?>
    </div>

    <?php snippet('sidebar') ?>

	</div>
  </main>

<?php snippet('footer') ?>
