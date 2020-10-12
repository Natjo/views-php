                <section class="container" data-view="block-last_news">
                    <header>
                        <h2 class="tl2">Last news</h2>
                    </header>
                    <div class="content">
                        <ul>
                        <?php 
                        for ($i = 0; $i < sizeof($args["items"]); $i++) { 
                            views('card-news', array(
                                "image" => $args["items"][$i]["image"],
                                "title" => $args["items"][$i]["title"],
                                "desc" => $args["items"][$i]["desc"],
                                "url" => $args["items"][$i]["url"],
                                "cta" => $args["items"][$i]["cta"]
                            ));
                        }?>
                        </ul>
                        <a href="" class="btn-more link-primary">Voir plus</a>
                    </div>
                </section>