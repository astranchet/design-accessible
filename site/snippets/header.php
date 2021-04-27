<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="UTF-8">
      <title>
          <?php if ($page->isHomePage()): ?>
            <?= $site->title() ?>
          <?php else: ?>
            <?= $page->title() . ' - ' . $site->title() ?>
          <?php endif ?>
      </title>
      <?= css(['assets/css/main.css', '@auto']) ?>
      <meta name="theme-color" content="#01A58E">
    </head>

    <body>

      <div class="skiplinks">
        <nav role="navigation" aria-label="Accès rapide">
          <ul>
            <li><a href="#content">Aller au contenu</a></li>
            <li><a href="#menu">Aller au menu</a></li>
            <li><a href="#footer">Aller au pied de page</a></li>
          </ul>
        </nav>
      </div>

      <header role="banner" class="header">
        <div class="header__top">
          <div class="container">
            <div class="header__logo">
              <a href="<?= $site->url() ?>">
                <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><circle cx="12" cy="12.5" r="12" fill="#58C9B9"/><g clip-path="url(#clip0)" fill="#01A58E"><path d="M12.047 7.425a1.992 1.992 0 110-3.985 1.992 1.992 0 010 3.985z"/><path d="M18.308 7.453l-.016.005-.015.004-.107.032c-.662.194-3.875 1.1-6.138 1.1-2.103 0-5.026-.783-5.96-1.049a2.624 2.624 0 00-.285-.091c-.676-.178-1.139.508-1.139 1.136 0 .621.559.917 1.123 1.13v.01l3.387 1.058c.346.132.439.268.484.385.147.377.03 1.123-.012 1.383l-.207 1.601-1.145 6.268a1.143 1.143 0 00-.01.052l-.007.045c-.083.575.339 1.132 1.138 1.132.697 0 1.005-.481 1.138-1.136.134-.655.996-5.605 1.494-5.605s1.524 5.605 1.524 5.605c.134.655.441 1.136 1.139 1.136.8 0 1.223-.56 1.138-1.136a2.084 2.084 0 00-.027-.145l-1.16-6.215-.207-1.601c-.149-.932-.029-1.24.011-1.313a.035.035 0 00.003-.005c.039-.071.214-.23.622-.384l3.176-1.11a.604.604 0 00.058-.019c.569-.213 1.138-.508 1.138-1.135 0-.628-.462-1.315-1.138-1.138z"/></g><defs><clipPath id="clip0"><path fill="#fff" transform="translate(2.94 3.44)" d="M0 0h18.213v18.213H0z"/></clipPath></defs></svg>
                Design Accessible
              </a>
            </div>
            <nav role="navigation" aria-label="Navigation principale">
              <ul class="header__menu" id="menu">
                <li><a href="<?= page('decouvrir')->url() ?>">Découvrir</a></li>
                <li><a href="#">Checkliste</a></li>
                <li><a href="<?= page('ressources')->url() ?>">Ressources</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="header__main">
          <div class="container">
            <h1 class="header__title">
              <?= $site->heading()->kirbytextinline() ?>
            </h1>
            <h2 class="header__subtitle">
              <?= $site->baseline()->kirbytextinline() ?>
            </h2>
          </div>
        </div>
      </header>

      <main role="main">
        <div class="container">

