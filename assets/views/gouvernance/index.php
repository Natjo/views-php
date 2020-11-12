<section id="gouvernance">

    <?php
    views('section-header', array(
        "title" => $args["title"]
    ));
    ?>

    <div class="container grid">
        <ul class="list grid-3">
            <?php foreach ($args["items"] as $item) : ?>
                <li>
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