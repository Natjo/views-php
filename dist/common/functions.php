<?php

define("THEME_URL", "/");


/**
 * Utils
 */

//test if args exist
function exist($arg)
{
    if (isset($arg) && !empty($arg)) return true;
    else return false;
}


/**
 * Views
 * 
 * Include views with js and css, and dependencies if contains import (modules)
 * Add app.js with dependencies if contains import (modules)
 * 
 */

$json = json_decode(file_get_contents("assets/views.json"), true);
$views = array();

function views($name, $args = null, $defer = false)
{
    global $json;
    global $views;
    
    //if (!in_array($name, $views[$name])) {
    if (!array_key_exists($name, $views)) {
        $views[$name] = array(
            "js" => $json[$name]["js"],
            "css" => $json[$name]["css"],
            "defer" => $defer
        );
       /* if ($json[$name]["css"]) {
            echo '<link rel="stylesheet" href="' . $json[$name]["css"] . '">' . "\n";
            //echo '<link rel="preload" href="' . $json[$name]["css"] . '" as="style">' . "\n";
        }*/
       if ($json[$name]["css"]) {
            $file = $json[$name]["css"];
            echo "<style>".file_get_contents($file)."</style>";
        }

    }
    include("./assets/views/$name/index.php");
}
/*
function views_preload_css()
{
    global $views;
    foreach ($views as $view) {
        if ($view["css"]) {
            echo '<link rel="preload" href="' . $view["css"] . '" as="style">' . "\n";
        }
    }
}*/
/*
function views_css()
{
    global $views;
    foreach ($views as $view) {
        if ($view["css"]) {
            echo '<link rel="stylesheet" href="' . $view["css"] . '">' . "\n";
        }
    }
}
*/
function views_js()
{
    global $views;
    $arr = array();
    foreach ($views as $key => $view) {
        if ($view["js"] && !$view["defer"]) array_push($arr, $key);
    }
    return json_encode($arr);
}


function views_defer()
{
    global $views;
    $arr = array();
    foreach ($views as $key => $view) {
        if ($view["js"] && $view["defer"]) array_push($arr, $key);
    }
    return json_encode($arr);
}