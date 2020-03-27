<?php require_once('DAO.class.php');

    $config = parse_ini_file('../config/config.ini');

    $dao = new DAO($config['database_path']);

    var_dump($dao->getCatArtN(1,12));