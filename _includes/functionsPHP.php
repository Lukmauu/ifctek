<?php

function makeScriptTag($number) {
    if($number === 1){
        $jquery =               file_get_contents('js/jquery.1.9.1.un-min.js');
        $setupJqueryMobile =    file_get_contents('js/setupJqueryMobile.js');
        $jqueryMobile =         file_get_contents('js/jquery.mobile.1.3.2-min.js');
        $posytip =              file_get_contents('js/jquery.poshytip.min.js');
        $flexlider =            file_get_contents('js/jquery.flexslider-min.js');
        $siteScript =           file_get_contents('js/site_script-min.js');

        $filesJS = array($jquery, $setupJqueryMobile, $jqueryMobile, $posytip, $flexlider, $siteScript);
 
        file_put_contents('js/meta.js', $filesJS);
        
        
    }
    echo '<script type="text/javascript" src="js/meta.js"></script>';
}


function makeLinkTag($number) {
    if($number === 1){
        $jqueryMobDefaut =      file_get_contents('css/jquery_mobile_default-min.css');
        $jqueryMobIforcetek =   file_get_contents('css/mob-iforcetex-style-min.css');
        $tipDargray =           file_get_contents('images/tip-darkgray/tip-darkgray.css');
        $flexsliderCSS =        file_get_contents('css/flexslider-min.css');
        $reset =                file_get_contents('css/reset-min.css');
        $main =                 file_get_contents('css/main-min.css');
        $nav =                  file_get_contents('css/nav-min.css');
        $footer =               file_get_contents('css/footer-min.css');
        $approach =             file_get_contents('css/approach-min.css');

        $filesCSS = array($jqueryMobDefaut, $jqueryMobIforcetek, $tipDargray, $flexsliderCSS, $reset, $main, $nav, $footer, $approach);
 
        file_put_contents('css/meta.css', $filesCSS);
        
        
    }
    echo '<link href="css/meta.css" rel="stylesheet" type="text/css" />';
}

?>
