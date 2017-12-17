<?php if(!$site->user()) go('/login') ?>
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
      <ul>
       <?php foreach($page->documents()->filterBy('extension', 'pdf') as $pdf): ?>
        <li>
         <a href="<?php echo $pdf->url() ?>" target="_blank">
          <?php echo $pdf->filename() ?>
         </a>
        </li>
       <?php endforeach ?>
      </ul>
    </div>

    <?php snippet('sidebar') ?>

	</div>
  </main>

<?php snippet('footer') ?>
