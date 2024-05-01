<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="../css/homepage-style.css" />

</head>

<body>

  <?php
  require '../html/navigation.html';
  ?>

  <section class="content-section">

    <section class="banner-section">
      <section class="banner">
        <img src="../images/banner.gif" alt="title banner" id="title-banner">
      </section>

      <a href="#discover" class="discover-btn">Découvrir</a>
    </section>

    <div class="scallop-up"></div>

    <section class="studios" id="studios">

      <h1 id="discover">Découvrez nos campagnes de sensibilisation !</h1>

      <section class="agence-section" id="agence">
        <h2 class="text-divider">Agence</h2>
        <div class="affiches">
          <div class="affiche1">
            <img src="../images/Affiche inclusivité.jpg" alt="Affiche inclusivité">
            <h3>Affiche pour l'inclusivité</h3>
          </div>

          <div class="affiche2">
            <img src="../images/Affiche écologie.jpg" alt="Affiche écologie">
            <h3>Affiche pour l'écologie</h3>
          </div>
        </div>
        <div class="video">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/LSuQZENmwXA?si=iIcGLNj8Er7dQf8-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </section>

      <section class="agence-section" id="studio3d">
        <h2 class="text-divider">Studio 3D</h2>
        <div class="video">
          <!-- <video controls>
            <source src="../images/wavewatch3d.mp4" type="video/mp4">
          </video> -->
          <iframe width="560" height="315" src="https://www.youtube.com/embed/QjXblPh1w64?si=Z0-DrcPzDxTXcgH9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </section>

      <section class="agence-section" id="studioJV">
        <h2 class="text-divider">Studio Jeu Vidéo</h2>
        <div class="game">
          <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/wSzi8u9cXBA?si=y2IPIQQXApvoPjiV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

          </div>
          <div class="download">
            <h3>Téléchargez Wave Riddle !</h3>
            <a href="https://we.tl/t-w5kAB3KHQS" class="discover-btn">Télécharger</a>
          </div>

        </div>
      </section>

    </section>

  </section>
  <?php
  require '../html/footer.html';
  ?>
</body>

</html>