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
        $rs1=$this->UserModel->QueryAll('id','desc');
        $rs2=$this->QuestionModel->QueryAll('id','desc');
        $result=[];
        $resultt=[];

        array_push($result,count($rs),count($rs1),count($rs2));
        array_push($resultt,($rs),($rs1),($rs2));

        //Gọi View
        $this->View(
            "LayoutAdmin",
            [
                "page" => "Home",
               'result'=>$result,
               'resultt'=>$resultt



            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    function addSubject()
    {
        $result = $this->SubjectModel->insertSubject([
            'email' => '12@gmail.com',
            'firstname' => '123'
        ]);
        //Gọi View
        $this->View(
            "LayoutAdmin",
            [
                "page" => "Home",
                "ListAll" => $result

            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    function updateSubject()
    {
        $result = $this->SubjectModel->updateSubject([
            'email' => '12@gmail.com',
            'firstname' => '123'
        ], 'id', '=', 1);
        //Gọi View
        $this->View(
            "LayoutAdmin",
            [
                "page" => "Home",
                "ListAll" => $result

            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    function deleteSubject()
    {
        $result = $this->SubjectModel->deleteSubject('id', '=', 1);
        //Gọi View
        $this->View(
            "LayoutAdmin",
            [
                "page" => "Home",
                "ListAll" => $result

            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
}
