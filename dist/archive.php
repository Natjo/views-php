<?php include("common/top.php"); ?>

    <?php views('header'); ?>

    <main>
        <section>
            <?php
            views('stage', array(
                "title" => "Les news",
                "intro" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, deserunt?",
                "image" => "https://picsum.photos/id/47/1200/400"
            ));
            ?>

            <?php
            views('search-form');
            ?>

            <?php
            views('search-result', array(
                array(
                    "title" => "Des fleurs",
                    "image" => "https://picsum.photos/id/976/536/354",
                    "desc" => "Lorem ipsum dolor sit.",
                    "url" => "/",
                    "cta" => "voir"
                ),
                array(
                    "title" => "Oh la vague!",
                    "image" => "https://picsum.photos/id/989/536/354",
                    "desc" => "Lorem ipsum dolor sitLorem ipsum dolor sitLo rdolor sitLorem ipsum dolor sitLorem ipsum dolor sit.",
                    "url" => "/",
                    "cta" => "voir"
                ),
                array(
                    "title" => "Une vielle charrue",
                    "image" => "https://picsum.photos/id/99/536/354",
                    "desc" => "Lorem ipsum dolor sitLorem ipsum dolor sitLo rdolor sitLorem ipsum dolor sitLorem ipsum dolor sit.",
                    "url" => "/",
                    "cta" => "voir"
                ),
                array(
                    "title" => "Plage",
                    "image" => "https://picsum.photos/id/154/536/354",
                    "desc" => "Lorem ipsum dolor sitLorem ipsum dolor sitLo rdolor sitLorem ipsum dolor sitLorem ipsum dolor sit.",
                    "url" => "/",
                    "cta" => "voir"
                ),
                array(
                    "title" => "Les oranges bio de Monsento",
                    "image" => "https://picsum.photos/id/517/536/354",
                    "desc" => "Lorem ipsum dolor sitLorem ipsum dolor sitLo rdolor sitLorem ipsum dolor sitLorem ipsum dolor sit.",
                    "url" => "/"
                ),
                array(
                    "title" => "La cote d'Armore; c'est la mort",
                    "image" => "https://picsum.photos/id/14/536/354",
                    "desc" => "Lorem ipsum dolor sitLorem ipsum dolor sitLo rdolor sitLorem ipsum dolor sitLorem ipsum dolor sit.",
                    "url" => "/",
                    "cta" => "voir"
                )
            ));
            ?>
        </section>
    </main>

    <?php views('footer'); ?>

<?php include("common/bottom.php"); ?>