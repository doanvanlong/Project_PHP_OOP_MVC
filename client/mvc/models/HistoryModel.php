<?php
class HistoryModel extends DB
{
    // public $table = "question";

    function __construct()
    {
        parent::__construct();//khởi chạy hàm contruct DB
    }
    function QueryAll($first,$on, $second,$orderBy,$value,$colum, $operator, $value2)
    {
    //    $kq= $this->QueryAll();//gọi hàm query all bên DB
    //    return json_encode($kq);
    $kq=$this->table('quizhistory')->join('user',$first,$on, $second)->orderBy($orderBy,$value)->where($colum, $operator, $value2)->get();
          return ($kq);
// 
    }
    function QueryOne($colum,$operator,$value)
    {
    //    $kq= $this->QueryAll();//gọi hàm query all bên DB
    //    return json_encode($kq);
    $kq=$this->table('quizhistory')->where($colum,$operator,$value)->get();
          return ($kq);
// 
    }
    function insertHistory($args){
        $kq = $this->table('quizhistory')->insert($args);
        return ($kq);
    }
    function updateHistory($args,$colum, $operator, $value){
        $kq = $this->table('quizhistory')->update($args,$colum, $operator, $value);
        return ($kq);
    }
    function deleteHistory($colum, $operator, $value){
        $kq = $this->table('quizhistory')->delete($colum,$operator,$value);
        return ($kq);
    }
   
   
    
}
