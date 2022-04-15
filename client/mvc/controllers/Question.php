<?php
class Question extends Controller
{
    public $QuestionModel;
    public $SubjectModel;


    function __construct()
    {
        // require_once './mvc/models/QuestionModel.php';
        // GỌi Model
        $this->QuestionModel = $this->Model('QuestionModel');
        $this->SubjectModel = $this->Model('SubjectModel');

    }
    // các func là action bổ sung cho Controllers 
    function Add()
    {
        //  kết quả trả về từ model gọi hàm ListAll model
        $result=$this->SubjectModel->QueryAll('id','desc');
        //Gọi View
        $this->View(
            "LayoutAdmin",
            [
                "page" => "addquestion",
                'result' =>$result

            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    function edit($id){
        // get id ,vif khi call usser func cos truyeenf tham so cho param roi
        $result = $this->QuestionModel->QueryOne('id','=',$id);
        $subject=$this->SubjectModel->QueryAll('id','desc');
        $this->View(
            "LayoutAdmin",
            [
                "page" => "editquestion",
              'result'=>$result,
              'subject'=>$subject,
              'id'=>$id

            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    function List()
    {
        //  kết quả trả về từ model gọi hàm ListAll model
        $result = $this->QuestionModel->QueryAll('id','desc');
        $name_subject=[];
        foreach($result as $subject){
            $rs=$this->SubjectModel->getget('subject','id','=',$subject['subject_id']);
        
            array_push($name_subject,$rs['subject_name']);
        }
        // Gọi View
        $this->View(
            "LayoutAdmin",
            [
                "page" => "listquestion",
                "result" => $result,
                'name_subject'=>$name_subject

            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    function xulyadd(){
         $result = $this->QuestionModel->insertQuestion([
            'subject_id' => $_POST['subject-id'],
            'question'=>$_POST['question'],
            'answer'=> $_POST['answer'],
            'A'=> $_POST['A'],
            'B'=> $_POST['B'],
            'C'=> $_POST['C'],
            'D'=> $_POST['D']

        ]);
        if($result){
           setcookie('msg','Thêm câu hỏi thành công!',time()+10);
        }else{
           setcookie('msg','Thêm câu hỏi thất bại!',time()+10);

        }
        header('Location:../question/add/');
        //Gọi View
    }
//xu ly update h
function xulyupdate(){
    // var_dump($_POST);
    // var_dump($_FILES);
    $id_question=$_POST['id_question'];
    $result = $this->QuestionModel->updateQuestion([
        'subject_id' => $_POST['subject-id'],
        'question'=>$_POST['question'],
        'answer'=> $_POST['answer'],
        'A'=> $_POST['A'],
        'B'=> $_POST['B'],
        'C'=> $_POST['C'],
        'D'=> $_POST['D']

    ],'id','=',$id_question);
    if($result){
       setcookie('msg','Cập nhật câu hỏi thành công!',time()+10);
    }else{
       setcookie('msg','Cập nhật câu hỏi thất bại!',time()+10);

    }
    header('Location:../question/list/');

}

    function addSubject()
    {
        $result = $this->QuestionModel->insertSubject([
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
        $result = $this->QuestionModel->updateSubject([
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
    function deleteQuestion($id)
    {
        // echo $id;
        $result = $this->QuestionModel->deleteQuestion('id', '=', $id);
        if($result==1){
            setcookie('msg','Xoá thành công!',time()+10);
         }else{
            setcookie('msg','Xoá thất bại!',time()+10);
     
         }
        header('Location:../../question/list/');
    }
}
