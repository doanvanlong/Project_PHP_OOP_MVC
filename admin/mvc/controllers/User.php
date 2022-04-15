<?php
class User extends Controller
{
    public $UserModel;
    public $SubjectModel;


    function __construct()
    {
        // require_once './mvc/models/UserModel.php';
        // GỌi Model
        $this->UserModel = $this->Model('UserModel');
    }
    // các func là action bổ sung cho Controllers 
    function Add()
    {

        //  kết quả trả về từ model gọi hàm ListAll model
        $result = $this->UserModel->QueryAll('id', 'desc');
        //Gọi View
        $this->View(
            "LayoutAdmin",
            [
                "page" => "adduser",
                'result' => $result

            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    function edit($id)
    {
        // get id ,vif khi call usser func cos truyeenf tham so cho param roi
        $result = $this->UserModel->QueryOne('id', '=', $id);
        $this->View(
            "LayoutAdmin",
            [
                "page" => "edituser",
                'result' => $result,
                'id' => $id

            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    function List()
    {
        //  kết quả trả về từ model gọi hàm ListAll model
        $result = $this->UserModel->QueryAll('id', 'desc');
       
        // Gọi View
        $this->View(
            "LayoutAdmin",
            [
                "page" => "listuser",
                'result'=>$result
            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    function xulyadd()
    {
        $folderUp = dirname(dirname(dirname(__FILE__))) . '/public/upload/';
        // echo $folderUp;
        move_uploaded_file($_FILES['img']['tmp_name'], $folderUp . $_FILES['img']['name']);
        //  kết quả trả về từ model gọi hàm ListAll model
        $password=$_POST['password'];
        $result = $this->UserModel->insertUser([
            'email' => $_POST['email'],
            'password' => $password,
            'name' => $_POST['name'],
            'img' => $_FILES['img']['name'],
            'birthday' => $_POST['birthday'],
            'gender' => $_POST['gender'],
            'phone' => $_POST['phone'],
            'role'=>0

        ]);
        if ($result) {
            setcookie('msg', 'Thêm học viên thành công!', time() + 10);
        } else {
            setcookie('msg', 'Thêm học viên thất bại!', time() + 10);
        }
        header('Location:../user/add/');
        //Gọi View
    }
    //xu ly update h
    function xulyupdate()
    {
       
        $img=$_POST['img'];
        if($_FILES['img']['name']!=''){
            
        $folderUp = dirname(dirname(dirname(__FILE__))) . '/public/upload/';
        // echo $folderUp;
        move_uploaded_file($_FILES['img']['tmp_name'], $folderUp . $_FILES['img']['name']);
        //  kết quả trả về từ model gọi hàm ListAll model
        $img=$_FILES['img']['name'];
        }
        $birthday=$_POST['birthdayold'];
        if($_POST['birthday']!=''){
            $birthday=$_POST['birthday'];
        }
        // var_dump($_FILES);
        $id_user = $_POST['id_user'];
        $result = $this->UserModel->updateUser([
            'email' => $_POST['email'],
            'name' => $_POST['name'],
            'img' => $img,
            'birthday' => $birthday,
            'gender' => $_POST['gender'],
            'phone' => $_POST['phone'],

        ], 'id', '=', $id_user);
        if ($result) {
            setcookie('msg', 'Cập nhật học viên thành công!', time() + 10);
        } else {
            setcookie('msg', 'Cập nhật học viên thất bại!', time() + 10);
        }
        header('Location:../user/list/');
    }

    function addSubject()
    {
        $result = $this->UserModel->insertSubject([
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
        $result = $this->UserModel->updateSubject([
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
        $result = $this->UserModel->deleteQuestion('id', '=', $id);
        if ($result == 1) {
            setcookie('msg', 'Xoá thành công!', time() + 10);
        } else {
            setcookie('msg', 'Xoá thất bại!', time() + 10);
        }
        header('Location:../../question/list/');
    }
}
