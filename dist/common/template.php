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
?>

<?php $content = ob_get_clean(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Views</title>

    <meta name="Description" content="Hello I'am a website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png"> -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link href="assets/styles/styles.css" rel="stylesheet" media="screen">

    <?php 
    foreach ($links as $value) echo '<link href="'.$value.'" rel="stylesheet" media="screen">';
    ?>

</head>

<body>
<?= $content; ?>

<?php //include("common/rgpd.php"); ?>

<script>

    const add_script = file => {
       const script = document.createElement('script');
        script.type = 'module';
        script.src = file;
        script.setAttribute('defer', '');
        document.body.appendChild(script);
    }
    const add_style = (href, media) => {
       document.head.insertAdjacentHTML("beforeend", `<link href="${href}" media="${media}" rel="stylesheet">`);
    }
    const observer = new IntersectionObserver(items => items.forEach(e => {
        if(e.isIntersecting){
            const view = e.target.dataset.view;
            add_script(`assets/views/${view}/${view}.js`);
            observer.unobserve(e.target)
        } 
    }));
    for (const view of <?= views_observe() ?>) observer.observe(document.querySelector(`[data-view=${view}]`))
    window.addEventListener('DOMContentLoaded', () => {
        for (const view of <?= views_js(); ?>) add_script(`assets/views/${view}/${view}.js`);
        add_script(`assets/app.js`);
    });
    window.addEventListener('load', () => {
        add_style('assets/print.css', 'print');
        add_style('assets/modules/rgpd/rgpd.css', 'screen');
    });
</script>

</body>
</html>