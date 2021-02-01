<section class="solutions-3-lines" data-view="solutions-3-lines">

    <?php views('section-header', array(
        "title" => $args["title"],
        "intro" => $args["intro"]
    ));
    ?>

    <div class="swipe2grid grid3">
        <ul>
            <?php foreach ($args["items"] as $item) : ?>
                <li class="item">
                    <?php
                    views('card-solution', array(
                        "title" => $item["title"],
                        "link" => $item["link"],
                        "color" => $item["color"],
                        "pattern" => $item["pattern"],
                    ));
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</section>