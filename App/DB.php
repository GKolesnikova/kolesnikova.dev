<?php		
namespace App;
		
class DB
{
	private $dbh;

	public function __construct() 
	{
		$dsn = 'mysql: host=127.0.0.1; dbname=hamburg';
		$this->dbh = new \PDO($dsn, 'root', '');
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

