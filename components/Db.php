<?php

class Db
{
    public static function getConnection()
    {
        $paramPath = ROOT . '/config/db_params.php';
        $params = include($paramPath);

        $db = new PDO("mysql:host={$params['host']};dbname={$params['dbname']};user={$params['user']};password={$params['password']}");
        return $db;

    }
}