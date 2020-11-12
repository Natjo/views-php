<?php

define("THEME_URL", "/");

function header_($args = null)
{
    include("common/header.php");
}
function footer_($args = null)
{
    include("common/footer.php");
}
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
    include("./assets/views/$name/index.php");
    if (!in_array($name, $views)) {
        $views[$name] = array(
            "js" => $json[$name]["js"],
            "css" => $json[$name]["css"],
            "defer" => $defer
        );
    }
}

function views_css()
{
    global $views;
    foreach ($views as $view) {
        if ($view["css"]) {
            echo '<link rel="stylesheet" href="' . $view["css"] . '">' . "\n";
        }
    }
}

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

ob_start();
