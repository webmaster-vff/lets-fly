<?php snippet('header') ?>

<main class="main" role="main">
 <div class="wrap wide">

  <div class="w730">
   <h3><?php echo $page->title()->html() ?></h3>
   <hr />

   <?php if($error): ?>
    <div class="alert"><?php echo $page->alert()->html() ?></div>
    <p>
   <?php endif ?>

   <form method="post">
    <div>
     <label class="login-label" for="username"><?php echo $page->username()->html() ?></label>
     <input class="login" type="text" id="username" name="username">
    </div>
    <div>
     <label class="login-label" for="password"><?php echo $page->password()->html() ?></label>
     <input class="login" type="password" id="password" name="password">
    </div>
    <div>
     <input class="button" type="submit" name="login" value="<?php echo $page->button()->html() ?>">
    </div>
   </form>
  </div>
  <?php snippet('sidebar') ?>
 </div>
</main>

<?php snippet('footer') ?>
