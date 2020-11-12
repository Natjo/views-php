<?php $content = ob_get_clean(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Views</title>

    <meta name="Description" content="Hello I'am a website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link href="assets/styles/styles.css" rel="stylesheet" media="screen">
    <?php views_css(); ?>
    <link href="assets/styles/print.css" rel="stylesheet" media="print">
</head>

<body>

    <?= $content; ?>

    <?php
        include('rgpd.php')
    ?>

    <script>
        const add_script = file => {
            const script = document.createElement('script');
            script.type = 'module';
            script.src = file;
            script.setAttribute('defer', '');
            document.body.appendChild(script);
        }
        const files = <?= views_js(); ?>; 
        window.addEventListener('DOMContentLoaded', () => {
            for (const view of files) add_script(`assets/views/${view}/${view}.js`);
            add_script(`assets/app.js`)
        });
        const defers = <?= views_defer() ?>;
        const observer = new IntersectionObserver(items => items.forEach(e => {
            const view = e.target.dataset.view;
            if(e.isIntersecting){
                add_script(`assets/views/${view}/${view}.js`);
                observer.unobserve(e.target)
            } 
        }));
        for (const view of defers) observer.observe(document.querySelector(`[data-view=${view}]`))
    </script>

</body>

</html>