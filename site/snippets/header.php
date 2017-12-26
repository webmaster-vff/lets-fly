<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="keywords" content="VfF-Geisweid, Segelfliegen, Siegerland, Siegen, Burbach, Gastflug, Jugend, Freizeit, Hobby, Luftsport, Segelflugausbildung,
                                 Jugendgruppe, Campingplatz, Siegerland Flughafen, Vereinsheim mieten, Feiern aller Art, Geburtstagsfeiern, JubilĂ¤umsfeiern,
                                 Weihnachtsfeiern, Raum mieten, Veranstaltungen">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <link rel="shortcut icon" href="<?= $site->url()."/assets/images/favicon.ico" ?>">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Monofett" rel="stylesheet">
  <?= css('assets/css/index.css') ?>
  <?= css('assets/css/lightbox.css') ?>
  <?= js('assets/js/jquery-3.2.1.min.js') ?>


</head>
<body>

  <header class="header wrap wide" role="banner">
    <div class="grid">

      <div class="branding column-left">
        <?php if($image = $site->image()): ?>
          <a href="<?= url() ?>" rel="home">
			     <img src="<?php echo $image->url() ?>" alt=""></a>
			  <?php endif ?>
        <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>
        <h4><?= $site->subtitle()->html() ?></h4>
      </div>
      <div class="branding column-right">
        <ul class="branding-list">
          <li>Segelflug</li>
          <li>Motorsegelflug</li>
          <li>Ultraleichtflug</li>
          <li>Ausbildung</li>
          <li>Leistungsflug</li>
        </ul>
      </div>

      <?php snippet('menu') ?>

    </div>
  </header>
