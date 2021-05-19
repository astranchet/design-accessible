<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen. 
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */
return [
    'debug' => true,

    'date.handler' => 'strftime',
    
    'locale' => [
	    LC_COLLATE => 'fr_FR.UTF-8',
	    LC_MONETARY => 'fr_FR.UTF-8',
	    LC_NUMERIC => 'fr_FR.UTF-8',
	    LC_TIME => 'fr_FR.UTF-8',
	    LC_MESSAGES => 'fr_FR.UTF-8',
	    LC_CTYPE => 'fr_FRs.UTF-8',
	  ],

	'markdown' => [
	    'extra' => true
	],

	'php-headers' => [
		'Strict-Transport-Security' => "max-age=31536000; includeSubDomains",
		'X-Frame-Options' => "SAMEORIGIN",
		'X-Content-Type-Options' => "nosniff",
		'X-Powered-By' => "",
		// 'Referrer-Policy' => "",
		// 'Permissions-Policy' => "",
	],

	'cspcontent' => [
		'default-src' => ["'none'"],
		'script-src' => [
			"'self'",
			// "https://www.googletagmanager.com",
			// "https://ajax.googleapis.com",
			// "https://www.google-analytics.com",
			// "https://cdn.jsdelivr.net",
			"https://scripts.withcabin.com",
			"https://code.iconify.design/1/1.0.6/iconify.min.js",
			"https://api.iconify.design/",
			"'unsafe-inline'",
			"'unsafe-eval'"
		],
		'style-src' => [
			"'self'",
			"'unsafe-inline'",
		],
		'img-src' => [
			"* data:"
		],
		'media-src' => [
			"*"
		],
		'font-src' => [
			"'self'",
		],
		'manifest-src' => [
			"'self'"
		],
		'base-uri' => [
			"'self'"
		],
		'connect-src' => [
			"'self'",
			"localhost",
			"https://ping.withcabin.com/"
		],
		'frame-src' => [
			"*"
		],  
  	],	

	'panel' => [
	    'css' => 'assets/css/panel.css'
	]

];