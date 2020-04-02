<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../view/master.css">
  <link rel="stylesheet" href="../view/nav.css">
  <link rel="stylesheet" href="../view/produits.css">
  <link rel="icon" href="<?= $config['image_path'].'logo.png' ?>">
  <title><?= $this->param['category']?></title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="../controler/page_daccueil.ctrl.php"><i class="fa fa-home"></i></a></li>
        <li><a href="../controler/produits.ctrl.php?category=<?= $this->param['categories'][0]->getID()?>"><ul>CAT 1</ul></a></li>
        <li><a href="../controler/produits.ctrl.php?category=<?= $this->param['categories'][9]->getID()?>"><ul>CAT 2</ul></a></li>
        <li><a href="../controler/produits.ctrl.php?category=<?= $this->param['categories'][3]->getID()?>"><ul>CAT 3</ul></a></li>
        <li><a href="../controler/produits.ctrl.php?category=<?= $this->param['categories'][1]->getID()?>"><ul>CAT 4</ul></a></li>
      </ul>
    </nav>
  </header>
    <div class="container">
    <?php
      // Affichage des articles
      foreach ($this->param['articles'] as $key => $article) {
          ?>
            <div class="flex-item">
              <div class="imgArt">
                <img src="<?= $this->param['config']['image_path'] . $article->getCover() ?>" alt="<?=$this->param['category'] ?>">
              </div>
              <div class="desc">
                <h2><?= $article->getTitle()?></h2>
                <p> Ref : N00<?= $article->getID()?></p>
                <p><?= $article->getDescription() ?></p>
              </div>
            </div>
          <?php
      }
    ?>
    </div>
</body>
</html>
