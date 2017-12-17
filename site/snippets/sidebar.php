<div class="w365">

   <?php $sidebarpage = $site->children()->get('sidebar') ?>
   <?php $sbpages = $sidebarpage->children() ?>
   <?php foreach($sbpages as $sbpage): ?>
     <?php $pagetitle = $sbpage->slug() ?>

        <?php $snippet = snippet($pagetitle, array ('page' => $sbpage),true) ?>
     <?php if ($snippet):?>
       <?= $snippet  ?>
     <?php else: ?>
        <div class="caption">
           <p><?php echo $sbpage->title() ?></p>
        </div>
        <div class="text">
           <?= $sbpage->text()->kirbytext() ?>
         </div>
     <?php endif ?>
   <?php endforeach ?>
</div>
