<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Data</title>
    <link rel="stylesheet" href="../css/promotion-style.css" />
</head>

<body>
    <?php require '../html/navigation.html'; ?>

    <section class="content-section" id="page-promotion">

        <section class="donation-section">
            <div class="description-section">
                <h1>Soutenez la Durabilité des Plages de Tahiti</h1>
                <p>Wave Watch s'engage à préserver les plages de Tahiti, qui accueillent les Jeux Olympiques, en sensibilisant le public aux enjeux écologiques et en promouvant des actions concrètes pour leur protection.</p>
                <h2>Objectifs de la Collecte de Fonds :</h2>
                <ol>
                    <li>Nettoyage des plages</li>
                    <li>Sensibilisation et éducation</li>
                    <li>Conservation cotière</li>
                    <li>Inclusion des personnes en situation de handicap</li>
                    <li>Soutien aux communautés côtières</li>
                </ol>
                <p>Ensemble, nous pouvons préserver les plages de Tahiti pour les Jeux Olympiques et assurer un événement plus inclusif et respectueux pour tous. Rejoignez-nous dans cette cause vitale !</p>
            </div>
            <div class="donation-box">
                <div class="title">Information de don</div>

                <div class="fields">
                    <input type="text" id="firstName" placeholder="Prénom"> </input>
                    <input type="text" id="lastName" placeholder="Nom"> </input>
                    <input type="text" id="email" placeholder="Email"> </input>
                </div>

                <div class="amount">
                    <div class="button">€5</div>
                    <div class="button">€10</div>
                    <div class="button">€50</div>
                    <div class="button">€<input type="text" class="set-amount" placeholder=""> </input></div>
                </div>

                <div class="switch">
                    <input type="radio" class="switch-input" name="view" value="One-Time" id="one-time" checked="">
                    <label for="one-time" class="switch-label switch-label-off">Une seule fois</label>
                    <input type="radio" class="switch-input" name="view" value="Monthly" id="monthly">
                    <label for="monthly" class="switch-label switch-label-on">Mensuel</label>
                    <span class="switch-selection"></span>
                </div>

                <div class="checkboxes">
                    <input type="checkbox" id="anon" class="checkbox" />
                    <label for="anon">Don anonyme</label>
                </div>

                <div class="donate-button"><i class="fa fa-credit-card"></i> Faire un don</div>
        </section>
    </section>

    </div>

    <?php require '../html/footer.html'; ?>

</body>

</html>