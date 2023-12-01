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

	// Get counts for all tags
	$thematiques = $page->ressources()->toStructure()->pluck('thematique', ',', true);
	$thematiques = array_map(function($thematique) { 
	  $count = page('ressources')->ressources()->toStructure()->filterBy('thematique', $thematique, ",")->count();
	  return array('name' => $thematique, 'count' => $count);
	}, $thematiques);

	usort($thematiques, function($a, $b) {
	    return $b['count'] - $a['count'];
	});

	// Ressources filtered
	$ressources = page('ressources')->ressources()->toStructure()
		->sortBy('date', 'desc')
		->filterBy('title', '!=', null);
	$ressources_title = '<b>{{ desc }}</b> : {{ count }} ressource{{ plural }}';
	$is_filtered = true;
	$filter = null;
	$family = null;

	if($tag = param('phase')) {
    	$ressources = $ressources->filterBy('phase', rawurldecode($tag), ',');
    	$desc = rawurldecode($tag);
    	$filter = 'phase';
  	} elseif ($tag = param('lang')) {
    	$filter = 'lang';
    	$ressources = $ressources->filterBy('lang', rawurldecode($tag), ',');
    	$desc = ($tag == "en") ? "Anglais" : "Français";
    } elseif ($tag = param('family')) {
    	$filter = 'family';
    	// 1. Récupérer tous tags associés à cette famille
    	$tags = page('ressources')->tags()->toStructure()->filterBy('name', rawurldecode($tag))->first()->thematiques()->split(",");
    	// 2. Filtrer toutes les ressources associées à ces tags
    	$ressources = $ressources->filterBy('thematique', 'in', $tags);
    	$desc = rawurldecode($tag);
    	$family = $desc;
  	} elseif ($tag = param('thematique')) {
    	$filter = 'thematique';
    	$ressources = $ressources->filterBy('thematique', rawurldecode($tag), ',');
    	$ressources_title = '<b>{{ desc }}</b> : {{ count }} ressource{{ plural }}';
    	$desc = rawurldecode($tag);
  	} else {
		$ressources_title = '<b>{{ count }} ressource{{ plural }}</b> {{ desc }}';
  		$desc = 'triées avec amour';
		$is_filtered = false;
  	}

  	$ressources_title = Str::template($ressources_title, [
  		'count' => $ressources->count(),
	  	'plural' => $ressources->count() > 1 ? 's' : '',
	  	'desc' => $desc
  	]);

  	if ($is_filtered) {
  		$title = Str::unhtml($ressources_title) . ' - ' . $site->title();
  	} else {
  		$ressources = $ressources->limit(3);  		
  	}

	return compact('title', 'baseline', 'phases', 'langs', 'thematiques', 'ressources', 'ressources_title', 'is_filtered', 'filter', 'family', 'seo');
};

?>