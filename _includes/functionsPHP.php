<?php

function makeScriptTag($array, $name_file, $current_file_name){
    if(!file_exists('js/'.$name_file.'meta.js')){
        if(!strlen($name_file)){
            $name_file = 'base';
        }
        
        $base = array(
            'js/jquery.1.9.1.un-min.js',
            'js/setupJqueryMobile.js',
            'js/jquery.mobile.1.3.2-min.js',
            'js/detectmobilebrowser.js',
            'js/jquery.poshytip.min.js',
            'js/jquery.flexslider-min.js',
            'js/site_script-min.js'
        );

        if(!empty($array)){
            $base = array_merge($base, $array);
        }
        
        $file = '';
        foreach ($base as $key => $value) {
            $file .= file_get_contents($value);
        }
        
        file_put_contents('js/'.$name_file.'meta.js', $file);
        
        
    }
    $current_file_name .= '.php';
    echo '<script type="text/javascript" src="js/'.$name_file.'meta.js"></script>';
    $bottomScript = '';
    $bottomScript .= '<script type="text/javascript">';
    $bottomScript .= '$("#mob-nav-bar")';
    $bottomScript .= '.find('.'\''.'a[href='.'"'.$current_file_name.'"'.']'.'\''.')';
    $bottomScript .= '.addClass("ui-btn-active")';
    $bottomScript .= '.addClass("ui-state-persist")';
    $bottomScript .= '</script>';
    echo $bottomScript;
}



function makeLinkTag($array, $name_file){
    if(!file_exists('css/'.$name_file.'meta.css')){
        if(!strlen($name_file)){
            $name_file = 'base';
        }
        
        $base = array(
            'css/jquery_mobile_default-min.css',
            'css/mob-iforcetex-style-min.css',
            'images/tip-darkgray/tip-darkgray.css',
            'css/reset-min.css',
            'css/main-min.css',
            'css/nav-min.css',
            'css/footer-min.css'/*,*/
            /*'css/approach-min.css'*/
            );

        if(!empty($array)){
            $base = array_merge($base, $array);
        }
        
        $file = '';
        foreach ($base as $key => $value) {
            $file .= file_get_contents($value);
        }
        
        file_put_contents('css/'.$name_file.'meta.css', $file);
        
    }
    echo '<link href="css/'.$name_file.'meta.css" rel="stylesheet" type="text/css" />';
    echo '<link href="css/approach.css" rel="stylesheet" type="text/css" />';
}
/*<link href="css/jquery_mobile_default-min.css" rel="stylesheet" type="text/css" />
    <link href="css/mob-iforcetex-style-min.css" rel="stylesheet" type="text/css" />
    <link href="images/tip-darkgray/tip-darkgray.css" rel="stylesheet" type="text/css" />
    <link href="css/flexslider-min.css" rel="stylesheet" type="text/css" />
    <link href="css/main-min.css" rel="stylesheet" type="text/css" />
    <link href="css/nav-min.css" rel="stylesheet" type="text/css" />
    <link href="css/footer-min.css" rel="stylesheet" type="text/css" />
    <link href="css/approach-min.css" rel="stylesheet" type="text/css" />*/
?>


