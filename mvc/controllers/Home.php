<?php
class Home extends Controller
{
    function __construct()
    {
        // require_once './mvc/models/DanhMucModel.php';
        // GỌi Model
        $this->Model('DanhMucModel');
    }
    // các func là action bổ sung cho Controllers 
    function First()
    {
        //  kết quả trả về từ model
        $result = $this->a->ListAll();
        //Gọi View
        $this->View(
            "MasterLayout",
            [
                "page" => "Home",
                "ListAll" => $result

            ]
        );
    }
    function Show($ten, $ho)
    {
        echo $ten . $ho;
    }
}
