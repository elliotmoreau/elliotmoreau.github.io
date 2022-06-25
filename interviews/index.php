<?php 



?>
<style>

#showcase:before{
  background: url('<?php echo "" ?>') no-repeat center center/cover;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" media = 'screen and (max-width: 768px)' href="../CSS/mobile.css">
  <link href="https://fonts.googleapis.com/css?family=Lato|Staatliches&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
  <script src="https://kit.fontawesome.com/18fe5b398f.js" async></script>

  <title>La Gazette Tulliste | L'info prés de chez vous</title>
</head>
<body>
  <nav id="main-nav">
    <div class="container">
      <img src="../img/logo.png" alt="NewsMedia" class="logo">
      <div class = 'social'>
        <a href="feed/all.xml" target = 'blank'><i class="fa-solid fa-square-rss fa-2x"></i></a>
        <div class="none">
        <a href="http://twitter.com.br" target = 'blank'><i class="fab fa-twitter fa-2x"></i></a>
        <a href="http://instagram.com.br" target = 'blank'><i class="fab fa-instagram fa-2x"></i></a>
        </div>
        <a href="https://youtube.com/" target = 'blank'><i class="fab fa-youtube fa-2x"></i></a>
      </div>
      <ul>
        <li><a href="../index.php" >Acceuil</a></li>
        <li><a href="#" class="current">Interviews</a></li>
        <li><a href="../contact.php" >Contacter</a></li>
      </ul>
    </div>
  </nav>
<style>



</style>
  <header id = 'showcase'>
    <div class="container">
      <div class="showcase-container">
        <div class="showcase-content">
          <div class="category category-a-la-1">
            à la une
          </div>
          <div class="category category-sports">
            Sport
          </div>
          <h1> Article de cette semaine</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste deserunt, at laborum accusamus veniam reprehenderit deleniti reiciendis vel animi ipsum obcaecati ex nesciunt ipsa, voluptatibus provident, quas doloribus molestias. Saepe.</p>
          <a href="article.php" class="btn btn-primary">Lire l'article</a>
        </div>
      </div>
    </div>
  </header>

  <section id="home-articles" class="py-2">
    <div class="container">
      <h2>Articles Précédents</h2>
      <div class="articles-container">
        <article class="card">
          <img src="../img/articles/ent1.jpg" alt="photo">
          <div>
            <div class="category category-divertissement">
              Divertissement
            </div>
            <h3>
              <a href="../article.html">Lorem ipsum dolor sit amet.</a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, facere harum dicta dolor molestias amet eos! Doloribus molestiae cum accusamus?</p>
          </div>
        </article>

        <article class="card bg-dark">     
          <div class="category category-sports">
            Sport
          </div>
          <h3>
            <a href="../article.html">Lorem ipsum dolor sit amet.</a>
          </h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium numquam illum ipsa corporis nemo beatae odio exercitationem vel, sit porro?</p>
        </article>
        
        <article class="card">     
          <img src="../img/articles/tech1.jpg" alt="photo">
          <div class="category category-tech">
            Technologie
          </div>
          <h3>
            <a href="../article.html">Lorem ipsum dolor sit amet.</a>
          </h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum expedita quam quibusdam ipsum nemo maiores. Cum ipsa amet quaerat sunt.</p>
        </article>
        
        <article class="card">     
          <div class="category category-sports">
            Sport
          </div>
          <h3>
            <a href="../article.html">Lorem ipsum dolor sit amet.</a>
          </h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum expedita quam quibusdam ipsum nemo maiores. Cum ipsa amet quaerat sunt.</p>
          <img src="../img/articles/sports1.jpg" alt="photo">
        </article>

        <article class="card">     
          <img src="../img/articles/tech2.jpg" alt="photo">
          <div class="category category-politic">
            Politique
          </div>
          <h3>
            <a href="../article.html">Lorem ipsum dolor sit amet.</a>
          </h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum expedita quam quibusdam ipsum nemo maiores. Cum ipsa amet quaerat sunt.</p>
          </article>

          <article class="card bg-primary">     
            <div class="category category-sports">
              Sport
            </div>
            <h3>
              <a href="../article.html">Lorem ipsum dolor sit amet.</a>
            </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium numquam illum ipsa corporis nemo beatae odio exercitationem vel, sit porro?</p>
          </article>

          <article class="card">
            <div>
              <div class="category category-actualite">
                Actualités
              </div>
              <h3>
                <a href="../article.html">Lorem ipsum dolor sit amet.</a>
              </h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, facere harum dicta dolor molestias amet eos! Doloribus molestiae cum accusamus?</p>
            </div>
            <img src="../img/articles/ent2.jpg" alt="photo">
          </article>
      </div>
    </div>
  </section>
  
  <footer id = 'main-footer' class = 'py-2'>
    <div class="container footer-container">
      <div>
        <img src="../img/logo-gray-background.png" alt="logo">
        <p>Bienvenue sur LaGazetteTulliste le magazine gratuit de votre ville.</p>
      </div>
      <div>
        <h3>Email Actualités</h3>
        <p>Email Actualites est une inscription <b>gratuite</b> qui permet de recevoir les actualités par mail.<br><br><b>Vous pouvez vous désinscrire a tout moment</b></p>
        <form>
          <input type="email" placeholder="Votre Adresse Email" required>
          <input type="submit" value="S'inscrire" class = 'btn btn-primary'>
        </form>
      </div>
      <div>
        <h3>Liens</h3>
        <ul class = 'list'>
          <li><a href="../">Accueil</a></li>
          <li><a href="../about.php">A Propos</a></li>
          <li><a href="contact.php">Contacter</a></li>
        </ul>
      </div>
      <div>
        <h2>Faire Un Don</h2>
        <p>Chaque mois une association au hasard est sélectionnée, cette semaine faites un don à : <b>Médecins du monde</b>.</p>
        <a href="https://www.paypal.com/paypalme/elliotmoreau19" class="btn btn-secondary">Faire un don</a>
      </div>
      <div>
        <p>
          Copyright LaGazetteTulliste &copy; 2022, Touts Droits Réservés. 
        </p>
      </div>
    </div>
  </footer>
</body>
</html>


