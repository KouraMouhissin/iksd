<?php
class DB{
    private $host  = DB_HOST;
    private $login = DB_USER;
    private $pwd   = DB_PASSWORD;
    private $name  = DB_NAME;
    public $connexion;

    public function __construct()
    {
        try{
            $attribute = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            $this->connexion = new PDO("mysql:host=$this->host;dbname=$this->name",$this->login,$this->pwd, $attribute);
        }catch(\PDOException $e){

        }
    }    
    /**
     * Select : select data from database
     *
     * @param  string $sql
     * @param  array $data
     * @return object
     */
    public function select(string $sql, $data = []) : object{
        $query = $this->connexion->prepare($sql);
        $query->execute($data);
        return $query;
    }    
    /**
     * Insert : insert, delete, update data in database
     *
     * @param  string $sql
     * @param  array $data
     * @return void
     */
    public function insert($sql,$data = []){
        $query = $this->connexion->prepare($sql);
        $query->execute($data);
    }
}
?>
