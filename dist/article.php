
<?php include("common/top.php"); ?>

    <?php views('header'); ?>

    <main>
        <article>
        <?php
            views('stage-article');
        ?>

        <?php
            views('content-img', array(
                "image" => "https://picsum.photos/id/275/536/354",
                "legend" => "Une belle photo",
                "text" => "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis facere non consectetur hic amet debitis assumenda perspiciatis ab blanditiis ut? Obcaecati molestiae voluptatem voluptate. Obcaecati ullam asperiores qui repudiandae eveniet odio architecto animi nemo quibusdam sunt cupiditate dolor consequuntur earum adipisci dolore fugiat, repellendus vero eum, inventore facere! Sequi placeat quia ab ratione itaque mollitia, architecto debitis cupiditate! Dolorum illum animi velit magni reprehenderit ea nihil voluptatibus a molestiae et dolorem vero sunt vel, eligendi laboriosam voluptatem blanditiis magnam cupiditate quam sit voluptatum ab distinctio hic. Quia alias aliquam temporibus ratione natus, blanditiis numquam consectetur, commodi, voluptatibus et quae esse.</p>"
            ));
        ?>
        </article>

        <?php
            views('block-carousel', array(
                "title" => "Ils ont aussi lu",
                "items" => array(
                    array(
                        "title" => "Lorem",
                        "desc" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",
                        "image" => "https://picsum.photos/id/436/536/354",
                        "href" => "/"
                    ),
                    array(
                        "title" => "Lorem",
                        "desc" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit.Lorem ipsum dolor sit amet consectetur, adipisicing elit.Lorem ipsum dolor sit amet consectetur, adipisicing elit.",
                        "image" => "https://picsum.photos/id/337/536/354",
                        "href" => "/"
                    ),
                    array(
                        "title" => "Lorem",
                        "desc" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",
                        "image" => "https://picsum.photos/id/338/536/354",
                        "href" => "/"
                    ),
                    array(
                        "title" => "Lorem",
                        "desc" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",
                        "image" => "https://picsum.photos/id/331/536/354",
                        "href" => "/"
                    ),
                    array(
                        "title" => "Lorem",
                        "desc" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",
                        "image" => "https://picsum.photos/id/321/536/354",
                        "href" => "/"
                    )
                )

            ));
        ?>

    </main>

    <?php views('footer'); ?>

<?php include("common/bottom.php"); ?>