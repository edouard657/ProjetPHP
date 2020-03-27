<?php   require_once('../model/DAO.class.php');
        require_once('../framework/View.class.php');

    // Configuration
    $config = parse_ini_file('../config/config.ini');

    // DAO creation
    $dao = new DAO($config['database_path']);

    // View construction
    $view = new View();

    // Parameters check
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {

    }

    // 
    $view->assign('categories', $dao->getAllCat());

    $view->assign('firstIndex', $dao->getFirstN(1)[0]->getID());

    $view->assign('article', $dao->getArt($id));

    // Loading view
    $view->display('produit_choisi.view.php');