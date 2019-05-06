<?php
namespace App;

class App {
    private $db = null;

    static function singleton() {
        static $instance = null;
        if ($instance === null) {
            $instance = new App();
        }

        return $instance;
    }

    public function getDbConnection() {
        if ($this->db === null) {
            $this->db = 'CONNECTION';
        }

        return $this->db;
    }
}
