<?php
$kirby->response()->type('application/xml');
echo '<?xml version="1.0" encoding="utf-8" standalone="yes" ?>';
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
    <title><?= $site->title(); ?></title>
    <link><?= $site->url(); ?></link>
    <description><?= $site->baseline(); ?></description>
    <atom:link href="<?= $site->page('rss')->url() ?>" rel="self" type="application/rss+xml" />

    <?php foreach ($ressources->limit(15) as $ressource): ?>
    <item>
        <title><?= $ressource->title() ?></title>
        <link><?= Str::replace($ressource->url(), ['&'], ['&amp;']) ?></link>
        <guid isPermaLink="true"><?= Str::replace($ressource->url(), ['&'], ['&amp;']) ?></guid>
        <pubDate><?= $ressource->date()->toDate(\DateTimeInterface::RSS) ?></pubDate>
        <description><![CDATA[
            <p><?= $ressource->description() ?></p>

            <p>
            <?php foreach ($ressource->phase()->split() as $phase): ?>
	        	#<?= $phase ?> 
			<?php endforeach ?>
		    <?php foreach ($ressource->thematique()->split() as $thematique): ?>
			    #<?= Str::replace(ucwords($thematique), [" ", "'"], "") ?> 
			<?php endforeach ?>
            </p>
        ]]>
        </description>
    </item>
	<?php endforeach ?>

</channel>
</rss>
