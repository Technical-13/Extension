<?php

$namespaceNames = array();

// For wikis without Concepts installed.
if ( !defined( 'NS_CONCEPT' ) ) {
	define( 'NS_CONCEPT', 332 );
	define( 'NS_CONCEPT_TALK', 333 );
}

$namespaceNames['en'] = array(
	NS_CONCEPT       => 'Concept',
	NS_CONCEPT_TALK  => 'Concept_talk',
);

$namespaceNames['de'] = array(
	NS_CONCEPT_TALK  => 'Concept_Diskussion',
);
