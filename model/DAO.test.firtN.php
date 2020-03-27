<?php require_once('DAO.class.php');

    $config = parse_ini_file('../config/config.ini');

    $dao = new DAO($config['database_path']);

    $res = $dao->getFirstN(5);

    var_dump($res);