<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <meta name="keywords" content="<?= $site->keywords()->html() ?>">
  <link rel="shortcut icon" href="<?= $site->url() ?>/assets/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?= $site->url() ?>/assets/images/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $site->url() ?>/assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $site->url() ?>/assets/images/favicon-16x16.png">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/bundle.css') ?>

</head>
<body class="<?= $page->template() ?>">
<?php if($page->hasTemplate() == ''): ?>
  <header class="header header-default" role="banner">
<?php else: ?>
  <header class="header" role="banner">
<?php endif ?>
    <div class="header__bar">
        <div class="logo header__col fade-in">
          <a href="<?= url() ?>" rel="home">Michael Pham</a>
        </div>
        <div class="contact header__col fade-in">
          <div class="contact__btn">
            <a class="contact__link" href="mailto:<?= $site->email(); ?>?Subject=Hello" rel="home">
              Contact
            </a>
          </div>
        </div>
    </div>
  </header>
