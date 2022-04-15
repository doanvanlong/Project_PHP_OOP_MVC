<?php
class Account extends Controller
{
    public $UserModel;

    function __construct()
    {
        $this->UserModel = $this->Model('UserModel');
    }
    // các func là action bổ sung cho Controllers 
    function Login()
    {

        $this->View(
            "LayoutClient",
            [
                "page" => "login",
            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    function checkLogin()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->UserModel->QueryOne('email', '=', "'$email'");

        if ($user && $user[0]['email'] == $email) {
            // check password
            if ($password == $user[0]['password']) {
                // echo 1;
                $login = [
                    'id' => $user[0]['id'],
                    'email' => $user[0]['email'],
                    'name' => $user[0]['name'],
                    'role' => $user[0]['role']
                ];
                $_SESSION['login'] = $login;
                unset($_SESSION['msg']);
                header('Location:../../home/first/');
            } else {
                // echo 0;
                header('Location:../../account/login/');
                $_SESSION['msg'] = 'Mật khẩu không chính xác!';
            }
            // echo 1;
        } else {
            // echo 0;
            $_SESSION['msg'] = 'Email không tồn tại!';
            header('Location:../../account/login/');
        }
    }
    function logout()
    {
        unset($_SESSION['login']);
        header('Location:../../home/first/');
    }
    function profile()
    {

        $user = $this->UserModel->QueryOne('id', '=', $_SESSION['login']['id']);
        $this->View(
            "LayoutClient",
            [
                "page" => "profile",
                'result' => $user[0]
            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
    function xulyupdate()
    {
        $img = $_POST['imgold'];
        $folderUp = dirname(dirname(dirname(dirname(__FILE__)))).'/admin/public/upload/' ;
        if ($_FILES['img']['name'] != '') {

            $folderUp = dirname(dirname(dirname(dirname(__FILE__)))).'/admin/public/upload/' ;

            // echo $folderUp;
            move_uploaded_file($_FILES['img']['tmp_name'], $folderUp . $_FILES['img']['name']);
            //  kết quả trả về từ model gọi hàm ListAll model
            $img = $_FILES['img']['name'];
        }
        $birthday = $_POST['birthdayold'];
        if ($_POST['birthday'] != '') {
            $birthday = $_POST['birthday'];
        }
        // var_dump($_FILES);
        $id_user = $_POST['id_user'];
        $result = $this->UserModel->updateUser([
            'email' => $_POST['email'],
            'name' => $_POST['name'],
            'img' => $img,
            'birthday' => $birthday,
            'gender' => $_POST['gender']

        ], 'id', '=', $id_user);
        if ($result) {
            setcookie('msg', 'Cập nhật  thành công!', time() + 10);
        } else {
            setcookie('msg', 'Cập nhật  viên thất bại!', time() + 10);
        }
        header('Location:../account/profile/');
    }
    function Register()
    {

        $this->View(
            "LayoutClient",
            [
                "page" => "register",
            ]
            // gán lại Kết quả trả từ model cho HTML view thông qua tham số truyền vào view 
        );
    }
}
