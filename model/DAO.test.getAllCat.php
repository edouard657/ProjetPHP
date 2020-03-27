<?php require_once('DAO.class.php');

    $config = parse_ini_file('../config/config.ini');

    // DAO creation
    $dao = new DAO($config['database_path']);

    // Categories List retreive
    $cats = $dao->getAllCat();

    // Displaing categories
    print($cats[1]->getID() . ' ' . $cats[1]->getTitle());
