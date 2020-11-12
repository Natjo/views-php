<?php if (exist($args["title"])) : ?>
    <header class="section-header container grid">

        <?php if (exist($args["title"])) : ?>
            <h2 class="tl2"><?= $args["title"]; ?></h2>
        <?php endif; ?>

        <?php if (exist($args["intro"])) : ?>
            <div class="intro"><?= nl2br($args["intro"]); ?></div>
        <?php endif; ?>

    </header>
<?php endif; ?>