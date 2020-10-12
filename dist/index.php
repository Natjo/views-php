<?php include("common/top.php"); ?>

    <?php views('header', array("options" => "transparent")); ?>

    <main>
        <section>
            <?php
            views('stage-home', array(
                "title" => "Hello my dear",
                "intro" => "Welcome on my lorem ipsum",
                "image" => array(
                    "small" => "https://picsum.photos/id/48/800/400",
                    "large" => "https://picsum.photos/id/49/1200/400"
                )
            ));
            ?>

            <?php
            views('block-intro', array(
                "title" => "Why not?",
                "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati nesciunt iste quae? Quod sed qui error incidunt earum, quidem quae magnam unde reprehenderit ea ducimus facere odio dignissimos, doloremque maxime tempore rerum. Excepturi tempore facere nisi ad possimus praesentium qui? Cum, nobis? Labore, hic, qui ab eligendi quibusdam temporibus soluta non sint quisquam, iure illo unde? Repellendus labore, odio perferendis voluptas tenetur aliquid nam hic possimus explicabo atque quam facere similique. Eligendi sunt, rem, sint accusamus nihil libero at dignissimos soluta vero cupiditate deleniti modi sequi maiores rerum optio fugiat officia repellat velit, laborum odit ad reprehenderit illo. Earum, molestias?"
            ));
            ?>

            <?php
            views('block-last_news', array(
                "title" => "",
                "desc" => "",
                "cta" => "Voir plus",
                "items" => array(
                    array(
                        "title" => "popov",
                        "desc" => "poppopopo",
                        "cta" => "Voir",
                        "href" => "/",
                        "image" => "https://picsum.photos/id/100/400/400"
                    ),
                    array(
                        "title" => "popov",
                        "desc" => "poppopopo",
                        "cta" => "Voir",
                        "href" => "/",
                        "image" => "https://picsum.photos/id/101/400/400"
                    ),
                    array(
                        "title" => "popov",
                        "desc" => "poppopopo",
                        "cta" => "Voir",
                        "href" => "/",
                        "image" => "https://picsum.photos/id/102/400/400"
                    )
                )
            ));
            ?>

            <?php
            views('content-col', array(
                "items" => array(
                    array(
                        "title" => "Lorem ipsum",
                        "text" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum cumque perspiciatis minus corrupti autem, sapiente beatae laborum cum fugiat quo sunt nesciunt ex facilis dignissimos voluptatibus fugit debitis quae quos consequuntur! Vero corporis iure consequatur provident nobis deleniti sequi placeat sit sint, porro, repellat facere excepturi, repudiandae quas odio quisquam?",
                        "picto" => ""
                    ),
                    array(
                        "title" => "Dolores?",
                        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi praesentium ex commodi nihil quia fuga aliquam, neque, molestiae quos eveniet debitis eius quod consequuntur. Illo exercitationem id ut obcaecati! Repellendus laborum pariatur autem dolor nostrum illum, recusandae, culpa consequatur numquam harum reiciendis qui delectus! Tenetur, reprehenderit amet suscipit tempore expedita corrupti aperiam perspiciatis reiciendis debitis optio repellat fuga beatae voluptatum possimus veritatis sit soluta consectetur? Officiis sit nam inventore est. Voluptatum culpa nam nihil mollitia sapiente quod omnis delectus ipsa?",
                        "picto" => ""
                    )
                )
            ));
            ?>

            <?php
            views('block-trailer', array(
                "video" => ""
            ));
            ?>
        </section>
    </main>

    <?php views('footer'); ?>

<?php include("common/bottom.php"); ?>