<?php
class Subject extends Controller
{
    public $SubjectModel;

    function __construct()
    {
        // require_once './mvc/models/SubjectModel.php';
        // GỌi Model
        $this->SubjectModel = $this->Model('SubjectModel');
    }
    // các func là action bổ sung cho Controllers 
    function Add()
    {
        //  kết quả trả về từ model gọi hàm ListAll model
        $result = $this->SubjectModel->QueryAll('id','desc');
        //Gọi View
        $this->View(
            "LayoutAdmin",
            [
                "page" => "addsubject",
                "ListAll" => $result

            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    function edit($id){
        // get id ,vif khi call usser func cos truyeenf tham so cho param roi
        $result = $this->SubjectModel->QueryOne('id','=',$id);
        $this->View(
            "LayoutAdmin",
            [
                "page" => "editsubject",
              'result'=>$result,
              'id'=>$id

            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    function List()
    {
        //  kết quả trả về từ model gọi hàm ListAll model
        $result = $this->SubjectModel->QueryAll('id','desc');
        // Gọi View
        $this->View(
            "LayoutClient",
            [
                "page" => "listsubject",
                "result" => $result

            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    function xulyadd(){
        // var_dump($_POST);
        
        $folderUp= dirname(dirname(dirname(__FILE__))).'/public/upload/' ;
        // echo $folderUp;
        move_uploaded_file($_FILES['subject-img']['tmp_name'],$folderUp.$_FILES['subject-img']['name']);
         //  kết quả trả về từ model gọi hàm ListAll model
         $result = $this->SubjectModel->insertSubject([
            'subject_name' => $_POST['subject-name'],
            'subject_img' => $_FILES['subject-img']['name']
        ]);
        echo $result;
        if($result){
           setcookie('msg','Thêm môn học thành công!',time()+10);
        }else{
           setcookie('msg','Thêm môn học thất bại!',time()+10);

        }
        header('Location:../subject/add/');
        //Gọi View
    }
//xu ly update h
function xulyupdate(){
    // var_dump($_POST);
    // var_dump($_FILES);
    $subject_name=$_POST['subject-name'];
    $subject_img=$_POST['subject-img'];
    $subject_id=$_POST['subject-id'];
    if($_FILES['subject-img']['name'] !=''){
        // có update ảnh
    $subject_img=$_FILES['subject-img']['name'];
    $folderUp= dirname(dirname(dirname(__FILE__))).'/public/upload/' ;
    // echo $folderUp;
    move_uploaded_file($_FILES['subject-img']['tmp_name'],$folderUp.$subject_img);
    }
    $result = $this->SubjectModel->updateSubject([
        'subject_name'=>$subject_name,
        'subject_img'=>$subject_img
    ],'id','=',$subject_id);
    
    if($result){
       setcookie('msg','Cập nhật thành công!',time()+10);
    }else{
       setcookie('msg','Cập nhật thất bại!',time()+10);

    }
    header('Location:../subject/list/');

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
    function deleteSubject($id)
    {
        // echo $id;
        $result = $this->SubjectModel->deleteSubject('id', '=', $id);
        if($result==1){
            setcookie('msg','Xoá thành công!',time()+10);
         }else{
            setcookie('msg','Xoá thất bại!',time()+10);
     
         }
        header('Location:../../subject/list/');
    }
}
