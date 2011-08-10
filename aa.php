<?php
if ( ! defined( 'MEDIAWIKI' ) )
	die();

$wgExtensionCredits['parserhook'][] = array(
	'name' => 'AsciiArts',
	'author' => 'Beyond',
	'description' => '<nowiki><aa>(^_^)</aa></nowiki>',
	'url' => 'http://ja.yourpedia.org/wiki/AsciiArtsExtension'
);

$wgExtensionFunctions[] = 'wfAsciiArtsExtension';

function wfAsciiArtsExtension() {
    global $wgParser;
    $wgParser->setHook( 'aa', 'asciiArts' );
}

function asciiArts($aainput) {
$aaoutput = htmlspecialchars($aainput);
return '<pre style="font-family:\'ＭＳ Ｐゴシック\',IPAMonaPGothic; font-size: 12pt; background:#fff; border:0; margin-left: 1em;">'."$aaoutput".'</pre>';
}

?>
