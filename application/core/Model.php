<?php
abstract class Model
{
    public function database()
    {
        require_once 'lib/medoo.min.php';

        $connection = new medoo([
            'database_type' => DB_TYPE,
            'database_name' => DB_DATABASE,
            'server' => DB_HOST,
            'username' => DB_USER,
            'password' => DB_PASSWORD,
            'charset' => DB_CHARSET,
            'option' => [
                PDO::ATTR_CASE => PDO::CASE_NATURAL
            ]
        ]);

        return $connection;
    }
}
