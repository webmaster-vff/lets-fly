<?php

// nested menu
$items = $pages->visible();

// only show the menu if items are available
if($items->count()):

?>
<nav class="navigation column" role="navigation">
  <ul class="menu">
    <?php foreach($items as $item): ?>
    <?php if($item->title() <> "Inside"): ?>
     <li class="menu-item">
       <a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>

      <?php

      // get all children for the current menu item
      $children = $item->children()->visible();

      // display the submenu if children are available
      if($children->count() > 0):

      ?>
      <ul class="dropdown-list">
        <?php foreach($children as $child): ?>
        <li class="dropdown-item"><a<?php e($child->isOpen(), ' class="active"') ?> href="<?php echo $child->url() ?>"><?php echo $child->title()->html() ?></a></li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

     </li>
   <?php else: ?>
     <li class="menu-item">
       <?php if($user = $site->user()): ?>
        <a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>
      <?php else: ?>
        <a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $site->page('login')->url() ?>"><?php echo $item->title()->html() ?></a>
      <?php endif ?>
      <?php if($user = $site->user()): ?>
        <ul class="dropdown-list">
      <?php
      // get all children for the current menu item
      $children = $item->children()->visible();

      // display the submenu if children are available
      if($children->count() > 0):

      ?>
        <?php foreach($children as $child): ?>
        <li class="dropdown-item"><a<?php e($child->isOpen(), ' class="active"') ?> href="<?php echo $child->url() ?>"><?php echo $child->title()->html() ?></a></li>
        <?php endforeach ?>
      <?php endif ?>
      <li class="dropdown-item"><a<?php e($child->isOpen(), ' class="active"') ?> href="<?php echo url('logout') ?>">Logout</a></li>
    </ul>
    <?php endif ?>
  </li>
   <?php endif ?>
    <?php endforeach ?>
  </ul>
</nav>
<?php endif ?>
