<?php include("common/top.php"); ?>

<?php
views('header', array(
    "isLight" => true,
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
        ),
    )
));
?>

<main>

</main>



<?php include("common/bottom.php"); ?>