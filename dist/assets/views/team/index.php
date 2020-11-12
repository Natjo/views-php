<section id="team" data-view="team">

    <?php
    views('section-header', array(
        "title" => $args["title"]
    ));
    ?>

    <div class="container grid">
        <div class="sidebar">

            <div class="filters-title">Filtres</div>

            <ul class="filters">
                <li>
                    <button value="gestion-actif">Gestion d'Actifs</button>
                </li>
                <li>
                    <button value="fund-management">Fund Management</button>
                </li>
                <li>
                    <button value="direction-generale">Direction Générale</button>
                </li>
                <li>
                    <button value="direction-des-relations-investisseurs">Direction des Relations Investisseurs</button>
                </li>
                <li>
                    <button value="secretariat-general">Secrétariat Général</button>
                </li>
            </ul>
        </div>
        <ul class="list">
            <?php foreach ($args["items"] as $item) : ?>
                <li data-filter="gestion-actif">
                    <?php
                    views('card-team', array(
                        "image" => $item["image"],
                        "image-webp" => $item["image-webp"],
                        "function" => $item["function"],
                        "name" => $item["name"],
                        "desc" => $item["desc"],
                        "email" => $item["email"],
                        "linkdein" => $item["linkdein"]
                    ));
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>