<?php
class Home extends Controller
{
    public $DanhMucModel;

    function __construct()
    {
        // require_once './mvc/models/DanhMucModel.php';
        // GỌi Model
        $this->DanhMucModel = $this->Model('DanhMucModel');
    }
    // các func là action bổ sung cho Controllers 
    function First()
    {
        //  kết quả trả về từ model gọi hàm ListAll model
        $result = $this->DanhMucModel->ListAll();
        //Gọi View
        $this->View(
            "MasterLayout",
            [
                "page" => "Home",
                "ListAll" => $result

            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    function InfoDanhMuc($id)
    {
        //tham số truyền vào là  mảng Params
        // call_user_func_array("tên func","tham số truyền vào")
        $result = $this->DanhMucModel->InfoDanhMuc($id);
        //    Gọi view
        $this->View(
            "MasterLayout",
            [
                "page" => "Home",
                "InfoDanhMuc" => $result
            ]
        );
    }
   
}
