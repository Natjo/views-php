<section class="container grid" data-view="block-contact">
    <div class="first">
        <div class="sub-header">
            Nous pouvons nous rencontrer dans nos bureaux au centre de Paris.
        </div>
        <address>
            <div class="address">
                153 rue du Faubourg Saint-Honoré 75008 PARIS
            </div>
            <div class="tel">
                Tel : +33 (0)1 43 59 75 75
            </div>
        </address>
        <div class="card-share linkedin">
            <div class="name">Nous restons en contact ?</div>
            <div class="text">
                Pour ne rien rater de notre actualité ou voir nos offres d’emploi, suivez-nous sur LinkedIn.
            </div>
            <a href="https://www.linkedin.com/company/atream/?originalSubdomain=fr" target="_blank" class="picto-linkedin"></a>
            <a href="/" target="_blank" class="link-primary">Découvrir notre compte</a>
        </div>
    </div>
    <div class="second">
        <div class="sub-header">
            Vous pouvez aussi nous consulter à distance en nous envoyant un message. Nous prendrons contact avec vous dans les plus brefs délais.
        </div>
        <form action="contact" novalidate class="form ajax" data-url="" data-nonce="1c6a4fbee7">
            <div class="post-error">
            </div>
            <fieldset>
                <div class="field">
                    <label for="">Prénom</label>
                    <input type="text" name="firstname" placeholder="Prénom" required>
                </div>
                <div class="field">
                    <label for="">Nom</label>
                    <input type="text" name="lastname" placeholder="Nom" required>
                </div>
                <div class="field">
                    <label for="">Téléphone</label>
                    <input type="tel" name="phone" placeholder="Téléphone" required pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$">
                </div>
                <div class="field">
                    <label for="">Mail</label>
                    <input type="email" name="email" placeholder="Mail" required>
                </div>
                <div class="field">
                    <label for="">Je suis...</label>
                    <select name="iam" required>
                        <option value="" hidden></option>
                        <option value="">Homme</option>
                        <option value="">Femme</option>
                    </select>
                </div>
                <div class="field">
                    <label for="">Je souhaite...</label>
                    <select name="iam" required>
                        <option value="" hidden></option>
                        <option value="">Dormir</option>
                        <option value="">Courrir</option>
                    </select>
                </div>
                <div class="field">
                    <label for="">Message</label>
                    <textarea name="message" placeholder="Votre message" required></textarea>
                </div>
                <div class="field checkbox">
                    <input id="mentions" name="mentions" type="checkbox" required>
                    <label for="mentions">J'ai lu et approuve</label>
                </div>
                <div class="action">
                    <button type="submit" class="btn-secondary">Envoyer</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>