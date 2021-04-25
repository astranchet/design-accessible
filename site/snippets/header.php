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
    
    <body class="layout-maxed">

        <div class="skiplinks">
            <nav role="navigation" aria-label="Accès rapide">
                <ul>
                    <li><a href="#content">Aller au contenu</a></li>
                    <li><a href="#menu">Aller au menu</a></li>
                    <li><a href="#footer">Aller au pied de page</a></li>
                </ul>
            </nav>
        </div>

        <nav role="navigation" aria-label="Navigation principale" id="entete" class="layout-hero">
            <ul id="menu">
                <li><a href="<?= $site->url() ?>">Design Accessible</a></li>
                <li><a href="#">Découvrir</a></li>
                <li><a href="#">Checkliste</a></li>
                <li><a href="<?= page('ressources')->url() ?>">Ressources</a></li>
            </ul>
        </nav>

        <header role="banner" class="layout-hero">
            <h1><?= $site->heading()->kirbytextinline() ?></h1>
            <h2><?= $site->baseline()->kirbytextinline() ?></h2>
        </header>

        <?php if ($page->isHomePage()): ?>
        <?php $quote = $page->quotes()->toStructure()->shuffle()->first(); ?>
        <section id="citation" class="layout-hero"> 
            <blockquote>
                <p><?= $quote->citation()->kt() ?></p>
                <?php if ($quote->source()->isNotEmpty()) : ?>
                    <footer>
                    <?php if ($quote->url()->isNotEmpty()) : ?>
                        <p>Source : <a href="<?= $quote->url() ?>"><?= $quote->source() ?></a></p>
                    <?php else : ?>
                        <p>Source : <?= $quote->source() ?></p>
                    <?php endif ?>
                    </footer>
                <?php endif ?>
            </blockquote>
        </section>
        <?php endif ?>

        <main role="main">
