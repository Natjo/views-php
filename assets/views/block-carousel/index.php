<section class="carousel-offset container">
    <div class="content">
        <header>
            <h2 class="tl2"><?php echo $args["title"] ?></h2>
        </header>
        <ul>
            <?php for ($i = 0; $i < sizeof($args["items"]); $i++) { 
                views('card-slide', array(
                    "image" => $args["items"][$i]["image"],
                    "title" => $args["items"][$i]["title"],
                    "desc" => $args["items"][$i]["desc"],
                    "url" => $args["items"][$i]["url"]
                ));
            }?>
        </ul>
    </div>
</section>