<?php

views('header', array(
    "isLight" => $args["isLight"],
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
