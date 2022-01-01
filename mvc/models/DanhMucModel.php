<?php
class DanhMucModel extends DB
{
    public $table = "danh_muc";

    function __construct()
    {
        parent::__construct();//khởi chạy hàm contruct DB
    }
    function ListAll()
    {
       return $this->QueryAll();
    }
   
    
}
?>