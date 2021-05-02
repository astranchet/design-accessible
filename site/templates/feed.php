<?xml version="1.0" encoding="utf-8" standalone="yes" ?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
    <title><?= $site->title(); ?></title>
    <link><?= $site->url(); ?></link>
    <description><?= $site->baseline(); ?></description>
    <atom:link href="<?= $site->page('feed')->url() ?>" rel="self" type="application/rss+xml" />

    <?php foreach ($ressources->limit(15) as $ressource): ?>
    <item>
        <title><?= $ressource->title() ?></title>
        <link><?= $ressource->url() ?></link>
        <guid isPermaLink="true"><?= $ressource->url() ?></guid>
        <pubDate><?= $ressource->date() ?></pubDate>
        <description><![CDATA[
            <?= $ressource->description() ?>

            <?php foreach ($ressource->phase()->split() as $phase): ?>
	        	#<?= $phase ?> 
			<?php endforeach ?>

			<?php if ($ressource->lang()->isNotEmpty()) : ?>
		        #<?= $langs[$ressource->lang()->value()] ?> 
			<?php endif ?>

		    <?php foreach ($ressource->thematique()->split() as $thematique): ?>
			    #<?= $thematique ?> 
			<?php endforeach ?>

        ]]>
        </description>
    </item>
	<?php endforeach ?>

</channel>
</rss>
