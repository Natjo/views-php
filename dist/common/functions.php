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

function icon($name, $width, $height){

    return '<svg class="icon" width="'.$width.'" height="'.$height.'" aria-hidden="true" viewBox="0 0 20 20"><use xlink:href="/assets/img/icons.svg#'.$name.'"></use></svg>';
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
$links = array();

function views($name, $args = null, $observe = true)
{
    global $json;
    global $views;
    global $links;

    if (!array_key_exists($name, $views)) {
        $views[$name] = array(
            "js" => $json[$name]["js"],
            "css" => $json[$name]["css"],
            "observe" => $observe
        );
       if ($json[$name]["css"]) {
            $file = $json[$name]["css"];
            array_push($links, $file);
        }
    }
    include("./assets/views/$name/index.php");
}

function views_js()
{
    global $views;
    $arr = array();
    foreach ($views as $key => $view) {
        if ($view["js"] && !$view["observe"]) array_push($arr, $key);
    }
    return json_encode($arr);
}


function views_observe()
{
    global $views;
    $arr = array();
    foreach ($views as $key => $view) {
        if ($view["js"] && $view["observe"]) array_push($arr, $key);
    }
    return json_encode($arr);
}

ob_start();


global $isLight;
views('header', array(
    "isLight" => $isLight,
    "items" => array(
        array(
            "name" => "À propos",
            "href" => "a-propos/"
        ),
        array(
            "name" => "Solutions",
            "href" => "solutions/"
        ),
        array(
            "name" => "Équipe",
            "href" => "equipe/"
        ),
        array(
            "name" => "Actualités",
            "href" => "news/"
        ),
        array(
            "name" => "Talents",
            "href" => "talents/"
        ),
        array(
            "name" => "Contact",
            "href" => "contact/"
        )
    )
));
