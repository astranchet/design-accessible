<?php
// Headers PHP

// Définition des headers depuis config.php
$headers = option('php-headers');
foreach ($headers as $key => $value) {
	header(sprintf('%s: %s', $key, $value));
}
//Définition des CSP selon le tableau d'options présent dans config.php
$csp = option('cspcontent');
$csp = array_map(static function ($value, $key) {
  if (is_array($value)) {
    return sprintf('%s %s', $key, implode(' ', $value));
  }

  return $value;
}, $csp, array_keys($csp));

//Envoi du header CSP à proporement parler
header(sprintf('Content-Security-Policy: %s', implode('; ', $csp)));
?>