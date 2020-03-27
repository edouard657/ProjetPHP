<?php   require_once('../framework/View.class.php');
        require_once('../model/DAO.class.php');
    
    // Configuration
    $config = parse_ini_file('../config/config.ini');

    // DAO creation
    $dao = new DAO($config['database_path']);

    // View construction
    $view = new View();

    // 
    $view->assign('categories', $dao->getAllCat());

    // First article
    $view->assign('firstIndex', $dao->getFirstN(1)[0]->getID());

    // Loading view
    $view->display('page_daccueil.view.php');