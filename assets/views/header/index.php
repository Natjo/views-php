<header class="header-main <?php if ($args["isLight"]) : echo "light"; endif; ?>" role="banner" data-view="header">
    <a href="/" class="logo"><img src="<?php echo THEME_URL ?>assets/img/logo.svg" width="117" height="24" alt="Atream"></a>
    <button class="btn-nav"></button>
    <nav class="nav-main" role="navigation">
        <ul class="level0" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
            <?php foreach ($args["items"] as $item) : ?>
                <li itemprop="name">
                    <a href="<?= $item["href"]; ?>" itemprop="url" class="link"><?= $item["name"]; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="extra">
            <a href="http://atream.code/news/" class="private_space" target="_blank" rel="noopener"></a>
        </div>
    </nav>
</header>