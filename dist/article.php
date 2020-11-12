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
    <article>
       
        <?php
        views('hero-article', array(
            "date" => "1 juin 2020",
            "title" => "Le choix d’informer n°3 – SCPI Atream Hôtels",
            "tag" => "Informations SCPI"
        ));
        ?>

        <?php
        views('image-legend', array(
            "image" => "assets/img/uploads/Capture-décran-2020-09-18-à-16.09.16.png",
            "width" => 792,
            "height" => 370,
            "legend" => ""
        ));
        ?>

        <?php
        views('wysiwyg', array(
            "content" => "<p><strong>Paris, le 10 juin 2020</strong></p>
                    <p>&nbsp;</p>
                    <p>Chers Associés, Chers Partenaires,</p>
                    <p>&nbsp;</p>
                    <p>La crise sanitaire et les différentes mesures gouvernementales en Europe ont fortement impacté l’activité de nos hôtels.</p>
                    <p>Avec le déconfinement, la reprise d’activité se met en œuvre dans les différents pays où la SCPI Atream Hôtels est investie, de sorte que d’ici la fin du mois de juin, l’intégralité des quinze hôtels détenus par la SCPI devrait avoir réouvert.</p>
                    <p>Nous poursuivons activement nos négociations avec les preneurs afin de trouver une solution équilibrée et pérenne avec les exploitants, tout en préservant les intérêts de nos investisseurs.</p>
                    <p>La période de transition menée par la reprise progressive est un temps que nous souhaitons mettre à profit pour participer à l’évolution du secteur auprès de nos partenaires, investisseurs et exploitants. Nous sommes convaincus que le retour aux performances pré-crise sera au rendez-vous en 2022.</p>
                    <p>C’est dans cette perspective que nous renouvelons notre confiance en la résilience de l’industrie touristique et sa capacité à accompagner la relance économique française et européenne.</p>
                    <p><em>Pascal Savary, Président Atream</em></p>
                    <p>&nbsp;</p>
                    <p><strong>CE QU’IL FAUT RETENIR&nbsp;:</strong></p>
                    <ul>
                        <li>En France, en Belgique, aux Pays-Bas et en Allemagne, les gouvernements ont annoncé le <strong>déconfinement progressif</strong> de leurs pays et la <strong>réouverture des hébergements touristiques sous certaines conditions</strong>.</li>
                        <li>Au mois d’avril, les marchés français, allemands, belges et néerlandais ont enregistré des <strong>baisses de RevPAR de 80%</strong> à la suite des chutes drastiques des taux d’occupation.</li>
                        <li>Depuis le début du mois de juin, la réouverture progressive des hôtels a été constatée en Allemagne, en Belgique et en France. <strong>La totalité des hôtels détenus par la SCPI Atream Hôtels devraient être ouverts fin juin 2020.</strong></li>
                        <li>Le <strong>taux de recouvrement moyen des loyers quittancés depuis le début de l’année 2020 atteint 65%</strong> au 31 mai.</li>
                        <li>Des discussions ont été initiées par les équipes d’Atream avec les exploitants afin de mettre en œuvre les <strong>mesures d’accompagnement adaptées</strong> en privilégiant le report de loyer.</li>
                        <li><strong>Le taux de recouvrement des loyers dus au deuxième trimestre devrait atteindre 50%</strong> (une partie des créances étant échelonnée sur 2020 et 2021).</li>
                        <li>La SCPI Atream Hôtels pourrait recouvrer<strong> 70% des loyers dus au titre de l’année 2020</strong>.</li>
                        <li>Nous actons d’un <strong>TDVM équivalent annuel proche de 1,5%</strong> pour le deuxième trimestre 2020 (contre 3% au 1<sup>er</sup> trimestre).</li>
                        <li>Les perspectives d’activité du second semestre devront permettre un <strong>niveau de distribution supérieur au titre du troisième trimestre </strong>et un <strong>ajustement de la distribution annuelle au quatrième trimestre</strong> en fonction des résultats réels 2020 constatés à la fin de l’année et l’utilisation des réserves (RAN).</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p><strong>Principales mesures gouvernementales européennes liées au Coronavirus</strong></p>
                    <p>Depuis mi-avril 2020, les gouvernements européens, face au recul de l’épidémie de Covid-19, prennent des mesures d’assouplissement des règles mises en place pour lutter contre le virus.</p>
                    <p>En France, le Premier Ministre a annoncé le déconfinement progressif du pays le 11 mai 2020 et plus récemment, la réouverture des hébergements touristiques et des villages vacances ainsi que des restaurants et des bars.</p>
                    <p>En Belgique, le gouvernement Flamand a annoncé le 4 mai 2020 le déconfinement en quatre phases. A l’heure actuelle, la Belgique n’est plus soumise à un confinement strict et a vu ses magasins dits non essentiel être rendus accessible au public. Cependant, la réouverture des hébergements touristiques n’a pas encore été annoncée. D’autre part, le gouvernement est favorable à la réouverture des frontières le 15 juin 2020</p>
                    <p>Au Pays-Bas, le gouvernement Néerlandais a aussi opté pour un déconfinement en plusieurs étapes. A ce jour, les commerces et les sites d’hébergements touristiques peuvent accueillir du public. Toutefois, le gouvernement reste prudent sur la potentielle réouverture de ses frontières.</p>
                    <p>En Allemagne, le gouvernement a annoncé la réouverture de ses frontières le 15 avril 2020 puis le début du déconfinement le 25 avril. Le gouvernement allemand a prononcé la réouverture progressive des hébergements touristiques en fonction du niveau de propagation du virus par Lander.</p>
                    <p>Après une période d’arrêt quasi-complet de 8 semaines du secteur, les gouvernements européens ont annoncé diverses mesures visant une relance de l’économie touristique (e.g. chômage partiel, reports de charges, prêt garanti…).</p>
                    <p>Le 15 juin 2020, l’Union Européenne statuera sur la réouverture des frontières intérieures, mesure pour laquelle les gouvernements français et belge sont favorables.</p>
                    <p>&nbsp;</p>
                    <p><strong>Impact du Coronavirus sur le marché hôtelier européen et hypothèses de relance</strong></p>
                    <p>Les statistiques publiées par STR le 21 mai 2020 permettent de mesurer l’impact du Covid-19 sur l’activité des hôtels européens&nbsp;:</p>
                    <ul>
                        <li>Près de 75% des hôtels européens étaient fermés au 30 avril 2020.</li>
                        <li>Au mois d’avril, les marchés français, allemands, belges et néerlandais enregistraient des baisses de RevPAR de -80% tirées par des chutes drastiques des taux d’occupation. En raison des mesures visant à limiter les déplacements, le taux d’occupation moyen des hôtels restés ouverts était de l’ordre de 10% entre la dernière semaine de mars et la début mai.</li>
                    </ul>
                    <p>Toutefois, depuis cette date, des signes encourageants de reprise sont observés en Europe&nbsp;:</p>
                    <ul>
                        <li>Les hôteliers ont préparé leur réouverture, caractérisée notamment par de nouveaux labels sanitaires. Ces labels viseront à certifier l’application de protocoles d’hygiène et de normes de sécurité alimentaire renforcées. Des groupes tels qu’AccorHotels, B&amp;B Hotels ou Pierre et Vacances-Centers Parcs ont d’ores et déjà développé leur propre protocole afin de reconquérir leur clientèle.</li>
                        <li>Les gouvernements ont progressivement détaillé les conditions d’exploitation des hôtels et multiplié les actions visant à préparer la saison estivale, notamment la mobilité au sein de l’espace Schengen&nbsp;;</li>
                        <li>Le soutien des Etats et des Banques a permis aux acteurs de l’industrie hôtelière de poursuivre leur activité sur le long terme.</li>
                    </ul>
                    <p>Au sein du patrimoine de la SCPI Atream Hôtels, nous observons cette dynamique.</p>
                    <p>&nbsp;</p>
                    <p><strong>Point sur l’activité de la SCPI Atream Hôtels au 1<sup>er</sup> juin 2020</strong></p>
                    <p>Depuis début mai, une réouverture progressive des hôtels est donc observée au sein du patrimoine de la SCPI Atream Hôtels&nbsp;:</p>
                    <ul>
                        <li>A compter du 1er juin 2020, un tiers des établissements de la SCPI Atream Hôtels est ouvert au public. Les hôtels ayant réouvert sont majoritairement situés en Allemagne où ils bénéficient des levées de restrictions pour l’accueil des touristes.</li>
                        <li>La réouverture des hôtels situés en Belgique et France a été constatée à partir du 2 juin 2020.</li>
                    </ul>
                    <p>La totalité des hôtels détenus par la SCPI Atream Hôtels devrait être ouverte à fin juin 2020.</p>",
        ));
        ?>

        <?php
        views('image-legend', array(
            "image" => "assets/img/uploads/Capture-décran-2020-09-18-à-16.09.16.png",
            "width" => 792,
            "height" => 370,
            "legend" => ""
        ));
        ?>
        <?php
        views('wysiwyg', array(
            "content" => "<p><strong>Notre équipe de gestion échange de façon permanente avec les 11 exploitants de la SCPI Atream Hôtels </strong>pour suivre les réouvertures des établissements, anticiper les trajectoires de reprise des actifs en 2020 ainsi que sur les prochaines années.</p>
                    <p>Au 31 mai 2020, le taux de recouvrement moyen des loyers quittancés depuis le début de l’année 2020 atteint 65%. Ce taux reflète les mesures d’accompagnement consenties à certains exploitants se trouvant dans des situations financières difficiles depuis le début du trimestre.</p>
                    <p>Des discussions ont été initiées par les équipes avec chacun d’entre eux afin de mettre en œuvre les mesures d’accompagnement adaptées (franchise, report de loyer, échelonnement des créances locatives, mise en place de loyer variable avec minimum garanti…) en privilégiant le report de loyer et en n’accordant des franchises pour les grands exploitants qu’en échange d’un allongement de la durée du bail.</p>"
        ))
        ?>

        <?php
        views('image-legend', array(
            "image" => "assets/img/uploads/Capture-décran-2020-09-18-à-16.13.07.png",
            "width" => 626,
            "height" => 406,
            "legend" => ""
        ));
        ?>
        <?php
        views('wysiwyg', array(
            "content" => "<p>Sur la base des négociations en cours, le taux de recouvrement des loyers dus au titre du deuxième trimestre devrait atteindre 50%&nbsp;; une partie des créances locatives étant échelonnées sur les années 2020 et l’autre sur 2021.</p>
                    <p>Au titre du second semestre, les mesures d’accompagnement à l’étude se traduisent en un taux de recouvrement supérieur à 70%.</p>
                    <p>Ainsi, dans un contexte marqué par une crise mondiale inédite et un arrêt brutal de l’activité économique – ayant affaibli tous les secteurs d’activité, la SCPI Atream Hôtels pourrait recouvrer 70% des loyers dus au titre de l’année 2020, confortant la relative résilience de l’industrie touristique.</p>
                    <p>S’agissant des performances, Atream a acté dès le premier trimestre une diminution anticipée des produits locatifs pour le deuxième trimestre et confirme son anticipation d’une activité locative réduite sur le second semestre.</p>
                    <p><strong>Le second trimestre 2020 est marqué par la fermeture de la quasi-totalité des établissements du portefeuille,</strong> des mesures gouvernementales de déconfinement tardives et très progressives et une réouverture des frontières intérieures de l’Europe non coordonnée.</p>
                    <p>Le redémarrage progressif de l’activité devrait s’opérer dès cet été et se prolonger tout au long du second semestre sans effet de «&nbsp;rattrapage&nbsp;» de l’activité.</p>
                    <p><strong>Dans ce contexte, l’acompte sur dividende du deuxième trimestre devrait être un point bas dans la séquence de distribution de la SCPI en 2020, sous l’effet combiné&nbsp;:</strong></p>
                    <ul>
                        <li><strong>du recouvrement partiel des loyers lié à la fermeture des hôtels&nbsp;;</strong></li>
                        <li><strong>de la collecte non investie suite au report des opportunités d’investissement identifiées avant crise, en vue de renégocier et sécuriser ces projets qui devraient être acquis d’ici la fin de l’année 2020.</strong></li>
                    </ul>
                    <p><strong>Nous confirmons notre choix de la prudence dans la gestion des distributions trimestrielles et actons une nouvelle baisse du montant d’acompte sur dividende pour le deuxième trimestre 2020 à un niveau de TDVM équivalent annuel proche de 1,5% contre un niveau de 3% au premier trimestre</strong>.</p>
                    <p><strong>Les perspectives d’activité du second semestre devront permettre un niveau de distribution supérieur au titre du troisième trimestre et un ajustement de la distribution annuelle au quatrième trimestre en fonction des résultats réels 2020 constatés à la fin de l’année et l’utilisation des réserves (RAN).</strong></p>
                    <p><strong>Dans l’hypothèse de l’absence de nouvelle vague de l’épidémie en 2020, de recouvrement des loyers (cf. supra&nbsp;: 70% sur la période du second semestre) et de l’atteinte des objectifs annuels d’investissement, les distributions prévisionnelles potentielles en euros par part et les TDVM équivalents annuels atteindraient les niveaux suivants&nbsp;:</strong></p>"
        ))
        ?>

        <?php
        views('image-legend', array(
            "image" => "assets/img/uploads/Capture-décran-2020-09-18-à-16.14.12.png",
            "width" => 584,
            "height" => 410,
            "legend" => ""
        ));
        ?>

        <?php
        views('wysiwyg', array(
            "content" => " <p>Le taux DVM 2020 potentiel s’établirait ainsi 2,75%, performance restaurée progressivement sur le second semestre après un point bas au second trimestre.</p>
            <p>Ces prévisions seront actualisées et communiquées régulièrement aux associés et partenaires de la SCPI.</p>
            <hr>
            <p><strong>L’illustration graphique présentée ci-dessus ne constitue pas un indicateur fiable quant aux performances futures de vos investissements. Elle a seulement pour but d’illustrer les mécanismes de votre investissement sur l’année 2020. L’évolution des montants d’acomptes trimestriels pourra s’écarter de ce qui est affiché, à la hausse comme à la baisse dans les scénarios les plus favorables et les plus défavorables. </strong></p>
            <p><strong>Les performances passées ne préjugent pas des performances futures et ne sont pas constantes dans le temps.</strong></p>
            <hr>
            <p><strong>Le montant définitif du second acompte sur le dividende 2020 sera confirmé au mois de juillet à l’occasion de la publication du bulletin d’information trimestrielle du second trimestre 2020.</strong></p>
            <p><strong>Le marché des parts de la SCPI (enregistrement des souscriptions) fonctionne normalement</strong> sans aucun mouvement particulier remarquable depuis le début de la crise.</p>
            <p><strong>L’activité de recherche d’investissements européens se poursuit</strong>&nbsp;: les projets engagés ont été exécutés et de nouveaux projets identifiés sont soit en cours de négociation soit en cours d’analyse dans une perspective de réalisation au cours du second semestre.</p>
            <p><strong>Mesures de sécurité et de protection des personnes au sein d’Atream</strong></p>
            <p>Pour continuer à faire face à l’épidémie de Coronavirus et conformément aux mesures sanitaires mises en place, les équipes d’Atream restent pour la majorité d’entre elles en télétravail.</p>
            <p>Les réunions de travail, les réunions d’actionnaires ou des organes de gouvernance des fonds gérés par Atream sont tenues par visioconférence ou téléconférence et le resteront jusqu’à l’apaisement de la situation.</p>
            <p>En outre, le plan de continuité de l’activité (PCA) d’Atream prévoit les mesures de continuité permettant de limiter les conséquences de tous événements d’origines et d’impacts divers et de nature à entraver significativement son activité. Atream a ainsi listé les actions à mener pour protéger ses salariés tout en poursuivant son activité en cas d’évolution de la situation.<em>&nbsp;</em></p>
            <p><em>Grégory Soppelsa, Directeur Général<br>
            Martin Jacquesson, Directeur Général Adjoint Gestion d’Actifs<br>
            Benjamin Six, Directeur Général Adjoint Gestion des Fonds<br>
             Pauline Cornu Thenard, Directeur Général Adjoint Finances, Juridique, Ressources Humaines</em></p>

            <hr>
            <p>Glossaire</p>
            <p>• DVM (Taux de distribution sur la valeur de marché) : division (i) du dividende brut avant prélèvement libératoire versé au titre de l’année n (y compris les acomptes exceptionnels et quote-part de plus-values distribuées) (ii) par le prix de part acquéreur moyen de l’année n.</p>
            <p>• VALEUR DE RETRAIT : montant revenant à l’associé sortant, correspondant au prix de souscription de la part diminuée des frais de souscription.</p>
            <p>• VALEUR DE REALISATION : elle est égale à la somme de la valeur vénale des immeubles et de la valeur nette des autres actifs de la Société.</p>
            <p>• VALEUR DE RECONSTITUTION : elle est égale à la valeur de réalisation augmentée du montant des frais afférents à une reconstitution du patrimoine.</p>
       
            <p>• PRIX D’ACQUISITION (AEM): prix d’acquisition ou valeur conventionnelle de l’immeuble augmenté des droits d’enregistrement de l’acquisition effectivement acquittés par la SCPI.</p>
            <p>• TAUX D’OCCUPATION FINANCIER (TOF) : le taux d’occupation financier est l’expression de la performance locative de la SCPI. Il se détermine par la division du montant total des loyers et indemnités d’occupation facturés ainsi que des indemnités compensatrices de loyers par le montant total des loyers facturables dans l’hypothèse où l’intégralité du patrimoine de la SCPI serait louée.</p>
            <p>• TAUX D’OCCUPATION PHYSIQUE (TOP) : le taux d’occupation physique est le rapport entre la surface louée par la société et la surface totale du patrimoine qu’elle détient.</p>
            <hr>
            <p>&nbsp;</p>"
        ))
        ?>

        <?php
        views('image-legend', array(
            "image" => "assets/img/uploads/Capture-décran-2020-09-18-à-16.39.26.png",
            "width" => 556,
            "height" => 206,
            "legend" => ""
        ));
        ?>

    </article>
</main>

<?php footer_(); ?>