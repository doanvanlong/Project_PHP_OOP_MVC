<?php
class Quiz extends Controller
{
    public $SubjectModel;
    public $UserModel;
    public $QuestionModel;
    public $HistoryModel;



    function __construct()
    {
        // require_once './mvc/models/SubjectModel.php';
        // GỌi Model
        $this->SubjectModel = $this->Model('SubjectModel');
        $this->UserModel = $this->Model('UserModel');
        $this->QuestionModel = $this->Model('QuestionModel');
        $this->HistoryModel = $this->Model('HistoryModel');
    }
    // các func là action bổ sung cho Controllers 
    function First($id)
    {
        if (isset($_SESSION['login'])) {
            $rs = $this->SubjectModel->QueryOne('id', '=', $id);
            //Gọi View
            $this->View(
                "LayoutClient",
                [
                    "page" => "quiz",
                    'result' => $rs[0]
                ]
                // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
            );
        }
        header('Location:../../account/login/');
    }
    function saveHistory()
    {
        // var_dump($_POST);
        //thêm lịch sử quiz vào db
        $rs = $this->HistoryModel->insertHistory([
            'id_subject'=>$_POST['id_subject'],
            'subject_name' =>$_POST['name'],
            'score' => $_POST['score'],
            'id_user' => $_POST['id_user']
        ]);
        if($rs){
            echo 1;
        }else{
            echo 0;
        }
    }
    function SubjectQuestion($id)
    {
        // echo json_encode([1,2]);
        // echo $id;
        $questions = $this->QuestionModel->QueryBySubject('subject_id', '=', $id);
        // var_dump($questions);
        $rss = [];
        foreach ($questions as $qs) {
            $rs = ["id" => $qs['id'], "question" => $qs['question'], "answer_id" => $qs['answer'], "answer" => ['A' => $qs['A'], 'B' => $qs['B'], 'C' => $qs['C'], 'D' => $qs['D']]];
            array_push($rss, $rs);
        }
        echo json_encode($rss);
        // 
    }
    function QuizAppp()
    {

        // $rs = $this->SubjectModel->QueryOne('id', '=', $id);
        // //Gọi View
        // $this->View(
        //     "LayoutClient",
        //     [
        //         "page" => "quizapp",
        //         'result' => $rs[0]
        //     ]
        //     // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        // );
    }
}
