<?php
class UserModel extends DB
{
    // public $table = "question";

    function __construct()
    {
        parent::__construct();//khởi chạy hàm contruct DB
    }
    function QueryAll($orderBy,$value)
    {
    //    $kq= $this->QueryAll();//gọi hàm query all bên DB
    //    return json_encode($kq);
    $kq=$this->table('user')->orderBy($orderBy,$value)->get();
          return ($kq);
// 
    }
    function QueryOne($colum,$operator,$value)
    {
    //    $kq= $this->QueryAll();//gọi hàm query all bên DB
    //    return json_encode($kq);
    $kq=$this->table('user')->where($colum,$operator,$value)->get();
          return ($kq);
// 
    }
    function insertUser($args){
        $kq = $this->table('user')->insert($args);
        return ($kq);
    }
    function updateUser($args,$colum, $operator, $value){
        $kq = $this->table('user')->update($args,$colum, $operator, $value);
        return ($kq);
    }
    function deleteUser($colum, $operator, $value){
        $kq = $this->table('user')->delete($colum,$operator,$value);
        return ($kq);
    }
   
   
    
}
