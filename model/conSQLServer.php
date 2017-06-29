
<?php

class conexao{
	private static $dbtype   = "odbc:Driver={SQL Native Client}";
	private static $host     = "sqlserver-host";
	private static $port     = "1433";
	private static $user     = "sa";
	private static $password = "AAmu02+aamu02";
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
				echo "SQLServer [PDO] -> Connect!";
			} catch (PDOException $e) {
				//se houver exceção, exibe
				die("Connect Fail ... : <code>" . utf8_encode($e->getMessage()) . "</code>");
			}
    }
    return self::$connect;
  }
}

//include_once("./model/dao/baseDAO.php");
