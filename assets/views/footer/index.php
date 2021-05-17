<footer id="footer" role="contentinfo">
    <div class="footer-top">
        <a href="/" class="logo"><img src="<?= THEME_URL ?>assets/img/logo-small.svg" width="85" height="85" alt="Atream" loading="lazy"></a>
        <address>
            <div class="address">
                <?= icon('home', 15, 15); ?>
                <?php if (exist($args["address"])) : ?>
                    <?= $args["address"]; ?>
                <?php endif; ?>
            </div>

            <div class="tel">
                <?= icon('tel', 15, 15); ?>
                <?php if (exist($args["tel"])) : ?>
                    <?= $args["tel"]; ?>
                <?php endif; ?>
            </div>
        </address>

        <ul class="nav-hub_solutions">
            <?php foreach ($args["nav-hub_solutions"] as $item) : ?>
                <li>
                    <a href="<?= $item["href"]; ?>"><?= $item["name"]; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="nav-extra">
            <ul class="list-link">
                <?php foreach ($args["nav-extra"] as $item) : ?>
                    <li>
                        <a href="<?= $item["href"]; ?>"><?= $item["name"]; ?></a>
                    </li>
                <?php endforeach; ?>

            </ul>
            <ul class="list-share">
                <li>
                    <a href="<?= $args["linkedin"]; ?>" class="linkedin" aria-label="linkedin"><?= icon('linkedin', 20, 20); ?>  </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <ul>
            <?php if (is_array($args["nav"])) : ?>
                <?php foreach ($args["nav"] as $item) : ?>
                    <li>
                <a href="<?= $item["href"]; ?>" <?= $item["class"] ? 'class="'.$item["class"].'"' : ''; ?>>
                            <?= $item["name"]; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>

        </ul>
        <small><?= $args["copyright"]; ?></small>
    </div>
</footer>