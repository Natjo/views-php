<?php include("common/top.php"); ?>

    <?php views('header', $args); ?>

    <main>
        <section>
            <?php
            views('stage', array(
                "title" => "Nous contacter",
                "image" => "https://picsum.photos/id/44/1200/400"
            ));
            ?>

            <?php views('block-contact');?>

        </section>
    </main>

    <?php views('footer'); ?>

<?php include("common/bottom.php"); ?>