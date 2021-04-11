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
];