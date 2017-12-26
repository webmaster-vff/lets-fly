<?php snippet('header') ?>

	<main class="main" role="main">

    <div class="wrap wide">
			<?php snippet('sidebar') ?>
			<div class="w730">
				<div class="article-header">
					<h3><?= $page->title()->html() ?></h3>
					<div class="intro text">
						<?php setlocale(LC_TIME, "de_DE.utf8"); ?>
						<?= $page->date("%d. %B %Y") ?>
					</div>
					<hr />

					<?php if($n = $page->pictures()->toStructure()->count()): ?>
						<?php if($n == 1): ?>
							<?php snippet('randomimage', $page) ?>
							<div class="text">
								<?= $page->text()->kirbytext() ?>
							</div>
						<?php else: ?>
								<?php $text = $page->text()->kirbytext() ?>

								<?php $paragraph = explode('</p>', $text) ?>
								<?php $i=0 ?>
								<?php foreach ($paragraph as $text): ?>
									<?= $text."</p>" ?>
									<?php $images = array_values($page->pictures()->yaml()) ?>

									<?php if($n >= $i+1): ?>
										<figure>
										<?php for ($j=0; $j<2; $j++): ?>
											<?php $imagesarray = $images[$i+$j] ?>
											<a class="noline" href="<?= $page->file($imagesarray['image'])->url() ?>" data-lightbox="<?= $page->title() ?>" data-title="<?= $page->title() ?>">
												<img src="<?= $page->file($imagesarray['image'])->url() ?>" alt="" width="360"/>
											</a>
											<?php endfor ?>
										</figure>
									<?php endif ?>
									<?php $i=$i+2 ?>
								<?php endforeach ?>
							<?php endif ?>
					<?php endif ?>

					</div>
			</div>

			<?php snippet('prevnext', ['flip' => true]) ?>
		</div>


	</main>

<?php snippet('footer') ?>
