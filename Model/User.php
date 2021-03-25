<?php


namespace Model;


use PDO;

class User
{
    const username = 'username';
    const password = 'password';
    const database = 'legacy_app';
    const host = 'localhost';
    const table = 'users';

    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO(
            'mysql:host=' . self::host . ';dbname=' . self::database,
            self::username,
            self::password
        );
    }


    public function fetchAll(): array
    {
        return $this->pdo->query('SELECT * FROM ' . self::table)->fetchAll();
    }
}
