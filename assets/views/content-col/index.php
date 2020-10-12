<section class="content-col container">
    <div class="content">
        <ul>
            <?php for ($i = 0; $i < sizeof($args["items"]); $i++) { ?>
                <li>
                    <h3><?php echo $args["items"][$i]["title"] ?></h3>
                    <p><?php echo $args["items"][$i]["text"] ?></p>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>