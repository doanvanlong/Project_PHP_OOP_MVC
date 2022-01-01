<?php
class DB
{
    public $conn;
    private $severname = "localhost";
    private $username = 'root';
    private $password = "";
    private $dbname = 'bomstudent';
    function __construct()
    {
        try {
            $this->conn = new PDO('mysql:host=' . $this->severname . ';dbname=' . $this->dbname . ';charset=utf8', $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Kết nối thất bại" . $e->getMessage();
        }
    }
  
    function QueryAll() {
        // this -> table , khi class kế thừa phải xet table cho nó
        $sql="SELECT * FROM  danh_muc";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>