<!-- rgpd manage popin -->

<template id="rgpd-manage">

    <div class="box">

        <button type="button" class="btn-close"></button>

        <header>
            <h1>Gestion des cookies</h1>
            <p>
                Un cookie est un fichier, qui ne permet pas l’identification de l’utilisateur du Site, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation sur le site et ont également vocation à permettre diverses mesures de fréquentation.
            </p>
        </header>

        <!-- necessary -->
        <section>

            <div class="content">
                <h2>Necessaire</h2>
                <p>
                    Ils contribuent à rendre un site Web utilisable en activant des fonctions de base comme la navigation de page et l'accès aux zones sécurisées du site Web. Le site ne peut pas fonctionner correctement sans ces cookies.
                </p>
            </div>

            <div class="details">
                <button type="button" class="btn-detail">Afficher les details</button>
                <div class="panel">
                    <p>
                        <strong>_test</strong> <small>(test.com)</small><br>
                        Use for test<br>
                        Expiration after 1 month<br>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, ab?
                    </p>
                    <p>
                        <strong>_test</strong> <small>(test.com)</small><br>
                        Use for test<br>
                        Expiration after 1 month<br>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, ab?
                    </p>
                </div>
            </div>

        </section>

        <!-- preferences -->
        <section>

            <div class="content">
                <h2>Préférences</h2>
                <p>
                    Ils permettent à un site Web de retenir des informations qui modifient la manière dont le site se comporte ou s’affiche, comme votre langue préférée ou la région.
                </p>
            </div>

            <div class="details">
                <button type="button" class="btn-detail">Afficher les details</button>
                <div class="panel">
                    <p>
                        <strong>_test</strong> <small>(test.com)</small><br>
                        Use for test<br>
                        Expiration after 1 month
                    </p>
                </div>
            </div>

            <input type="checkbox" id="pref-0" name="pref-0" value="pref" data-cookies="_pref1,_pref2" data-accept="Accept" data-denied="Denied">

        </section>

        <!-- statistics -->
        <section>

            <div class="content">
                <h2>Statistiques</h2>
                <p>
                    Ils aident les propriétaires du site Web, par la collecte et la communication d'informations de manière anonyme, à comprendre comment les visiteurs interagissent avec les sites Web.
                </p>
            </div>

            <div class="details">
                <button type="button" class="btn-detail">Afficher les details</button>
                <div class="panel">
                    <p>
                        <strong>_test</strong> <small>(test.com)</small><br>
                        Use for test<br>
                        Expiration after 1 month
                    </p>
                </div>
            </div>

            <input type="checkbox" id="statistic-0" name="statistic-0" value="statistic" data-cookies="_stat1,_stat2" data-accept="Accept" data-denied="Denied">

        </section>

        <!-- marketing -->
        <section>

            <div class="content">
                <h2>Marketing</h2>
                <p>
                    Ils sont utilisés pour effectuer le suivi des visiteurs au travers des sites Web. Le but est d'afficher des publicités qui sont pertinentes et intéressantes pour l'utilisateur individuel et donc plus précieuses pour les éditeurs et annonceurs tiers.
                </p>
            </div>

            <div class="details">
                <button type="button" class="btn-detail">Afficher les details</button>
                <div class="panel">
                    <p>
                        <strong>_test</strong> <small>(test.com)</small><br>
                        Use for test<br>
                        Expiration after 1 month
                    </p>
                </div>
            </div>

            <input type="checkbox" id="marketing-0" name="marketing-0" value="marketing" data-cookies="_market1,_market2" data-accept="Accept" data-denied="Denied">

        </section>

        <!-- unclassified -->
        <section>

            <div class="content">
                <h2>Non classés</h2>
                <p>
                    Ils sont en cours de classification.
                </p>
            </div>

            <div class="details">
                <button type="button" class="btn-detail">Afficher les details</button>
                <div class="panel">
                    <p>
                        <strong>_test</strong> <small>(test.com)</small><br>
                        Use for test<br>
                        Expiration after 1 month
                    </p>
                </div>
            </div>

        </section>

        <footer>
            <button type="button" class="btn-save btn-primary">Sauvegarder</button>
        </footer>

    </div>
</template>

<!-- rgpd modal alert-->
<template id="rgpd-modal">
    <div class="text">
        <h2 class="tl2">Gestion des cookies</h2>
        <p>
            En poursuivant votre navigation sur ce site, vous acceptez nos CGU et l'utilisation de cookies qui nous permettent de vous proposer une navigation optimale et des contenus adaptés à vos centres d'intérêt.
        </p>
        <button type="button" class="btn-manage">Personnaliser ses cookies</button>
    </div>

    <div class="action">
        <button type="reset" class="btn-refuse btn-primary">Je refuse</button>
        <button type="button" class="btn-accept btn-primary">J'acccepte</button>
    </div>
</template>