<?php

return function ($page, $pages, $site, $kirby) {

	// Page title
	$title = $page->isHomePage() ? $site->title() : $page->title() . ' - ' . $site->title();

	// Header baseline
	$baseline = $page->baseline()->exists() ? $page->baseline() : $site->baseline();


	$phases = $page->ressources()->toStructure()->pluck('phase', ',', true);
	$langs = page('ressources')->blueprint()->field('ressources')['fields']['lang']['options'];

	// get counts for all tags as a measure of popularity
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
	if($tag = param('phase')) {
    	$ressources = $ressources->filterBy('phase', urldecode($tag), ',');
  	}
	if($tag = param('lang')) {
    	$ressources = $ressources->filterBy('lang', urldecode($tag), ',');
  	}
	if($tag = param('thematique')) {
    	$ressources = $ressources->filterBy('thematique', urldecode($tag), ',');
  	}

	return compact('title', 'baseline', 'phases', 'langs', 'thematiques', 'ressources');
};

?>