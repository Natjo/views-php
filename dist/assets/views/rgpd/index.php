<?php
    $cookiesFields = get_fields('options');
?>

<!-- rgpd manage (popin) -->
<div class="rgpd-manage">
	<div class="box">

		<header>
            <?php if(!empty($cookiesFields['params_cookies_title'])) : ?>
            <div class="title"><?= $cookiesFields['params_cookies_title'] ?></div>
            <?php endif;
            if(!empty($cookiesFields['params_cookies_intro'])) : ?>
            <p><?= $cookiesFields['params_cookies_intro'] ?></p>
            <?php endif; ?>
		</header>

        <!-- categories -->
        <?php
        if( !empty($cookiesFields['params_cookies_groups'])) {
            foreach ($cookiesFields['params_cookies_groups'] as $cookieGroup) {
                ?>
		<div class="cat">

			<div class="content">
                <div class="subtitle"><?php echo $cookieGroup['title']; ?></div>
                <p><?php echo $cookieGroup['text']; ?></p>
            </div>
            <?php
                $dataCookies = '';
                if( !empty($cookieGroup['cookies'])) :
                    $isFirst = true;
                    $count = count($cookieGroup['cookies']);
                    foreach ($cookieGroup['cookies'] as $index => $cookie) :
                        $dataCookies .=  $cookie['name'];
                        if($index !== $count - 1 ) $dataCookies .= ',';
                        if (!empty($cookie['description'])) {
                            $isFirst = true;
                        } else {
                            $isFirst = false;
                        }
                    endforeach;
                endif; 
            ?>
			<div class="action">
                <?php
                    if($cookieGroup['activation'] === true){
                ?>
                <div class="checkbox">
                    <input type="checkbox" id="rgpd_<?= $cookieGroup['id']; ?>" name="rgpd_<?= $cookieGroup['id']; ?>" value="<?= $cookieGroup['id']; ?>" data-cookies="<?= $dataCookies; ?>">
                    <label for="rgpd_<?= $cookieGroup['id']; ?>">
                        <span class="fake-checkbox"><?= __('Accepter','lsd_lang'); ?></span>
                        <span class="fake-checkbox"><?= __('Refuser','lsd_lang'); ?></span>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>
            
			<div class="details">
                <?php
                    $dataCookies = '';
                    if( !empty($cookieGroup['cookies'])) :?>

				<button type="button" class="rgpd-btn-detail"><?php echo __('Afficher les détails', 'lsd_lang'); ?></button>
				<div class="panel">
                    <?php
                        $isFirst = true;
                        $count = count($cookieGroup['cookies']);

                        foreach ($cookieGroup['cookies'] as $index => $cookie) :
                            $dataCookies .=  $cookie['name'];
                            if($index !== $count - 1 ) $dataCookies .= ',';
                            if ($isFirst) {
                                echo '<p>';   
                            } 

                            ?>
                            <strong><?php echo $cookie['name']; ?></strong>
                            <?php if($cookie['domain']) : ?>
                            <small>(<?php echo $cookie['domain']; ?>)</small>
                            <?php endif; ?>
                            <?php
                            if (!empty($cookie['description'])) {
                                echo $cookie['description'];
                                echo '</p>';
                                $isFirst = true;
                            } else {
                                $isFirst = false;
                            }
                            ?>
                            <?php
                        endforeach;
                    ?>
                </div>
                <?php endif; ?>
			</div>

		</div>
        <?php
            }
        }
        ?>

		<footer>
            <button type="button" class="rgpd-btn-save btn-primary"><?= __('Accepter','lsd_lang'); ?></button>
		</footer>
        <button type="button" class="rgpd-btn-close btn-picto close"></button>
	</div>
</div>

<!-- rgpd modal alert-->
<div class="rgpd-modal">

    <div class="text">
        <?php if(!empty($cookiesFields['params_cookies_title'])) : ?>
        <div class="title"><?= $cookiesFields['params_cookies_title'] ?></div>
        <?php endif;
        if(!empty($cookiesFields['params_cookies_intro'])) : ?>
        <p><?= $cookiesFields['params_cookies_intro'] ?></p>
        <?php endif; ?>
    </div>

    <div class="action">
        <button type="button" class="rgpd-btn-manage link-primary"><?= __('Paramétrer mes cookies', 'lsd_lang'); ?></button>
        <button type="button" class="rgpd-btn-accept btn-picto check"></button>
        <button type="button" class="rgpd-btn-refuse btn-picto close"></button>
    </div>

</div>

