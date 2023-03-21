<?php

    require_once("../includes/Db.php");

    $db = new Db("localhost", 'dzamora', 'dzamora', '217924', '3306');
    $db->connect();

    $db->query("SELECT id_continent, continent FROM world.continent");