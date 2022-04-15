<?php
class Ajax extends Controller
{
    public $UserModel;



    function __construct()
    {
        // require_once './mvc/models/QuestionModel.php';
        // GỌi Model
        $this->UserModel = $this->Model('UserModel');

    }
    function checkemail(){
        return json_encode(true);
    }
}
 