<?php
class QuestionModel extends DB
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
    $kq=$this->table('question')->orderBy($orderBy,$value)->get();
          return ($kq);
// 
    }
    function QueryOne($colum,$operator,$value)
    {
    //    $kq= $this->QueryAll();//gọi hàm query all bên DB
    //    return json_encode($kq);
    $kq=$this->table('question')->where($colum,$operator,$value)->get();
          return ($kq);
// 
    }
    function QueryBySubject($colum,$operator,$value){
        $kq=$this->table('question')->where($colum,$operator,$value)->get();
        return ($kq);
    }
    function insertQuestion($args){
        $kq = $this->table('question')->insert($args);
        return ($kq);
    }
    function updateQuestion($args,$colum, $operator, $value){
        $kq = $this->table('question')->update($args,$colum, $operator, $value);
        return ($kq);
    }
    function deleteQuestion($colum, $operator, $value){
        $kq = $this->table('question')->delete($colum,$operator,$value);
        return ($kq);
    }
   
   
    
}
