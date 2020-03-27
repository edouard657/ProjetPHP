<?php   require_once('../model/DAO.class.php');
        require_once('../model/Article.class.php');
        require_once('../model/Category.class.php');
        require_once('../framework/View.class.php');

    // Configuration
    $config = parse_ini_file('../config/config.ini');

    // DAO Creation
    $dao = new DAO($config['database_path']);

    // view creation
    $view = new View();

    // Looking URL parameters
    if (isset($_GET['firstIndex'])) {
        $view->assign('category', 'Tous les produit');
        $view->assign('articles', $dao->getFirstN(12));
    } elseif (isset($_GET['category'])) {
        $view->assign('category', $dao->getCat($_GET['category'])->getTitle());
        $view->assign('articles', $dao->getCatArtN($_GET['category'], 12));
    }

    $view->assign('categories', $dao->getAllCat());

    $view->assign('firstIndex', $dao->getFirstN(1)[0]->getID());

    $view->assign('config', $config);

    // View displaying
    $view->display('produits.view.php');