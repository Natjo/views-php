<?php if(!is_front_page() && !is_404() && !is_search()): ?>
<div class="breadcrumb">
    <div class="wrapper">
        <ul>
            <?php atream_custom_breadcrumb(isset($args['solution']) ? $args['solution'] : 0) ?>
        </ul>
    </div>
</div>
<?php endif; ?>