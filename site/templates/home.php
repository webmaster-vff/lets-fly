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
        <?= $page->intro()->kirbytext() ?>
      	</div>
       <div class="text">
          <?= $page->text()->kirbytext() ?>
        </div>
      <?php endif ?>

      <hr />

    <section>
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

          <article class="article index">

            <header class="article-header">
              <h3 class="article-title">
                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              </h3>

              <p class="article-date"><?= $article->date("%d. %B %Y") ?></p>
            </header>


            <?php if($article->template()=="artikel-mit-bildern"): ?>
              <?php snippet('randomimage', $article) ?>
            <?php else: ?>
              <?php snippet('coverimage', $article) ?>
            <?php endif ?>

            <div class="text">
              <p>
                <?php if ($article->text()->kirbytext()->words()>100): ?>
                  <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
                  <a href="<?= $article->url() ?>" class="article-more">weiterlesen</a>
                <?php else: ?>
                  <?php $text = $article->text()->kirbytext();
                  $text = str_replace("<hr />", "", $text);
                  echo $text; ?>
                <?php endif ?>
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

  </div>
  </main>

<?php snippet('footer') ?>
