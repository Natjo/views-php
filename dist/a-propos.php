<?php include("common/functions.php"); ?>

<?php
header_(array("isLight" => false));
?>

<?php
views('breadcrumb');
?>

<?php
views('background', array(
    "color" => "color-0",
    "pattern" => "pattern-1",
    "bg" => "bg-0"
));
?>
<?php include("styleguide/grid-viewer.php"); ?>
<main role="main">
    <section>
        <?php
        views('hero-page', array(
            "title" => "Nous construisons avec vous. Nous agissons pour vous.",
            "intro" => "Avec plus de 140 acquisitions depuis 2008 en France comme à l’international, nous sommes un acteur reconnu pour sa vision singulière sur le marché de l’investissement immobilier et du Private Equity. Notre force est de mesurer parfaitement les attentes de chacun de nos clients, investisseur ou opérateur, et de lui apporter une solution d’investissement en parfaite adéquation avec ses objectifs. "
        ));
        ?>
        <?php
        views('video', array(
            "image" => "assets/img/uploads/Capture-décran-2020-10-13-à-18.12.29-990x560.png",
            "image-webp" => "assets/img/uploads/Capture-décran-2020-10-13-à-18.12.29-990x560.webp"
        ));
        ?>
        <?php
        views('intro-text-image', array(
            "title" => "Une organisation au service de votre réussite",
            "intro" => "Vous garantir des investissements performants, pérennes et à forte valeur ajoutée, nécessite une organisation parfaitement structurée à la fois solide et puissante, agile et réactive. ",
            "items" => array(
                array(
                    "title" => "Le Comité de direction",
                    "text" => "Le Comité de direction chargé du développement de l’entreprise est réuni autour de Pascal Savary - Président, et Grégory Soppelsa - Directeur général. Entourés de la direction générale adjointe constituée de Pauline Cornu-Thenard, Benjamin Six et Martin Jacquesson -trois experts de l’investissement et du Private Equity- ils définissent ensemble les orientations de développement et veillent à transmettre à l’ensemble des acteurs cette vision engagée de l’investissement immobilier.<br><br>Photo: de gauche à droite: Benjamin Six, Pascal Savary, Grégory Soppelsa, Pauline Cornu-Thenard, Martin Jacquesson. ",
                    "image" => "assets/img/uploads/PIC3860-580x500.jpg",
                    "image-webp" => "assets/img/uploads/PIC3860-580x500.webp",
                    "color" => "color-1",
                    "pattern" => "pattern-1",
                    "imageIsRight" => true,
                    "ctaIsInternal" => false,
                    "ctaLabel" => "Découvrir l'équipe",
                    "ctaUrl" => "/"
                )
            )
        ));
        ?>

        <?php
        views('intro-other-page', array(
            "title" => "Nos convictions d’investissement",
            "text" => "Depuis notre création, nous accompagnons le secteur du tourisme pour révéler son potentiel et participer activement au rayonnement de ce secteur hautement stratégique de l’économie française. Cette industrie représente la majeure partie de notre activité. Nous avons également fait le choix de diversifier notre offre en investissant dans le secteur tertiaire, résidentiel et viticole. Trois secteurs en pleine croissance qui permettent de générer des revenus performants et stables sur le long terme tout en impactant positivement le présent et le futur.",
            "contrast" => "dark",
            "cta-label" => "Découvrir nos solutions",
            "page" => "",
            "color" => "#e8ae3a",
            "image-mobile" => "assets/img/intro-other-page/787x990.png",
            "image-desktop" => "assets/img/uploads/124552396_810871553034005_9133337070938418485_n.png",
            "image-mobile-webp" => "assets/img/intro-other-page/787x990.png",
            "image-desktop-webp" => "assets/img/uploads/124552396_810871553034005_9133337070938418485_n.webp"
        ), true);
        ?>

        <?php
        views('keywords', array(
            "title" => "Nos expertises",
            "intro" => "Derrière chaque projet il y a une synergie de compétences techniques, financières, juridiques, stratégiques et commerciales intégrées. L’amplitude de ce spectre de savoir-faire opérationnels nous permet d’identifier les opportunités, de générer de la valeur et de vous accompagner dans le développement et la gestion de vos investissements."
        ), true);
        ?>
        <?php
        views('values');
        ?>

        <?php
        views('key-number');
        ?>

        <?php
        views('intro-text-image', array(
            "title" => "Un comportement éthique et responsable",
            "intro" => "Le paysage dans lequel nous opérons est soumis à plusieurs règlementations ou normes afin de réduire les effets des immeubles et de leur exploitation sur l’environnement. Nous oeuvrons pour répondre à ce contexte externe complexe et exigeant. Car nous croyons en l’importance d’adopter une vision de long terme qui prend en compte les besoins de l’écosystème financier et sociétal, plutôt que de suivre une logique potentiellement dommageable pour le bien-être collectif. À ce titre nous optimisons les performances financières des investissements tout en intégrant les critères liés à l’Environnement et aux enjeux sociétaux et en nous fixant des objectifs annuels en matière de développement durable.",
            "items" => array(
                array(
                    "title" => "Engagé pour préserver l’environnement",
                    "text" => "-Nous réalisons systématiquement des audits techniques et des diagnostics de pollution sur les immeubles et actifs touristiques afin de maîtriser les risques environnementaux.
                    -Nous concevons des plans de travaux quinquennaux qui intègrent des process d’amélioration énergétique des immeubles.
                    -Nous procédons à des audits de performances énergétiques sur les immeubles non labellisés (BBC, HQE) pour optimiser leur efficacité.
                    -Notre équipe d’asset managers veille constamment aux évolutions règlementaires en matières environnementale, thermique ou de construction…
                    -Toutes nos équipes sont mobilisées au quotidien pour réduire l’impact de notre activité et s’engagent à imprimer moins pour préserver les forêts, à privilégier les documents digitaux et à supprimer l’usage des bouteilles et des gobelets plastique. ",
                    "image" => "assets/img/uploads/IMG-2-580x500.png",
                    "image-webp" => "assets/img/uploads/IMG-2-580x500.webp",
                    "color" => "color-1",
                    "pattern" => "pattern-1",
                    "imageIsRight" => true,
                    "ctaIsInternal" => false,
                    "ctaLabel" => "",
                    "ctaUrl" => ""
                ),
                array(
                    "title" => "Engagé pour un monde plus inclusif",
                    "text" => "Parce que l’usage de nos solutions doit être accessible à tous, nous appliquons des critères sociétaux dans la gestion de fonds d’actifs immobiliers et touristiques.
                    <br><br>
                    – Nous apprécions le profil des locataires en place (objet social, activité) au regard des critères ESG.
                    – Nous veillons au confort et à la sécurité des locataires dans les immeubles et actifs touristiques (critères inclus dans nos audits techniques à l’acquisition) mais aussi à l’accessibilité des personnes à mobilité réduite, à la proximité des transports en commun et des services (commerces, restaurants, présence de RIE, espaces verts…), à la qualité des prestations des immeubles pour les utilisateurs (ventilation, chauffage…).
                    - Nous sélectionnons des prestataires qui sont en adéquation avec notre politique de développement durable et notre déontologie.
                    - En interne, nous encourageons chacun à évoluer et à concrétiser ses ambitions par le développement de formations personnalisées.",
                    "image" => "assets/img/uploads/IMG-1-580x500.png",
                    "image-webp" => "assets/img/uploads/IMG-1-580x500.webp",
                    "color" => "color-1",
                    "pattern" => "pattern-1",
                    "imageIsRight" => true,
                    "ctaIsInternal" => false,
                    "ctaLabel" => "",
                    "ctaUrl" => ""
                ),
                array(
                    "title" => "Engagé pour une réussite partagée",
                    "text" => "Partout, nous nous attachons à développer un modèle d’investissement vertueux qui prend en considération l’organisation, la culture et les enjeux locaux. Le potentiel est révélé, optimisé. Ceci afin qu’il soit profitable au développement de l’économie locale et à son bassin d’emplois et qu’il participe au développement de la compétitivité touristique de la France et de l’Europe.
                    Plus que jamais, nous avons pleinement conscience que notre rôle est de soutenir ce secteur touché de plein fouet par la crise sanitaire de 2020. ",
                    "image" => "assets/img/uploads/GettyImages-1027467390-580x500.jpg",
                    "image-webp" => "assets/img/uploads/GettyImages-1027467390-580x500.webp",
                    "color" => "color-1",
                    "pattern" => "pattern-1",
                    "imageIsRight" => true,
                    "ctaIsInternal" => false,
                    "ctaLabel" => "",
                    "ctaUrl" => ""
                )
            )
        ));
        ?>
        <?php
        views('pre-footer');
        ?>
    </section>
</main>

<?php footer_(); ?>