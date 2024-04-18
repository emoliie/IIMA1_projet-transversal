<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <?php
    require '../html/navigation.html';
    ?>
    <section class="content-section">
        <div class="about-us">
            <section class="banner-section">
                <div class="banner-text">
                    <h1>
                        Bienvenue chez Wave Watch !
                    </h1>
                    <p>
                        Chez Wave Watch, nous sommes passionnés par la préservation de nos océans et de l'environnement dans son ensemble. Fondée avec un engagement profond envers la protection des écosystèmes marins, notre agence s'efforce de sensibiliser et d'inspirer le public à travers des campagnes de communication innovantes et impactantes.
                    </p>
                </div>
            </section>

            <section class="text-section">
                <div class="section1">
                    <img src="../images/surfer.jpg" alt="Surfer sur la plage">
                    <div>
                        <h2>
                            Notre Engagement
                        </h2>
                        <p>
                            Notre mission est claire : utiliser la puissance de la communication pour promouvoir des actions positives et durables. Que ce soit en mettant en lumière les enjeux écologiques, en promouvant l'inclusivité dans le monde du surf, ou en développant des solutions novatrices telles que notre jeu vidéo Wave Riddle, nous nous efforçons de catalyser le changement et d'encourager chacun à prendre part à la protection de notre planète.
                        </p>
                    </div>

                </div>

                <div class="section2">
                    <div>
                        <h2>
                            Notre Collaboration avec les Jeux Olympiques
                        </h2>
                        <p>
                            Wave Watch est également fier de collaborer avec des partenaires engagés, tels que le Comité d'Organisation des Jeux Olympiques, pour amplifier nos messages et étendre notre impact. Notre travail avec les JO 2024 illustre notre détermination à intégrer les valeurs de durabilité, d'inclusivité et de respect de l'environnement au cœur même de grands événements sportifs internationaux.
                        </p>
                    </div>
                    <img src="../images/logo-jo.png" alt="Logo des JO 2024">
                </div>

                <div class="section3">
                    <h2>Découvrez nos Initiatives</h2>
                    <p>
                        À travers notre site, vous découvrirez nos différentes initiatives, des campagnes de sensibilisation aux projets artistiques de notre studio 3D et de notre studio JV. Nous croyons fermement en la puissance de la collaboration et de l'innovation pour façonner un avenir meilleur.
                    </p>

                </div>

                <div class="section4">
                    <h3>
                        Rejoignez-nous dans notre mission pour protéger et célébrer nos océans. <br> Explorez, apprenez et engagez-vous avec Wave Watch aujourd'hui !
                    </h3>
                    <div class="newsletter">
                        <input type="email" name="email" id="email" placeholder="Inscrivez-vous à nos Newsletter" />
                        <button id="newsletter-register" type="submit">Rejoindre</button>
                    </div>

                </div>

            </section>
        </div>
    </section>
    <?php
    require '../html/footer.html';
    ?>
</body>

</html>