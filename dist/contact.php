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
    "bg" => "bg-1"
));
?>
<?php include("styleguide/grid-viewer.php"); ?>
<main role="main">
    <section>

        <?php
        views('hero-page', array(
            "title" => "Parlons-nous",
            "intro" => ""
        ));
        ?>

        <?php
        views('block-contact');
        ?>

    </section>
</main>

<?php footer_(); ?>