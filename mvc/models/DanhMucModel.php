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
       $kq= $this->QueryAll();//gọi hàm query all bên DB
       return json_encode($kq);
    }
    function InfoDanhMuc($id) {
        $kq = $this->QueryOne($id);
        return json_encode($kq);
    }
   
    
}
?>