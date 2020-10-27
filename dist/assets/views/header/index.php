<header role="banner" <?php if (exist($args["isLight"])) : ?> class="light" <?php endif; ?>>
    <div class="content">
        <a href="/" class="logo"><img src="<?php echo THEME_URL ?>assets/img/logo.svg" alt="Atream"></a>
        <button class="btn-nav"></button>
        <nav role="navigation">
            <ul>
                <?php foreach ($args["items"] as $item) : ?>
                    <li>
                        <a href="<?= $item["href"]; ?>" class=" "><?= $item["name"]; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="extra">
        
                <a href="http://atream.code/news/" class="private_space" target="_blank"></a>
            </div>
        </nav>
    </div>
</header>