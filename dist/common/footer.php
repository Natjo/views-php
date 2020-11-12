<?php
views('footer', array(
    "tel" => "153 rue du Faubourg Saint-Honoré 75008 PARIS ",
    "address" => "+33 (0)1 43 59 75 75",
    "nav-hub_solutions" => array(
        array(
            "name" => "Club Deals",
            "href" => "/"
        ),
        array(
            "name" => "Solutions de fonds ouverts à la souscription ",
            "href" => "/"
        ),
        array(
            "name" => "Solutions dédiées",
            "href" => "/"
        )

    ),
    "nav-extra" => array(
        array(
            "name" => "Contact",
            "href" => "/"
        )
    ),
    "linkedin" => "/",
    "nav" => array(
        array(
            "name" => "Mentions légales",
            "href" => "mentions/"
        ),
        array(
            "name" => "Gestion des cookies",
            "href" => "mentions/",
            "class" => "rgpd-link"
        ), array(
            "name" => "Presse ",
            "href" => "press/"
        )
    ),
    "copyright" => "Ⓒ 2020 Tous droits réservés"
));

include("common/template.php");
?>