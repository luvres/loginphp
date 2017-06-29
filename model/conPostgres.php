<?php

class conexao{
	private static $dbtype   = "pgsql";
	private static $host     = "postgres-host";
	private static $port     = "5432";
	private static $user     = "postgres";
	private static $password = "postgres";
	private static $db       = "dbzone";
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
				echo "Postgres [PDO] -> Connect!";
			} catch (PDOException $e) {
				//se houver exceção, exibe
				die("Connect Fail ... : <code>" . utf8_encode($e->getMessage()) . "</code>");
			}
        }

        return self::$connect;
    }
}

//include_once("./model/dao/baseDAO.php");
