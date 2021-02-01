<?php
global $isLight;
$isLight = true;
include("common/header.php"); 
?>

<?php  include("styleguide/grid-viewer.php"); ?>
<main role="main">

    <section>
        <?php
        views('hero-home', array(
            "title" => "Investissement immobilier et Private Equity, une vision engagée pour investir positivement l’avenir",
            "cta_is_internal" => true,
            "cta_label" => "Qui sommes-nous ?",
            "cta_url" => "/",
            "background-medium" => "/assets/img/header-homepage/bg-medium",
            "background-large" => "/assets/img/header-homepage/bg-large",
            "background-wide" => "/assets/img/header-homepage/bg-wide"
        ), true);
        ?>

        <?php
        views('solutions-3-lines', array(
            "title" => "Ouvrir de nouvelles perspectives d’investissement",
            "intro" => "Investisseur ou opérateur, institutionnel ou particulier, nous combinons les meilleurs expertises pour vous proposer les solutions d’investissement touristiques efficientes, novatrices et résilientes.",
            "items" => array(
                array(
                    "title" => "Club Deals",
                    "link" => "/",
                    "color" => "color-1",
                    "pattern" => "pattern-1"
                ),
                array(
                    "title" => "Solutions de fonds ouverts à la souscription",
                    "link" => "/",
                    "color" => "color-2",
                    "pattern" => "pattern-1"
                ),
                array(
                    "title" => "Solutions dédiées",
                    "link" => "/",
                    "color" => "color-2",
                    "pattern" => "pattern-2"
                )
            )
        ), true);
        ?>

        <?php
        views('push-page', array(
            "title" => "Ouvrir de nouvelles perspectives d’investissement",
            "text" => "Investisseur ou opérateur, institutionnel ou particulier, nous combinons les meilleurs expertises pour vous proposer les solutions d’investissement touristiques efficientes, novatrices et résilientes.",
            "contrast" => "",
            "cta-label" => "Mieux nous connaitre",
            "page" => "/",
            "color" => "#061927",
            "image-mobile" => "assets/img/push-page/787x990.png",
            "image-desktop" => "assets/img/push-page/721x900.png",
            "image-mobile-webp" => "assets/img/push-page/787x990.webp",
            "image-desktop-webp" => "assets/img/push-page/721x900.webp"
        ), true);
        ?>

        <?php
        views('breathing', array(
            "text" => "Investissement immobilier et Private Equity, une vision engagée pour investir positivement l’avenir",
            "signature" => "Qui sommes-nous ?",
            "image-mobile" => "assets/img/breath/BG-576x1024.jpg",
            "image-desktop" => "assets/img/breath/BG-1440x900.jpg",
            "image-mobile-webp" => "assets/img/breath/BG-576x1024.webp",
            "image-desktop-webp" => "assets/img/breath/BG-1440x900.webp",
        ));
        ?>

        <?php
        views('intro-text-image', array(
            "title" => "Cultiver notre esprit entrepreneurial",
            "intro" => "Être leader nécessite d’être toujours en mouvement. De faire circuler les idées et les points de vue. C’est pourquoi nous sommes très attachés à cet esprit entrepreneurial qui est le nôtre depuis notre création. Il nous inspire, nous anime et challenge constamment nos équipes. Il nous permet de relever avec audace et enthousiasme les défis d’aujourd’hui pour faire naître les solutions de demain.",
            "items" => array(
                array(
                    "title" => "Privilégier la dynamique collective",
                    "text" => "Parce que la synergie de compétences est une vraie force de frappe, chacune de nos solutions est le résultat d’un travail d’équipe. Grâce à l’investissement de tous et la collaboration active avec l’ensemble des acteurs du secteur, nous concevons et exploitons des infrastructures à forte valeur ajoutée respectueuses des intérêts de chacun.",
                    "image" => "assets/img/block-text-image/1.jpg",
                    "image-webp" => "assets/img/block-text-image/1.webp",
                    "color" => "color-1",
                    "pattern" => "pattern-1",
                    "imageIsRight" => true,
                    "ctaIsInternal" => false,
                    "ctaLabel" => "",
                    "ctaUrl" => ""
                ),
                array(
                    "title" => "Voir haut, agir vite",
                    "text" => "Nous sommes convaincus que la vie est pleine de promesses et d’opportunités qu’il faut provoquer et saisir. Il est donc important d’être constamment agile, flexible, fier d’être libre pour répondre aux enjeux de notre secteur, pour progresser et inventer ce que sera le futur, même si cela demande de bousculer les idées reçues. ",
                    "image" => "assets/img/block-text-image/2.jpg",
                    "image-webp" => "assets/img/block-text-image/2.webp",
                    "color" => "color-9",
                    "pattern" => "pattern-1",
                    "imageIsRight" => false,
                    "ctaIsInternal" => false,
                    "ctaLabel" => "",
                    "ctaUrl" => ""
                )
            )
        ));
        ?>

    </section>
</main>

<?php include("common/footer.php"); ?>