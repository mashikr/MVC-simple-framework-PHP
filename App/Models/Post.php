<?php

namespace App\Models;

use PDO;

class Post extends \Core\Model {

    public static function getAll() {
        // $host = 'localhost';
        // $dbname = 'test';
        // $username = 'root';
        // $password = '';

        try {
            //$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $db = static::getDB();
            $stmt = $db->query('SELECT * FROM post');
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>