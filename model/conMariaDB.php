<?php

class conexao{
	private static $dbtype   = "mysql";
	private static $host     = "mariadb-host";
	private static $port     = "3306";
	private static $user     = "root";
	private static $password = "maria";
	private static $db       = "teste";
	public  static $connect;

	private function __construct() {} /* Evita que a classe seja instanciada publicamente */
	private function __clone() {} /* Evita que a classe seja clonada */
	private function __wakeup() {} /* Método unserialize do tipo privado para prevenir a desserialização da instância dessa classe */

	/* Metodo Singleton para criar a conexão com o banco de dados */
	public static function getConnect() {
		if (!isset(self::$connect)) {
			try {
				$dsn = self::$dbtype.":host=".self::$host.";port=".self::$port.";dbname=".self::$db;
				self::$connect = new PDO($dsn, self::$user, self::$password);
				echo "MariaDB (PDO) -> Connect!";
			} catch (PDOException $e) {
				//se houver exceção, exibe
				die("Connect Fail ... : <code>" . utf8_encode($e->getMessage()) . "</code>");
			}
        }

        return self::$connect;
    }
}

//include_once("./model/dao/baseDAO.php");
