<?php
 
 class Database{

    
public $connection;
public $statement;  

public static $db;
    public function __construct($config,$username='root',$password='')
    {
        $dsn = "mysql:" . http_build_query($config,'',';');;

        $this->connection = new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query,$params=[])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this->statement;
    }

    public function fetch()
    {
        return $this->statement->fetch();
    }

    public function fetchOrFail()
    {
        $result =  $this->fetch();
        if(!$result)
        {
            abort(404);
        }
        return $result;
    }

    public static function connect()
    {
           $config = require('config.php');
            self::$db = new Database($config,'root',$config['password']);
            return self::$db;
    }
    public function fetchAll()
    {
        return  $this->statement->fetchAll();
    }

    public static function db()
    {
        if(!isset(self::$db))
        {
            self::connect();
        }
        return self::$db;
    }

}
?>