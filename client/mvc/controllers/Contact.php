<?php
class Contact extends Controller
{

    function __construct()
    {

    }
    // các func là action bổ sung cho Controllers 
    function First()
    {
      
        $this->View(
            "LayoutClient",
            [
                "page" => "contact",
            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    
}
