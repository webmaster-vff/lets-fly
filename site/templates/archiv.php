<?php if(!$site->user()) go('/login') ?>
<?php snippet('header') ?>

  <main class="main" role="main">
	<div class="wrap wide">

    <div class="w730">
      <h2><?= $page->title()->html() ?></h2>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />

      <div class="text">

      <?= $page->text()->kirbytext() ?>
      <ul>
       <?php $children = $page->children();
       foreach ($children as $child): ?>
        <li><a href="<?= $child->url() ?>">Jahresarchiv <?= $child->title() ?>
       <?php endforeach ?>
     </ul>
      </div>

    </div>

    <?php snippet('sidebar') ?>

	</div>
  </main>

<?php snippet('footer') ?>
