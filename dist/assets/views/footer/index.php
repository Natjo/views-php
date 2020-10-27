<?php
            $menuFooterBottomLinks = get_field('params_footer_bottom_link', 'option');
        ?>
        <footer role="contentinfo">
            <div class="footer-top">
                <a href="/" class="logo"><img src="<?php echo THEME_URL?>assets/img/logo-small.svg" alt="Atream"></a>
                <address>
                    <div class="address">
                        <?php $sParamsFooterAdress = get_field('params_footer_adress', 'option'); ?>
                        <?php if (!empty($sParamsFooterAdress)) : ?>
                            <?php echo $sParamsFooterAdress; ?>
                        <?php endif; ?>
                    </div>

                    <div class="tel">
                        <?php $sParamsFooterPhone = get_field('params_footer_phone', 'option'); ?>
                        <?php if (!empty($sParamsFooterPhone)) : ?>
                            <?php echo $sParamsFooterPhone; ?>
                        <?php endif; ?>
                    </div>
                </address>
                <?php
                    $terms = get_terms([
                        'taxonomy' => "family",
                        'hide_empty' => false,
                    ]);
                ?>
                <?php if (is_array($terms)) : ?>
                    <ul class="nav-hub_solutions">
                        <?php foreach ($terms as $term) : ?>
                            <li>
                                <a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <ul class="nav-extra">
                    <li>
                        <?php $oParamsFooterContactPage = get_field('params_footer_contact_page', 'option'); ?>
                        <?php if (!empty($oParamsFooterContactPage)) : ?>
                            <a href=" <?php echo get_page_link($oParamsFooterContactPage); ?>">Contact</a>
                        <?php endif; ?>
                    </li>
                </ul>
                <ul class="nav-share">
                    <li>
                        <?php $sParamsFooterLinkedin = get_field('params_footer_linkedin', 'option'); ?>
                        <?php if (!empty($sParamsFooterLinkedin)) : ?>
                            <a href="<?php echo $sParamsFooterLinkedin; ?>" class="linkedin"></a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
            <div class="footer-bottom">
                <!-- LIENS CONTRIBUES -->
                <?php if (is_array($menuFooterBottomLinks)) : ?>
                    <ul>
                        <?php foreach ($menuFooterBottomLinks as $menuFooterBottomLinks): ?>
                            <?php if ($menuFooterBottomLinks['params_footer_bottom_link_is_internal'] == 1) : ?>
                                <?php if (isset($menuFooterBottomLinks['params_footer_bottom_link_page']->ID) && !empty($menuFooterBottomLinks['params_footer_bottom_link_page']->ID)) : ?>
                                    <li>
                                        <a href="<?php echo get_the_permalink($menuFooterBottomLinks['params_footer_bottom_link_page']->ID);?>" class="<?php echo $menuFooterBottomLinks['params_footer_bottom_link_class']; ?>">
                                             <?php echo get_the_title($menuFooterBottomLinks['params_footer_bottom_link_page']->ID);?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php else : ?>
                                <?php if(!empty($menuFooterBottomLinks['params_footer_bottom_link_link']) && !empty($menuFooterBottomLinks['params_footer_bottom_link_label'])): ?>
                                    <li>
                                        <a href="<?php echo $menuFooterBottomLinks['params_footer_bottom_link_link']; ?>" class="<?php echo $menuFooterBottomLinks['params_footer_bottom_link_class']; ?>" target="_blank">
                                            <?php echo $menuFooterBottomLinks['params_footer_bottom_link_label']; ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <small>Ⓒ<?= date("Y"); ?> <?php echo __('Tous droits réservés', 'lsd_lang'); ?></small>
            </div>
        </footer>
        <?php
            lsdGetTemplatePart('general', 'block', 'cookies');
            wp_footer(); 
        ?>
    </body>
</html>
