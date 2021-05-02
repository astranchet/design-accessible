<?php

return function ($page, $pages, $site, $kirby) {

	// Page title
	$title = $page->isHomePage() ? $site->title() : $page->title() . ' - ' . $site->title();

	// Header baseline
	$baseline = $page->baseline()->exists() ? $page->baseline() : $site->baseline();

	$phases = $page->ressources()->toStructure()->pluck('phase', ',', true);
	$langs = page('ressources')->blueprint()->field('ressources')['fields']['lang']['options'];

	// SEO headers
	$seo = [
		'description' => $baseline,
		'og:title' => $title,
		'og:image' => $page->file('og.png') ? $page->file('og.png')->publish()->url() : $site->file('og.png')->publish()->url(),
	];

	// get counts for all tags
	$thematiques = $page->ressources()->toStructure()->pluck('thematique', ',', true);
	$thematiques = array_map(function($thematique) { 
	  $count = page('ressources')->ressources()->toStructure()->filterBy('thematique', $thematique, ",")->count();
	  return array('name' => $thematique, 'count' => $count);
	}, $thematiques);

	usort($thematiques, function($a, $b) {
	    return $b['count'] - $a['count'];
	});

	// Ressources filtered
	$ressources = page('ressources')->ressources()->toStructure()->sortBy('date', 'desc');
	$ressources_title = '<b>{{ desc }}</b> : {{ count }} ressource{{ plural }}';
	$ressources_is_filtered = true;
	
	if($tag = param('phase')) {
    	$ressources = $ressources->filterBy('phase', urldecode($tag), ',');
    	$desc = urldecode($tag);
  	} elseif ($tag = param('lang')) {
    	$ressources = $ressources->filterBy('lang', urldecode($tag), ',');
    	$desc = "en " .($tag == "en") ? "Anglais" : "Français";
  	} elseif ($tag = param('thematique')) {
    	$ressources = $ressources->filterBy('thematique', urldecode($tag), ',');
    	$ressources_title = '<b>{{ desc }}</b> : {{ count }} ressource{{ plural }}';
    	$desc = urldecode($tag);
  	} else {
		$ressources_title = '<b>{{ count }} ressource{{ plural }}</b> {{ desc }}';
  		$desc = 'sélectionnées avec amour';
		$ressources_is_filtered = false;
  	}

  	$ressources_title = Str::template($ressources_title, [
  		'count' => $ressources->count(),
	  	'plural' => $ressources->count() > 1 ? 's' : '',
	  	'desc' => $desc
  	]);

	return compact('title', 'baseline', 'phases', 'langs', 'thematiques', 'ressources', 'ressources_title', 'ressources_is_filtered', 'seo');
};

?>