<section data-view="intro-text-image">
    <?php
    views('section-header', array(
        "title" => $args["title"],
        "intro" => $args["intro"]
    ));
    ?>

    <ul class="list-text-image container">
        <?php foreach ($args["items"] as $item) : ?>
            <li>
                <?php
                views('block-text-image', array(
                    "title" => $item["title"],
                    "text" => $item["text"],
                    "image" => $item["image"],
                    "image-webp" => $item["image-webp"],
                    "color" => $item["color"],
                    "pattern" => $item["pattern"],
                    "imageIsRight" => $item["imageIsRight"],
                    "ctaIsInternal" => $item["ctaIsInternal"],
                    "ctaLabel" => $item["ctaLabel"],
                    "ctaUrl" => $item["ctaUrl"]
                ));
                ?>
            </li>
        <?php endforeach; ?>
    </ul>
</section>