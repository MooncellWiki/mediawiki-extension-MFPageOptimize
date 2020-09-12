<?php
class MFPageOptimize {
    
    public static function onBeforePageDisplayMobile( OutputPage $out, Skin $sk ) {
        global $wgRequest;
		$headers = $wgRequest->getHeader( 'User-Agent' );
		
		$wgMCScriptCode = <<<'START_END_MARKER'
<style>form.header{display:none}.footer-content{display:none}</style>
START_END_MARKER;

		if (strpos($headers, 'mooncellApp') != false) {
		    $out->addHeadItem('mooncellApp', $wgMCScriptCode);
		}
		
		return true;
    }
    
}