<?php
    class MySQL {
        public static $dsn  = 'mysql:host=127.0.0.1;port=3306;dbname=auth;charset=utf8';
        public static $user = 'root';
        public static $pass = 'root';




        private static $db;




        final private function __construct() { }
        final private function __clone() { }




        public static function get() {
            if (is_null(self::$db)) {
                self::$db = new PDO(self::$dsn, self::$user, self::$pass);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }
            return self::$db;
        }
    }
?>
