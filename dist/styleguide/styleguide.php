    <!DOCTYPE html>
    <html lang="fr">

    <?php include("common/head.php"); ?>
    <style>
        body {
            font-family: Arial;
        }

        header.st {
            background: aliceblue;
            height: 150px;
            display: flex;
            align-items: flex-end;
            font-size: 40px;
            padding: 30px;
        }

        main {
            background: none;
        }

        hr {
            border: none;
            border-bottom: 1px dashed gray;
            margin-top: 50px;
            margin-bottom: 60px;
        }

        /* nav main */
        nav.st-nav-main {
            margin-left: 10px;
        }

        nav.st-nav-main a {
            font-size: 2rem;
        }

        nav.st-nav-main a.active {
            font-weight: 600;
        }

        /* nav sub */
        nav.st-nav-sub {
            position: sticky;
            z-index: 100;
            top: 0;
            height: 50px;
            display: flex;
            align-items: center;
            font-size: 18px;
            background: #364344;
            padding: 30px;
        }

        nav.st-nav-sub a {
            margin-right: 20px;
            color: #fff;
        }

        /* titles */
        .st-h2 {
            font-size: 4rem;
            margin-bottom: 40px;
        }

        .st-h3 {
            font-size: 2rem;
            margin-bottom: 30px;
            display: inline-block;
            margin-right: 8px;
        }

        .st-h3 small {
            font-size: 1.5rem;
            font-weight: 300;
            opacity: .6;
        }

        sup {
            font-weight: 400;
            font-size: 1.4rem;
            opacity: .5;
            padding-left: 5px;
        }

        /* class / options */
        .class {
            background: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: inline-block;
            padding: 5px 10px;
            margin-bottom: 10px;
        }

        .option {
            background: aliceblue;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: inline-block;
            padding: 5px 10px;
            margin-bottom: 10px;
            margin-left: 5px;
            cursor: pointer;
            opacity: .5;
        }
        .option.active{
            opacity: 1;
        }

        /* desc */
        .desc {
            margin-top: -15px;
            margin-bottom: 35px;
            line-height: 1.4;
        }

        .desc small {
            opacity: .5;
            font-size: inherit;
            line-height: 1.4;
        }

        .exemple {
            background: aliceblue;
            border: 1px dashed #ccc;
            padding: 40px;
        }

        /* section */
        section section {
            padding: 70px 30px;
            border-bottom: 1px solid #e8e8e8;
        }

        .padding {
            padding: 0px 30px;
        }

        section section:nth-child(odd) {
            background: #fbfbfb;
        }

        /* typographie */
        .typo {
            display: flex;
            margin-bottom: 20px;
        }

        .typo>div:first-of-type {
            font-size: 6rem;
            width: 100px;
            display: inline-flex;
            align-items: center;
        }

        .typo>div:nth-child(2) {
            display: flex;
            align-items: center;
            padding: 10px;
            max-width: 340px;
            line-height: 1.3;
        }

        .typo>div:last-of-type {
            padding: 20px;
            font-weight: 400;
            border-left: 1px solid #ccc;
            line-height: 1.3;
            color: #71b5ca;
            line-height: 1;
        }

        /* line */
        .line {
            display: flex;
            margin-bottom: 5px;
        }

        .line:not(:nth-last-child(1)) {
            display: flex;
            margin-bottom: 20px;
        }

        .line>div:nth-child(1) {
            padding: 20px 20px 20px 0;
        }

        .line>div:nth-child(2) {
            padding: 20px;
            font-weight: 400;
            border-left: 1px solid #ccc;
        }

        /* colors */
        .colors {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .colors li {
            margin-right: 20px;
            margin-bottom: 20px;
            min-width: 170px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .colors li .class {
            opacity: 0;
            transition: all .3s ease;
            position: absolute;
            bottom: -20px;
        }

        .colors li:hover .class {
            opacity: 1;
            transform: translateY(10px);
        }

        .colors li:hover .color {
            transform: translateY(-10px);
        }

        .colors li b {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .color {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all .3s ease;

        }

        .color.light {
            color: #666;
        }

        /* icons */
        .icons {
            display: flex;
            flex-wrap: wrap;
        }

        .icons>div {
            margin-right: 40px;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .icons>div:before {
            font-size: 6rem;
            display: inline-block;
            margin-bottom: 20px;
        }

        .icons>div .content {
            margin-top: 20px;
            margin-bottom: 0px;
        }

        .icons>div b {
            display: block;
        }

        .icons>div .class {
            position: absolute;
            bottom: -5px;
            opacity: 0;
            transition: all .3s ease;
        }

        .icons>div:hover .class {
            opacity: 1;
            transform: translateY(5px);
        }

        /* breakpoints */
        .st-breakpoints {
            width: 100%;
            border: 1px solid #d5d5d5;
        }

        .st-breakpoints thead {
            font-weight: 800;
            background: #d5d5d5;
        }

        .st-breakpoints td:nth-child(1) {
            width: 120px;
            font-weight: 800;
        }

        .st-breakpoints tbody td {
            border-right: 1px solid #d5d5d5;
            border-bottom: 1px solid #eee;
        }

        .st-breakpoints td {
            padding: 10px 10px;
        }
    </style>

    <body>

        <main>
            <section>
                <header class="st">
                    <h1>Styleguide</h1>
                    <nav class="st-nav-main">
                        <a href="" class="active">Styles</a>
                        <a href="">Blocks</a>
                        <a href="">Gaparits</a>
                        <a href="">Pages</a>
                        <a href="">Sample</a>
                    </nav>
                </header>

                <nav class="st-nav-sub">
                    <div class="">
                        <a href="#typo">Typographie</a>
                        <a href="#title">Title</a>
                        <a href="#links">links</a>
                        <a href="#buttons">buttons</a>
                        <a href="#colors">colors</a>
                        <a href="#icons">icons</a>
                        <a href="#rte">rte</a>
                        <a href="#form">formulaire</a>
                        <a href="#grid">grid</a>
                        <a href="#breakpoint">breakpoints</a>
                    </div>
                </nav>

                <!-- typographie -->
                <section id="typo">
                    <h2 class="st-h2">Typographie</h2>

                    <h3 class="st-h3">CeraPro<sup>web</sup></h3>
                    <div class="class">--font-primary</div>

                    <div class="typo" style="font-family:var(--font-primary);font-weight:300">
                        <div>Aa</div>
                        <div>
                            ABCDEFGHIJKLMNOPQRSTUVWXYZ
                            abcdefghijklmnopqrstuvwxyz
                            1234567890(,.;:?!$&*)
                        </div>
                        <div>
                            <ul>
                                <li>thin</li>
                                <li>normal</li>
                                <li>300</li>
                            </ul>
                        </div>
                    </div>

                    <div class="typo weight-400" style="font-family: var(--font-primary);font-weight:400">
                        <div>Aa</div>
                        <div>
                            ABCDEFGHIJKLMNOPQRSTUVWXYZ
                            abcdefghijklmnopqrstuvwxyz
                            1234567890(,.;:?!$&*)
                        </div>
                        <div>
                            <ul>
                                <li>regular</li>
                                <li>normal, italic</li>
                                <li>400</li>
                            </ul>
                        </div>
                    </div>

                    <div class="typo weight-500" style="font-family: var(--font-primary);font-weight:500">
                        <div>Aa</div>
                        <div>
                            ABCDEFGHIJKLMNOPQRSTUVWXYZ
                            abcdefghijklmnopqrstuvwxyz
                            1234567890(,.;:?!$&*)
                        </div>
                        <div>
                            <ul>
                                <li>medium</li>
                                <li>normal</li>
                                <li>500</li>
                            </ul>
                        </div>
                    </div>

                    <div class="typo weight-700" style="font-family: var(--font-primary);font-weight:700">
                        <div>Aa</div>
                        <div>
                            ABCDEFGHIJKLMNOPQRSTUVWXYZ
                            abcdefghijklmnopqrstuvwxyz
                            1234567890(,.;:?!$&*)
                        </div>
                        <div>
                            <ul>
                                <li>bold</li>
                                <li>normal</li>
                                <li>700</li>
                            </ul>
                        </div>
                    </div>


                    <hr>


                    <h3 class="st-h3">Rufina<sup>web</sup></h3>
                    <div class="class">--font-secondary</div>

                    <div class="typo" style="font-family: var(--font-secondary);font-weight:400">
                        <div>Aa</div>
                        <div>
                            ABCDEFGHIJKLMNOPQRSTUVWXYZ
                            abcdefghijklmnopqrstuvwxyz
                            1234567890(,.;:?!$&*)
                        </div>
                        <div>
                            <ul>
                                <li>regular</li>
                                <li>normal, italic</li>
                                <li>400</li>
                            </ul>
                        </div>
                    </div>

                    <div class="typo" style="font-family: var(--font-secondary);font-weight:700">
                        <div>Aa</div>
                        <div>
                            ABCDEFGHIJKLMNOPQRSTUVWXYZ
                            abcdefghijklmnopqrstuvwxyz
                            1234567890(,.;:?!$&*)
                        </div>
                        <div>
                            <ul>
                                <li>bold</li>
                                <li>normal, italic</li>
                                <li>700</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- titles -->
                <section id="title">
                    <h2 class="st-h2">Titles</h2>

                    <h3 class="st-h3">Titre 1</h3>
                    <div class="class">.tl1</div>
                    <div class="option" data-class="light">.light</div>
                    <div class="line tl1 hasOptions">
                        Lorem ipsum dolores
                    </div>

                    <hr>

                    <h3 class="st-h3">Titre 2</h3>
                    <div class="class">.tl2</div>
                    <div class="line tl2">
                        Lorem ipsum dolores
                    </div>

                    <hr>

                    <h3 class="st-h3">Titre 3</h3>
                    <div class="class">.tl3</div>
                    <div class="line tl3">
                        Lorem ipsum dolores
                    </div>

                    <hr>

                    <h3 class="st-h3">Titre 4</h3>
                    <div class="class">.tl4</div>
                    <div class="line tl4">
                        Lorem ipsum dolores
                    </div>

                </section>

                <!-- links -->
                <section id="links">
                    <h2 class="st-h2">Links</h2>

                    <h3 class="st-h3">primary</h3>
                    <div class="class">.link-primary</div>
                    <div class="line">
                        <a href="" class="link-primary">link</a>
                    </div>

                    <hr>

                    <h3 class="st-h3">secondary</h3>
                    <div class="class">.link-secondary</div>
                    <div class="line">
                        <a href="" class="link-secondary">link</a>
                    </div>

                </section>

                <!-- buttons -->
                <section id="buttons">
                    <h2 class="st-h2">Buttons</h2>

                    <h3 class="st-h3">primary</h3>
                    <div class="class">.btn-primary</div>
                    <!--  <div class="option">.big</div> -->
                    <div class="line">
                        <button type="button" class="btn-primary">button</button>
                    </div>

                    <hr>

                    <h3 class="st-h3">secondary</h3>
                    <div class="class">.btn-secondary</div>
                    <div class="line">
                        <button type="button" class="btn-secondary">button</button>
                    </div>

                </section>

                <!-- colors -->
                <section id="colors">
                    <h2 class="st-h2">Colors</h2>

                    <div class="content">
                        <h3 class="st-h3">Brand</h3>

                        <ol class="colors">
                            <li>
                                <div class="color" style="background:var(--color-primary)">primary</div>
                                <div class="class">--color-primary</div>
                            </li>
                            <li>
                                <div class="color" style="background:var(--color-secondary)">secondary</div>
                                <div class="class">--color-secondary</div>
                            </li>
                            <li>
                                <div class="color" style="background:var(--color-third)">third</div>
                                <div class="class">--color-third</div>
                            </li>
                        </ol>
                        <h3 class="st-h3">System</h3>
                        <ol class="colors">
                            <li>
                                <div class="color" style="background:var(--color-text)">text</div>
                                <div class="class">--color-text</div>
                            </li>
                            <li>
                                <div class="color" style="background:var(--color-error)">error</div>
                                <div class="class">--color-error</div>
                            </li>
                            <li>
                                <div class="color" style="background:var(--color-warning)">warning</div>
                                <div class="class">--color-error</div>
                            </li>
                            <li>
                                <div class="color" style="background:var(--color-valid)">valid</div>
                                <div class="class">--color-error</div>
                            </li>
                        </ol>
                        <h3 class="st-h3">Gris</h3>
                        <ol class="colors">
                            <li>
                                <div class="color light" style="background:var(--color-gray-xlight)">xlight</div>
                                <div class="class">--color-gray-xlight</div>
                            </li>
                            <li>
                                <div class="color light" style="background:var(--color-gray-light)">light</div>
                                <div class="class">--color-gray-light</div>
                            </li>
                            <li>
                                <div class="color" style="background:var(--color-gray)">gray</div>
                                <div class="class">--color-gray</div>
                            </li>
                            <li>
                                <div class="color" style="background:var(--color-gray-dark)">dark</div>
                                <div class="class">--color-gray-dark</div>
                            </li>
                            <li>
                                <div class="color" style="background:var(--color-gray-darker)">darker</div>
                                <div class="class">--color-gray-darker</div>
                            </li>
                        </ol>
                    </div>
                </section>

                <!-- icons -->
                <section id="icons">
                    <h2 class="st-h2">Icons</h2>
                    <h3 class="st-h3">Icomoon</h3>

                    <div class="class">--font-icon</div>
                    <div class="desc">
                        Set de font icon icomoon.<br>

                    </div>

                    <div class="icons">

                        <div class="ico icon-arrow">
                            <b>.icon-arrow</b>
                            <div class="content class">\e901</div>
                        </div>

                        <div class="ico icon-carret">
                            <b>.icon-carret</b>
                            <div class="content class">\e902</div>
                        </div>

                        <div class="ico icon-check">
                            <b>.icon-check</b>
                            <div class="content class">\e900</div>
                        </div>
                        <div class="ico icon-download">
                            <b>.icon-download</b>
                            <div class="content class">\e903</div>
                        </div>
                        <div class="ico icon-feather">
                            <b>.icon-feather</b>
                            <div class="content class">\e904</div>
                        </div>
                        <div class="ico icon-filters">
                            <b>.icon-filters</b>
                            <div class="content class">\e905</div>
                        </div>
                        <div class="ico icon-recycle">
                            <b>.icon-recycle</b>
                            <div class="content class">\e906</div>
                        </div>
                        <div class="ico icon-reload">
                            <b>.icon-reload</b>
                            <div class="content class">\e907</div>
                        </div>
                        <div class="ico icon-bullet">
                            <b>.icon-bullet</b>
                            <div class="content class">\e908</div>
                        </div>
                        <div class="ico icon-arrow-pixel">
                            <b>.icon-arrow-pixel</b>
                            <div class="content class">\e909</div>
                        </div>
                        <div class="ico icon-close">
                            <b>.icon-close</b>
                            <div class="content class">\e90a</div>
                        </div>

                    </div>
                </section>

                <!-- rte -->
                <section id="rte">
                    <h2 class="st-h2">Rte</h2>

                    <div class="desc">
                        Attention <b>"enter"</b> créer un paragraphe.<br>
                        Pour un saut de ligne normal faire <b>"shift enter"</b>
                    </div>

                    <div class="rte">
                        <table class="st-breakpoints">
                            <thead>
                                <tr>
                                    <td>Tag</td>
                                    <td>Exemple</td>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>h1</td>
                                    <td>
                                        <h2>Ne pas utiliser</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td>h2</td>
                                    <td>
                                        <h2>Lorem, ipsum dolor.</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td>h3</td>
                                    <td>
                                        <h3>Lorem, ipsum dolor.</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>b</td>
                                    <td>
                                        <b>Lorem, ipsum dolor.</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>strong</td>
                                    <td>
                                        <strong>Lorem, ipsum dolor.</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>i</td>
                                    <td>
                                        <i>Lorem, ipsum dolor.</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>small</td>
                                    <td>
                                        <small>Lorem, ipsum dolor.</small>
                                    </td>
                                </tr>
                                <tr>
                                    <td>a</td>
                                    <td>
                                        <a href="">Lorem, ipsum dolor.</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ul</td>
                                    <td>
                                        <ul>
                                            <li>item 1</li>
                                            <li>item 2</li>
                                            <li>item 3</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ol</td>
                                    <td>
                                        <ol>
                                            <li>item 1</li>
                                            <li>item 2</li>
                                            <li>item 3</li>
                                        </ol>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <br><br>
                    <h3 class="st-h3">Exemple</h3>
                    <div class="exemple rte">

                        <h2>Lorem ipsum</h2>
                        <h3>Dolores</h3>

                        <p>
                            <b>Lorem ipsum dolor sit amet</b>. Aut saepe amet quis eligendi quae nihil.
                            Dolore, illo quia pariatur quisquam vel fugit omnis iste, eaque impedit repellat consequuntur?
                            <i>Odio minima doloremque possimus itaque id perferendis iste nihil, quas dolorum excepturi vitae libero quaerat ad explicabo illo rem ullam mollitia nisi dolores quod officia aperiam iusto sunt.</i>
                            Dicta beatae vitae tempore consectetur quam accusamus aspernatur esse? Mollitia atque commodi sequi perferendis aliquam totam eius qui sit facilis? Dolorem quae aliquam maxime aut placeat alias corrupti a explicabo vel, nihil voluptatum eaque perferendis vero? Aperiam autem est tempore similique debitis.
                            <br>
                            <small>lorem ipsum 12/12/2011</small>
                        </p>
                        <ul>
                            <li>item 1</li>
                            <li>item 2</li>
                            <li>item 3</li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, quae. Aut saepe amet quis <a href="">eligendi quae nihil</a>. Dolore, illo quia pariatur quisquam vel fugit omnis iste, eaque impedit repellat consequuntur? Odio minima doloremque possimus itaque id perferendis iste nihil, quas dolorum excepturi vitae libero quaerat ad explicabo illo rem ullam mollitia nisi dolores quod officia aperiam iusto sunt. Dicta beatae vitae tempore consectetur quam accusamus aspernatur esse? Mollitia atque commodi sequi perferendis aliquam totam eius qui sit facilis? Dolorem quae aliquam maxime aut placeat alias corrupti a explicabo vel.<br>
                            <strong> nihil voluptatum eaque perferendis vero? Aperiam autem est tempore similique debitis.</strong>
                            <br>

                        </p>

                        <ol>
                            <li>item 1</li>
                            <li>item 2</li>
                            <li>item 3</li>
                        </ol>
                    </div>


                </section>

                <!-- form -->
                <section id="form">
                    <h2 class="st-h2">Formulaire</h2>
                    <div class="desc">
                        Style des formulaires par defaut. <br><strong>Mettre la classe .custom pour ne pas appliquer les styles </strong><br>
                        Validation js native.<br>
                        Add class ajax for ajax.<br>
                        Ne pas mettre de placeholder dans les inputs, ils sont gérer avec les labels qui ont une class .placeholder.<br>
                    </div>

                    <form class="ajax" action="" data-nonce="" novalidate>
                        <fieldset>

                            <div class="field full">
                                <select>
                                    <option hidden value="">choisir</option>
                                    <option>mr</option>
                                    <option>mme</option>
                                </select>
                            </div>

                            <div class="field">
                                <label for="" class="placeholder">Name</label>
                                <input type="text" required>
                            </div>

                            <div class="field">
                                <label for="" class="placeholder">Tel <small>(facultatif)</small></label>
                                <input type="tel">
                            </div>

                            <div class="field">
                                <label for="" class="placeholder">Email</label>
                                <input type="email" required>
                            </div>
                            <div class="field full">
                                <label for="">Cv</label>
                                <input type="file" required>
                            </div>
                            <div class="field">
                                <label class="label">Vous aimez</label>
                                <ul>
                                    <li><input type="checkbox"><label for="">Le css</label></li>
                                    <li><input type="checkbox"><label for="">Le javascript</label></li>
                                    <li><input type="checkbox"><label for="">Le php</label></li>
                                </ul>
                            </div>
                            <div class="field full">
                                <label for="" class="placeholder">Message</label>
                                <textarea></textarea>
                            </div>



                            <div class="field">
                                <input type="checkbox" required><label for="">J'ai lu et approuve</label>
                            </div>

                            <div class="field">
                                <ul>
                                    <li><input type="radio"><label for="">Je suis un homme</label></li>
                                    <li><input type="radio"><label for="">Je suis une femme</label></li>
                                    <li><input type="radio"><label for="">Je suis un robot</label></li>
                                </ul>
                            </div>

                            <div class="action">
                                <input type="submit" value="send">
                            </div>

                        </fieldset>

                    </form>
                </section>

                <!-- grid -->
                <section id="grid">
                    <h2 class="st-h2">Grid</h2>

                    <h3 class="st-h3">container width</h3><span class="class">--container-width</span> &nbsp;=&nbsp;
                    <span class="value" data-value="--container-width"></span>
                    <br>

                    <h3 class="st-h3">container margin</h3><span class="class">--container-margin</span> &nbsp;=&nbsp;
                    <span class="value" data-value="--container-margin"></span>
                    <br>
                    <h3 class="st-h3">gap</h3><span class="class">--gap</span> &nbsp;=&nbsp;
                    <span class="value" data-value="--gap"></span>

                    <script>
                        const values = document.querySelectorAll('.value');
                        values.forEach(item => {
                            const value = item.getAttribute('data-value');
                            item.innerText = getComputedStyle(document.documentElement).getPropertyValue(value)
                        });
                    </script>
                </section>

                <!-- breakpoint -->
                <section id="breakpoint">
                    <h2 class="st-h2">Breakpoints</h2>

                    <div class="desc">
                        Préférence pour le mobile first. Mais certaine règle peuvent être scopées ou ciblées comme pour le header et la nav par exemple.
                    </div>

                    <h3 class="st-h3">Up <small>(mobile first)</small></h3>

                    <table class="st-breakpoints">
                        <thead>
                            <tr>
                                <td>breakpoint</td>
                                <td>small</td>
                                <td>medium</td>
                                <td>large</td>
                                <td>wide</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>value</td>
                                <td>>= 480px</td>
                                <td>>= 768px</td>
                                <td>>= 1024px</td>
                                <td>>= 1440px</td>
                            </tr>
                            <tr>
                                <td>css</td>
                                <td>@media #{$breakpoint-small-up} {}</td>
                                <td>@media #{$breakpoint-medium-up} {}</td>
                                <td>@media #{$breakpoint-large-up} {}</td>
                                <td>@media #{$breakpoint-wide-up} {}</td>
                            </tr>

                        </tbody>
                    </table>

                    <hr>

                    <h3 class="st-h3">Down <small>(desktop first)</small></h3>

                    <table class="st-breakpoints">
                        <thead>
                            <tr>
                                <td>breakpoint</td>
                                <td>small</td>
                                <td>medium</td>
                                <td>large</td>
                                <td>wide</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>value</td>
                                <td>
                                    < 479px</td> <td>
                                        < 767px</td> <td>
                                            < 1023px</td> <td>
                                                < 1439px</td> </tr> <tr>
                                <td>css</td>
                                <td>@media #{$breakpoint-small-down} {}</td>
                                <td>@media #{$breakpoint-medium-down} {}</td>
                                <td>@media #{$breakpoint-large-down} {}</td>
                                <td>@media #{$breakpoint-wide-down} {}</td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>

                    <h3 class="st-h3">Scoped <small>(between breakpoints)</small></h3>

                    <table class="st-breakpoints">
                        <thead>
                            <tr>
                                <td>breakpoint</td>
                                <td>small</td>
                                <td>medium</td>
                                <td>large</td>
                                <td>wide</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>range</td>
                                <td>0 - 479px</td>
                                <td>480px - 767px</td>
                                <td>767px - 1023px</td>
                                <td>1024px - 1439px</td>
                            </tr>
                            <tr>
                                <td>css</td>
                                <td>@media #{$media-small-only} {}</td>
                                <td>@media #{$media-medium-only} {}</td>
                                <td>@media #{$media-large-only} {}</td>
                                <td>@media #{$media-wide-only} {}</td>
                            </tr>
                        </tbody>
                    </table>
                </section>

            </section>
        </main>

        <script>
            // options
            document.querySelectorAll('.option').forEach(el=>{
                el.onclick = () => {
                    el.parentNode.querySelector('.hasOptions').classList.toggle(el.getAttribute('data-class'));
                    el.classList.toggle('active');
                }
            });

        </script>

    </body>

    </html>