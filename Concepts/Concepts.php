<?php
/**
 * @author Technical 13
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	echo "This file is not a valid entry point.";
	exit( 1 );
}

$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'Concepts',
	'descriptionmsg' => 'concepts-desc',
	'version' => '1.0',
	'author' => '[https://en.wikipedia.org/wiki/User:Technical_13 Donald J. Fortier II]',
	'url' => 'https://www.mediawiki.org/wiki/Extension:Concepts'
);

/**
 * Set this to the index of the Concept namespace
 */
if ( !defined( 'NS_CONCEPT' ) ) {
	define( 'NS_CONCEPT', 332 );
}
if ( !defined( 'NS_CONCEPT_TALK' ) ) {
	define( 'NS_CONCEPT_TALK', NS_CONCEPT + 1 );
} elseif ( NS_CONCEPT_TALK != NS_CONCEPT + 1 ) {
	throw new MWException( 'Configuration error. Do not define NS_CONCEPT_TALK, it is automatically set based on NS_CONCEPT.' );
}

// Support subpages only for talk pages by default
$wgNamespacesWithSubpages[NS_CONCEPT_TALK] = true;

// Define new right
$wgAvailableRights[] = 'reviewconcept';

// Assign reviewing to concept_reviewer and sysop groups only
$wgGroupPermissions['*']['reviewconcept'] = false;
$wgGroupPermissions['concept_reviewer']['reviewconcept'] = true;
$wgGroupPermissions['sysop']['reviewconcept'] = true;

// Set this to true to use FlaggedRevs extension's stable version for concept security
$wgConceptsUseFlaggedRevs = false;

$dir = dirname( __FILE__ ) . '/';

// Initialize Smarty
require_once( $dir . 'smarty/libs/Smarty.class.php' );
$wgExtensionMessagesFiles['Concepts'] = $dir . 'Concepts.i18n.php';
$wgExtensionMessagesFiles['ConceptsNamespaces'] = $dir . 'Concepts.i18n.namespaces.php';
$wgAutoloadClasses['ConceptRenderer'] = $dir . 'ConceptRenderer.php';

$wgExtensionMessagesFiles['ConceptsMagic'] = $dir . 'Concepts.i18n.magic.php';

// Parser function registration
$wgExtensionFunctions[] = 'conceptNamespacesInit';
$wgExtensionFunctions[] = 'ConceptRenderer::initRandomString';
$wgHooks['ParserFirstCallInit'][] = 'conceptParserFunctions';
$wgHooks['ParserAfterTidy'][] = 'ConceptRenderer::processEncodedConceptOutput';
$wgHooks['CanonicalNamespaces'][] = 'conceptsAddNamespaces';

/**
 * @param $parser Parser
 * @return bool
 */
function conceptParserFunctions( &$parser ) {
	$parser->setFunctionHook( 'concept', array( 'ConceptRenderer', 'renderConcept' ) );
	return true;
}

// Define new namespaces
function conceptsAddNamespaces( &$list ) {
	$list[NS_CONCEPT] = 'Concept';
	$list[NS_CONCEPT_TALK] = 'Concept_talk';
	return true;
}

function conceptNamespacesInit() {
	global $wgNamespaceProtection, $wgConceptsUseFlaggedRevs;

	if ( !$wgConceptsUseFlaggedRevs ) {
		// Setting required namespace permission rights
		$wgNamespaceProtection[NS_CONCEPT] = array( '*' );
	}
}
