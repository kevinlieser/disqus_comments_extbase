<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "disqus_comments_extbase".
 *
 * Auto generated 18-03-2016 12:31
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'DISQUS Comments Extbase',
	'description' => 'Extbase version of DISQUS Comments.

Provides DISQUS Comment Services to TYPO3 tt_content.',
	'category' => 'plugin',
	'version' => '2.0.7',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Kevin Lieser',
	'author_email' => 'info@ka-mediendesign.de',
	'author_company' => 'KA Mediendesign',
	'constraints' => 
	array (
		'depends' => 
		array (
			'extbase' => '6.2.0-8.7.99',
			'fluid' => '6.2.0-8.7.99',
			'typo3' => '6.2.0-8.7.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

