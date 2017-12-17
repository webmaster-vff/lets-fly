<div class="caption">
	 <p><?php echo $page->title() ?></p>
</div>
<div class="text">
	 <?= $page->text()->kirbytext() ?>
	 <figure>
		 <a class="noline" href="https://de-de.facebook.com/vff.geisweid/" target="_blank">
			 <img class="logo" src="<?= $page->files()->get('facebook.png')->url() ?>" alt="FB" width="48">
		 </a>
		 <a class="noline" href="https://www.youtube.com/channel/UCXnHgBcsXCSTNbJY5QbrpkQ" target="_blank">
			 <img class="logo" src="<?= $page->files()->get('youtube.png')->url() ?>" alt="Youtube" width="52">
		 </a>
		 <a class="noline" href="https://www.instagram.com/vff.geisweid/" target="_blank">
			 <img class="logo" src="<?= $page->files()->get('instagram.png')->url() ?>" alt="Instagram" width="48">
		 </a>
	 </figure>
</div>
