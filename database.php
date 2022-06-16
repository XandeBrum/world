<?php 

class database{

    private $host;

    private $usename;
    private $password;

    private $databae;
    private $connection;

    public function __construct(){

        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'world';

        
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->database;charset=utf8mb4";
            $this->connection = new PDO($dsn, $this->username, $this->password);

        } catch (PDOException $exception) {
            die("Connection failed!-> ".$exception.getMessage());
        }
    }

// LOGIN admin
public function login(){
    
} 
    

// SELECT data van database
    public function select($sql, $placeholder = []){
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($placeholder);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if(!empty($result)){
            return $result;
        }

        return;
    }

// INSERT data naar de database
    public function insert($sql, $placeholder, $location="NULL"){
        try{
            // start de transactie
            $this->connection->beginTransaction();

            $statement = $this->connection->prepare($sql);
            $statement->execute($placeholder);
            // data definitief schrijven naar database
            $this->connection->commit();
        } catch (Exception $e){

            $this->pdo->rollback();
            throw $e;
        }
    }

// EDIT data van database 
    public function edit($sql, $placeholder, $location=NULL){
        try{
            $stmt = $this->connection->prepare($sql);
            if($stmt->execute($placeholder)){
                header("location: ". $location);
            }
        }catch(Excetpion $e){
            $this->pdo->rollback();
            throw $e;
        }

    }



}

?>