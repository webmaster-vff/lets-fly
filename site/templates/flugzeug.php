<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="wrap wide">
      <?php snippet('sidebar') ?>
      <div class="w730">
      <div class="article-header">
        <h3><?= $page->title()->html() ?></h3>
        <h4><?= $page->intro()->html() ?></h4>
        <hr />


      <?php snippet('coverimage', $page) ?>

      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>
    </div>
  </div>

  <?php snippet('prevnext', ['flip' => true]) ?>
  </div>


  </main>

<?php snippet('footer') ?>
