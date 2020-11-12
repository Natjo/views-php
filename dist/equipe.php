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
            "title" => "Nos collaborateurs sont votre meilleur atout",
            "intro" => "Les femmes et les hommes qui constituent nos équipes sont notre force et le socle de votre réussite. Experts, motivés et passionnés, ils ont tous un fort niveau d’engagement auprès de tous les acteurs du marché. Ils entretiennent un dialogue constant avec les investisseurs, les exploitants et les opérateurs afin de comprendre leurs attentes et leur proposer des solutions ajustées à leurs besoins. Mais l’expertise technique ne fait pas tout. L’accompagnement opérationnel que vous exigez les amène à travailler en agilité, en équipes courtes pour maitriser chaque contour de votre investissement tout en s’adaptant à votre calendrier, vos contraintes et vos attentes. "
        ));
        ?>

        <?php
        views('gouvernance', array(
            "title" => "Le comité de direction",
            "items" => array(
                array(
                    "image" => "assets/img/uploads/team/Pascal_Savary_270x360px_WEB-410x546.jpg",
                    "image-webp" => "assets/img/uploads/team/Pascal_Savary_270x360px_WEB-410x546.webp",
                    "function" => "Président",
                    "name" => "Pascal Savary ",
                    "desc" => "",
                    "email" => "aa@aa.aa",
                    "linkdein" => "",
                ),
                array(
                    "image" => "assets/img/uploads/team/Gregory_Soppelsa_270x360px_WEB-410x546.jpg",
                    "image-webp" => "assets/img/uploads/team/Gregory_Soppelsa_270x360px_WEB-410x546.webp",
                    "function" => "Directeur général",
                    "name" => "Grégory Soppelsa",
                    "desc" => "",
                    "email" => "aa@aa.aa",
                    "linkdein" => "",
                ),

                array(
                    "image" => "assets/img/uploads/team/Martin_Jacquesson_270x360px_WEB-410x546.jpg",
                    "image-webp" => "assets/img/uploads/team/Martin_Jacquesson_270x360px_WEB-410x546.webp",
                    "function" => "Directeur général adjoint",
                    "name" => "Martin Jacquesson",
                    "desc" => "",
                    "email" => "aa@aa.aa",
                    "linkdein" => "",
                ),
                array(
                    "image" => "assets/img/uploads/team/Pauline_Cornu-Thenard_270x360px_WEB-410x546.jpg",
                    "image-webp" => "assets/img/uploads/team/Pauline_Cornu-Thenard_270x360px_WEB-410x546.webp",
                    "function" => "Directrice générale adjointe ",
                    "name" => "Pauline Cornu-Thenard ",
                    "desc" => "",
                    "email" => "aa@aa.aa",
                    "linkdein" => "linkdein.com",
                ),
                array(
                    "image" => "assets/img/uploads/team/Benjamin_Six_270x360px_WEB.jpg",
                    "image-webp" => "assets/img/uploads/team/Benjamin_Six_270x360px_WEB.webp",
                    "function" => "Directeur général adjoint ",
                    "name" => "Benjamin Six ",
                    "desc" => "",
                    "email" => "aa@aa.aa",
                    "linkdein" => "linkdein.com",
                )
            )
        ));
        ?>

        <?php
        views('team', array(
            "title" => "Vos experts, vos interlocuteurs",
            "items" => array(
                array(
                    "image" => "assets/img/uploads/team/Vanessa_Bady_270x360px_WEB.jpg",
                    "image-webp" => "assets/img/uploads/team/Vanessa_Bady_270x360px_WEB.webp",
                    "function" => "Gestion d'Actifs",
                    "name" => "Vanessa Bady",
                    "email" => "aa@aa.aa",
                ),
                array(
                    "image" => "assets/img/uploads/team/Stephane_Borio_270x360px_WEB.jpg",
                    "image-webp" => "assets/img/uploads/team/Stephane_Borio_270x360px_WEB.webp",
                    "function" => "Gestion d'Actifs",
                    "name" => "Stéphane Borio ",
                    "email" => "aa@aa.aa",
                ),

                array(
                    "image" => "assets/img/uploads/team/Pauline_Cornu-Thenard_270x360px_WEB-410x546.jpg",
                    "image-webp" => "assets/img/uploads/team/Pauline_Cornu-Thenard_270x360px_WEB-410x546.webp",
                    "function" => "Direction Générale",
                    "name" => "Pauline Cornu-Thenard ",
                    "email" => "aa@aa.aa",
                ),
                array(
                    "image" => "assets/img/uploads/team/Didier_Dbjay_270x360px_WEB.jpg",
                    "image-webp" => "assets/img/uploads/team/Didier_Dbjay_270x360px_WEB.webp",
                    "function" => "Direction des Relations Investisseurs",
                    "name" => "Didier Dbjay ",
                    "email" => "aa@aa.aa",
                    "linkdein" => "linkdein.com",
                ),
                array(
                    "image" => "assets/img/uploads/team/Magali_Du_Breuil_270x360px_WEB.jpg",
                    "image-webp" => "assets/img/uploads/team/Magali_Du_Breuil_270x360px_WEB.webp",
                    "function" => "Gestion d'Actifs",
                    "name" => "Magali du Breuil ",
                    "email" => "aa@aa.aa",
                    "linkdein" => "linkdein.com",
                ),
                array(
                    "image" => "assets/img/uploads/team/Laurianne_Klipfel_270x360px_WEB.jpg",
                    "image-webp" => "assets/img/uploads/team/Laurianne_Klipfel_270x360px_WEB.webp",
                    "function" => "Secrétariat Général",
                    "name" => "Lauriane Klipfel ",
                    "email" => "aa@aa.aa",
                    "linkdein" => "linkdein.com",
                ),
                array(
                    "image" => "assets/img/uploads/team/Thierry_Ledieu_270x360px_WEB.jpg",
                    "image-webp" => "assets/img/uploads/team/Thierry_Ledieu_270x360px_WEB.webp",
                    "function" => "Gestion d'Actifs",
                    "name" => "Thierry Ledieu",
                    "email" => "aa@aa.aa",
                    "linkdein" => "linkdein.com",
                ),
                array(
                    "image" => "assets/img/uploads/team/Alain_Lemaire_270x360px_WEB.jpg",
                    "image-webp" => "assets/img/uploads/team/Alain_Lemaire_270x360px_WEB.webp",
                    "function" => "Direction Générale",
                    "name" => "Alain Lemaire ",
                    "email" => "aa@aa.aa",
                    "linkdein" => "linkdein.com",
                ),
                array(
                    "image" => "assets/img/uploads/team/Nathalie_Lepretre_270x360px_WEB.jpg",
                    "image-webp" => "assets/img/uploads/team/Nathalie_Lepretre_270x360px_WEB.webp",
                    "function" => "Direction des Relations Investisseurs",
                    "name" => " Nathalie Leprêtre",
                    "email" => "aa@aa.aa",
                    "linkdein" => "linkdein.com",
                ),
                array(
                    "image" => "assets/img/uploads/team/Christian_Matei_270x360px_WEB.jpg",
                    "image-webp" => "assets/img/uploads/team/Christian_Matei_270x360px_WEB.webp",
                    "function" => "Direction Générale",
                    "name" => "Christian Mantei ",
                    "email" => "aa@aa.aa",
                    "linkdein" => "linkdein.com",
                ),
                array(
                    "image" => "assets/img/uploads/team/Simone_Pouplin_270x360px_WEB.jpg",
                    "image-webp" => "assets/img/uploads/team/Simone_Pouplin_270x360px_WEB.webp",
                    "function" => "Fund Management",
                    "name" => "Simone Pouplin",
                    "email" => "aa@aa.aa",
                    "linkdein" => "linkdein.com",
                )
            )
        ));
        ?>
    </section>
</main>

<?php footer_(); ?>