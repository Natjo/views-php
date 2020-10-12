<div class="search-result container">

    <ul>
        <?php for($i = 0; $i < sizeof( $args) ; $i++){
            views('card-news', array(
                "image" => $args[$i]["image"],
                "title" => $args[$i]["title"],
                "desc" => $args[$i]["desc"],
                "url" => $args[$i]["url"],
                "cta" => $args[$i]["cta"]
            ));
        }?>
    </ul>

    <a href="" class="btn-more">Plus de résultats</a>

    <template>
        <li class="card-news">
            <img src="${image}" alt="">
            <div class="content">
                <h3>${title}</h3>
                <div class="desc">${desc}</div>
                <a href="${url}">voir</a>
            </div>
        </li>
    </template>
</div>