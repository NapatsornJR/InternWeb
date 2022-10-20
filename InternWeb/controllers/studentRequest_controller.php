<?php class studentRequestController
{
    public function index(){
         $studentRequestList=studentRequest::getAll();

        require_once('views/studentRequest/index.php');
    }
   

  

   public function detailRequest()
   {
 
       
       $id=$_GET['R_id'];
 
       $studentRequest  = studentRequest::get($id); 
       
       
      
       require_once('./views/studentRequest/detailRequest.php');
       
   }

   public function newRequest()
   {
    $id=$_GET['S_id'];
  
    $OrganizationList = Organization::getAll();
    $studentRequest  = Student::get2($id);
       require_once('./views/studentRequest/addrequest.php');
       
   }

   public function addRequest()
   {
       
       $R_type = $_POST['R_type'];
       $S_fname = $_POST['S_fname']; 
       $S_lname = $_POST['S_lname'];
       $R_position = $_POST['R_position'];
       $R_cost = $_POST['R_cost'];
       $R_room = $_POST['R_room'];
       $R_sdate = $_POST['R_sdate'];
       $R_fdate= $_POST['R_fdate'];
   $O_addr = $_POST['O_addr'];
       $C_fname = $_POST['C_fname'];
       $C_lname = $_POST['C_lname'];
       $C_email = $_POST['C_email'];
       $C_tel = $_POST['C_tel'];
       $D_fname = $_POST['D_fname'];
       $D_lname = $_POST['D_lname'];
       $D_position = $_POST['D_position'];


    

       $check= $_POST['O_name'];
        if($check==="other")
        {
            $O_name = $_POST['O_name2'];

            }
            else
            {
                $O_name = $_POST['O_name'];
                
 
            }
    
       $list1=Organization::get($O_name);
       if($O_name===$list1->O_id)
       {
         $O_id=$list1->O_id;   
       }
       else{

        Organization::Add($O_name,$O_addr);
        $list1=Organization::get($O_name);
        $O_id=$list1->O_id;
       }
       
     
       Colabor::Add($C_fname,$C_lname,$C_email,$C_tel, $O_id);
       $list2=Colabor::get($C_fname,$C_lname,$C_email,$C_tel, $O_id);
       $C_id=$list2->C_id;
       Data_namedoc::Add($D_fname,$D_lname,$D_position, $O_id);
       $list3=Data_namedoc::get($D_fname,$D_lname,$D_position, $O_id);
       $D_id=$list3->D_id;

       $list4=Student::get($S_fname,$S_lname);
       $S_id=$list4->S_id;
      
       studentRequest::Add($R_type,$R_position,$R_cost,$R_room,$R_sdate, $R_fdate,$S_id,$C_id,$D_id);

        $fp = fopen($_FILES["DR_path"]["tmp_name"],"r");
        $ReadBinary = fread($fp,filesize($_FILES["DR_path"]["tmp_name"]));
        fclose($fp);
        $DR_path = addslashes($ReadBinary);
  
        $list5=studentRequest::get2($R_type,$R_position,$R_cost,$R_room,$R_sdate, $R_fdate,$S_id,$C_id,$D_id);
        $R_id=$list5->R_id;
        $date1 =date("Y-m-d");
    
        Doc_Request::Add($DR_path,$R_id,$date1);

     
       
       studentRequestController::index();
   }

   

}?>