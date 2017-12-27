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
								<hr />
							</div>
						<?php else: ?>
							<div class="text">
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
												<!-- <img src="<?= $page->file($imagesarray['image'])->url() ?>" alt="" width="360"/> -->
												<?= thumb($page->file($imagesarray['image']), array('width' => 360)) ?>
											</a>
											<?php endfor ?>
										</figure>
									<?php endif ?>
									<?php $i=$i+2 ?>
								<?php endforeach ?>
								<?php if($p = $n-$i >= 2): ?>
									<?php if($p % 2 == 1): ?>
										<?php $p-- ?>
									<?php endif ?>
									<figure>
									<?php for ($j=0; $j<$p; $j++): ?>
										<?php $imagesarray = $images[$i+$j] ?>
										<a class="noline" href="<?= $page->file($imagesarray['image'])->url() ?>" data-lightbox="<?= $page->title() ?>" data-title="<?= $page->title() ?>">
											<!-- <img src="<?= $page->file($imagesarray['image'])->url() ?>" alt="" width="360"/> -->
											<?= thumb($page->file($imagesarray['image']), array('width' => 360)) ?>
										</a>
									<?php endfor ?>
									</figure>
								<?php endif?>
								<hr />
							</div>
						<?php endif ?>
					<?php endif ?>

					</div>

			</div>

			<?php snippet('prevnext', ['flip' => true]) ?>
		</div>


	</main>

<?php snippet('footer') ?>
