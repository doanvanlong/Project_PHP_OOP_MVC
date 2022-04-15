<?php
class Home extends Controller
{
    public $SubjectModel;
    public $UserModel;
    public $QuestionModel;


    function __construct()
    {
        // require_once './mvc/models/SubjectModel.php';
        // GỌi Model
        $this->SubjectModel = $this->Model('SubjectModel');
        $this->UserModel = $this->Model('UserModel');
        $this->QuestionModel = $this->Model('QuestionModel');

    }
    // các func là action bổ sung cho Controllers 
    function First()
    {
        //  kết quả trả về từ model gọi hàm ListAll model
        $rs=$this->SubjectModel->QueryAll('id','desc');
        
        $result = [];
        for($i=0;$i<4;$i++){
            array_push($result,$rs[$i]);
        }
        //Gọi View
        $this->View(
            "LayoutClient",
            [
                "page" => "Home",
                'result' =>$result
            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    
}
