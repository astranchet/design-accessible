<?php

return function ($page, $pages, $site, $kirby) {

	$phases = $page->ressources()->toStructure()->pluck('phase', ',', true);
	$langs = $page->ressources()->toStructure()->pluck('lang', ',', true);
	$thematiques = $page->ressources()->toStructure()->pluck('thematique', ',', true);

	// get counts for all tags as a measure of popularity
	$thematiques = array_map(function($thematique) { 
	  $count = page('ressources')->ressources()->toStructure()->filterBy('thematique', $thematique, ",")->count();
	  return array('name' => $thematique, 'count' => $count);
	}, $thematiques);

	usort($thematiques, function($a, $b) {
	    return $b['count'] - $a['count'];
	});

	return compact('phases', 'langs', 'thematiques');
};

?>