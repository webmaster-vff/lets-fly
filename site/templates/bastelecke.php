<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="wrap wide">
      <div class="w730">
        <h2><?= $page->title()->html() ?></h2>

        <?php
        // This page uses a separate controller to set variables, which can be used
        // within this template file. This results in less logic in your templates,
        // making them more readable. Learn more about controllers at:
        // https://getkirby.com/docs/developer-guide/advanced/controllers
        if($pagination->page() == 1):
        ?>
        <div class="intro text">
          <?= $page->text()->kirbytext() ?>
        </div>
      <?php endif ?>

      <hr />

    <section class="wrap">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

          <article class="article index">

            <header class="article-header">
              <h3 class="article-title">
                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              </h3>
				      
              <p class="article-date"><?= $article->date("%d. %B %Y") ?></p>
            </header>

            <?php snippet('coverimage', $article) ?>

            <div class="text">
              <p>
                <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
                <a href="<?= $article->url() ?>" class="article-more">weiterlesen</a>
              </p>
            </div>

          </article>

          <hr />

        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
    </section>
  </div>

  <?php snippet('pagination') ?>
  <?php snippet('sidebar') ?>

  </main>

<?php snippet('footer') ?>
