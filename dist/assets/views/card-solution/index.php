
<div class="card-solution hasPattern" style="--color:var(--<?= $args["color"];?>)">
    <a href="<?= $args["link"]; ?>">
    <?php if (exist($args["title"])) : ?>
        <h3><?= $args["title"]; ?></h3>
    <?php endif; ?>
    <?php if (exist($args["pattern"])) :
        include('patterns/card-solution-'.$args["pattern"].'.php');
    endif; ?>
    <span class="picto arrow-right"></span>
    </a> 
</div>