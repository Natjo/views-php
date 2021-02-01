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

<?php include("common/rgpd.php"); ?>

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
        add_script(`assets/app.js`);
        const style = document.createElement('link');
        style.rel = 'stylesheet';
        style.media = 'print';
        style.href = 'assets/styles/print.css';
        
        document.body.appendChild(style);
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