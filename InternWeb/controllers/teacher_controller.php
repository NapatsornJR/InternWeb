<?php class teacherController
{
    public function index(){
        $teacher_list = teacher::getAll();
        require_once('views/teacher/index.php');
    }
    public function addAP_request()
    {
        
        $AP_date = date("Y-m-d");
        $AP_approve= $_GET['AP_approve'];
        $AP_note= $_GET['AP_note'];
        $A_id= $_GET['A_id'];
        $R_id= $_GET['R_id'];
    

        teacher::addAP_request($AP_date,$AP_approve,$AP_note,$A_id,$R_id);
        teacher::updateRequest($R_id);
        teacherController::index();
        

    }

    public function search()
    {   
        $key=$_GET['key'];
        $teacher_list = teacher::search($key);
        require_once('views/teacher/index.php');
    }

   
   
}?>