<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            <?php if ($page->isHomePage()): ?>
                <?= $site->title() ?>
            <?php else: ?>
                <?= $page->title() . ' - ' . $site->title() ?>
        <?php endif ?>
        </title>
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

        <ul id="menu">
            <li><a href="<?= $site->url() ?>">Design Accessible</a></li>
        	<li><a href="">Découvrir</a></li>
        	<li><a href="<?= page('ressources')->url() ?>">Toutes les ressources</a></li>
        	<li><a href="">Contribuer</a></li>
        </ul>

        <h1><?= $site->heading()->kt() ?></h1>