<?php		
namespace App;
		
class DB
{
	private $dbh;

	public function __construct() 
	{
		$dsn = 'mysql: host='.DB_HOST.'; dbname='.DB_DATABASE;
		$this->dbh = new \PDO($dsn, DB_USER, DB_PASSWORD);
	}

	public function execute(string $sql)
	{ 
		return $execute = $this->dbh->prepare($sql)->execute();
	}

	public function query(string $sql, array $data = [], string $className = '')
	{
		$sth = $this->dbh->prepare($sql);
		foreach ($data as $marker => $value) {
			$sth->bindParam($marker, $value);
		}
		$sth->execute();
	
		if (!empty($className)) {
			return $sth->fetchAll(\PDO::FETCH_CLASS, $className);
		}
		return $sth->fetchAll();
	}
}

