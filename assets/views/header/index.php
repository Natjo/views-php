<header id="header" <?php if ($args["isLight"]) : echo 'class="light"'; endif; ?> role="banner" data-view="header">
    <a href="/" class="logo">
    <svg role="img" aria-label="Atream" width="117" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 175 36">
    <path fill="#E8AE3A" d="M89.5,7.7c7.2,0,13.7,5.8,12.9,15l0,0H81.1c0.4,4.8,4.1,8.1,8.4,8.1c3.4,0,5.8-1.5,6.9-4.3l0,0h5.4 c-1.5,5.3-6.5,8.8-12.2,8.8c-7.5,0-13.4-6.1-13.4-13.8C76.2,13.8,82,7.7,89.5,7.7z M19.6-0.1l14.7,34.8h-5.6l-5.1-12 c-1.4-0.6-3-0.9-4.6-0.9c-7.1,0-12.8,5.8-12.8,12.8l0,0H1c0-9.9,8-18,18-18c0.7,0,1.4,0,2.1,0.1l0,0l-7.2-17H19.6z M63.6,8.4v5.1 c1.1-3.4,3.9-5.1,8.3-5.1l0,0h2.5v4.3h-1.8c-5.7,0-8.8,3.1-8.8,8.8l0,0v13.2h-4.9V8.4H63.6z M44,1.5v6.9h8.5v4.3H44v13 c0,3.6,1.2,4.7,4.7,4.7l0,0h3.8v4.2h-4.8c-5.9,0-8.6-3.2-8.6-9.1l0,0V12.8h-5.7V8.4h5.7V1.5H44z M129.6,8.4v26.3h-4.9v-8.8 c-1.4-2-3.8-3.3-6.4-3.3c-4.4,0-7.9,3.6-7.9,7.9c0,1.5,0.4,2.9,1.2,4.1l0,0h-5c-0.5-1.3-0.7-2.7-0.7-4.1c0-6.9,5.6-12.5,12.5-12.5 c2.3,0,4.5,0.6,6.4,1.8l0,0v-7.1h-16.2V8.4H129.6z M164.4,8c4.7,0,9.1,3,9.1,10l0,0v16.7h-4.9V18.2c0-3.5-2.2-6-5.4-6 c-3.2,0-5.4,2.6-5.4,6l0,0v16.5h-4.9V18.2c0-3.5-2.2-6-5.4-6s-5.4,2.6-5.4,6l0,0v16.5h-4.9V8.4h4.7v2.9C143.5,9,146,8,148.7,8 c3.2,0,6.2,1.4,7.9,4.5C157.9,9.7,161,8,164.4,8z M89.5,12.3c-4,0-7.1,2.5-8.1,6.3l0,0h16.2C97.1,15.2,93.5,12.3,89.5,12.3z"/>
    </svg>
    </a>
    
    <button class="btn-nav"><?= icon('burger', 15, 15); ?></button>
    <nav id="nav" role="navigation">
        <ul class="level0" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
            <?php foreach ($args["items"] as $item) : ?>
                <li itemprop="name">
                    <a href="<?= $item["href"]; ?>" itemprop="url" class="link"><?= $item["name"]; ?><?= icon('arrow', 10, 10); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="extra">
            <a href="http://atream.code/news/" class="private_space" target="_blank" rel="noopener" aria-label="Espace privé"><?= icon('user', 20, 20); ?></a>
        </div>
    </nav>
</header>