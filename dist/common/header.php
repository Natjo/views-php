<?php include("common/functions.php"); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Views</title>

    <meta name="Description" content="Hello I'am a website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!--<link rel="preload" href="assets/fonts/icomoon.woff2" as="font" type="font/woff2" crossorigin="anonymous">-->
    <link href="assets/styles/styles.css" rel="stylesheet" media="screen"> 
    <?php
    /*$inline = "";
    $inline .= file_get_contents('assets/styles/reset.css');
    $inline .= file_get_contents('assets/styles/variables.css');
    $inline .= file_get_contents('assets/styles/fonts.css');
    $inline .= file_get_contents('assets/styles/styles.css');
    echo "<style>".$inline."</style>"; */
    ?>

    <?php //echo "<style>".file_get_contents('assets/styles/styles.css')."</style>"; ?>
</head>

<body>
<?php
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
?>
  