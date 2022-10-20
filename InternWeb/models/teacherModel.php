<?php
class teacher
{

    public $R_id;
    public $R_type;
    public $R_position;
    public $R_sdate;
    public $R_fdate;
    public $R_cost;
    public $R_room;
    public $R_status;
    public $S_id;
    public $C_id;
    public $D_id;
    public $S_pass;
    public $S_fname; 
    public $S_lname;
    public $S_year;
    public $C_fname;
    public $C_lname;
    public $C_email;
    public $C_tel;
    public $O_id;
    public $O_name;
    public $O_addr;
    public $D_fname;
    public $D_lname;
    public $D_position;
    public $DR_id;
    public $DR_date;
    public $DR_path;
    public $AP_id;
    public $AP_date;
    public $AP_approve;
    public $AP_note;
    public $A_id;
    public $A_pass;
    public $A_fname;
    public $A_lname;
    public $A_position;
    public $DS_id;
    public $DS_date;
    public $DS_path;

    public function __construct($R_id, $R_type, $R_position, $R_sdate, $R_fdate, $R_cost, $R_room, $R_status, $S_id, $C_id
    , $D_id, $S_pass, $S_fname, $S_lname, $S_year, $C_fname, $C_lname, $C_email, $C_tel, $O_id, $O_name, $O_addr, $D_fname
    , $D_lname, $D_position, $DR_id, $DR_date, $DR_path, $AP_id, $AP_date, $AP_approve, $AP_note, $A_id, $A_pass, $A_fname
    , $A_lname, $A_position, $DS_id, $DS_date, $DS_path)
    {
        $this->R_id = $R_id;
        $this->R_type = $R_type;
        $this->R_position = $R_position;
        $this->R_sdate = $R_sdate;
        $this->R_fdate = $R_fdate;
        $this->R_cost = $R_cost;
        $this->R_room = $R_room;
        $this->R_status = $R_status;
        $this->S_id = $S_id;
        $this->C_id = $C_id;
        $this->D_id = $D_id;
        $this->S_pass = $S_pass;
        $this->S_fname = $S_fname;
        $this->S_lname = $S_lname;
        $this->S_year = $S_year;
        $this->C_fname = $C_fname;
        $this->C_lname = $C_lname;
        $this->C_email = $C_email;
        $this->C_tel = $C_tel;
        $this->O_id = $O_id;
        $this->O_name = $O_name;
        $this->O_addr = $O_addr;
        $this->D_fname = $D_fname;
        $this->D_lname = $D_lname;
        $this->D_position = $D_position;
        $this->DR_id = $DR_id;
        $this->DR_date = $DR_date;
        $this->DR_path = $DR_path;
        $this->AP_id = $AP_id;
        $this->AP_date = $AP_date;
        $this->AP_approve = $AP_approve;
        $this->AP_note = $AP_note;
        $this->A_id = $A_id;
        $this->A_pass = $A_pass;
        $this->A_fname = $A_fname;
        $this->A_lname = $A_lname;
        $this->A_position = $A_position;
        $this->DS_id = $DS_id;
        $this->DS_date = $DS_date;
        $this->DS_path = $DS_path;
    }

    public static function getAll()
    {
        
        $teacherList = [];
        require("connect_connection.php");
        $sql = "SELECT Request.R_id,Request.R_type,Request.R_position,Request.R_sdate
        ,Request.R_fdate,Request.R_cost,Request.R_room,Request.R_status,Request.S_id
        ,Request.C_id,Request.D_id,Student.S_pass,Student.S_fname,Student.S_lname,Student.S_year,
        Colabor.C_fname,Colabor.C_lname,Colabor.C_email,Colabor.C_tel,Organization.O_id,Organization.O_name
        ,Organization.O_addr,Data_namedoc.D_fname,Data_namedoc.D_lname,Data_namedoc.D_position
        ,IF(Doc_Request.DR_id is NULL,'ไม่มีเอกสารคำร้องขอ',Doc_Request.DR_id) AS DR_id
        ,IF(Doc_Request.DR_date is NULL,'ไม่มีเอกสารคำร้องขอ',Doc_Request.DR_date) AS DR_date
        ,IF(Doc_Request.DR_path is NULL,'ไม่มีเอกสารคำร้องขอ',Doc_Request.DR_path) AS DR_path
        
        ,IF(AP_Request.AP_id is NULL,'รอดำเนินการ',AP_Request.AP_id) AS AP_id
        ,IF(AP_Request.AP_date is NULL,'รอดำเนินการ',AP_Request.AP_date) AS AP_date
        ,IF(AP_Request.AP_approve is NULL,'รอดำเนินการ',AP_Request.AP_approve) AS AP_approve
        ,IF(AP_Request.AP_note is NULL,'ไม่มีบันทึก',AP_Request.AP_note) AS AP_note

        ,Admin.A_id,Admin.A_pass,Admin.A_fname,Admin.A_lname
        ,Admin.A_position
        ,IF(Doc_Sent.DS_id is NULL,'ยังไม่ได้อัพเอกสารขอความอนุเคราะห์',Doc_Sent.DS_id) AS DS_id
        ,IF(Doc_Sent.DS_date is NULL,'ยังไม่ได้อัพเอกสารขอความอนุเคราะห์',Doc_Sent.DS_date) AS DS_date
        ,IF(Doc_Sent.DS_path is NULL,'ยังไม่ได้อัพเอกสารขอความอนุเคราะห์',Doc_Sent.DS_path) AS DS_path
       
        
        FROM Request LEFT JOIN Doc_Request ON Request.R_id=Doc_Request.R_id 
                 LEFT JOIN Student ON Request.S_id=Student.S_id
                 LEFT JOIN Colabor ON Request.C_id=Colabor.C_id
                 LEFT JOIN Data_namedoc ON Request.D_id=Data_namedoc.D_id
                 LEFT JOIN Organization ON Data_namedoc.O_id=Organization.O_id && Colabor.O_id=Organization.O_id 
                 LEFT JOIN AP_Request ON AP_Request.R_id=Request.R_id
                 LEFT JOIN Admin ON Admin.A_id=AP_Request.A_id
                 LEFT JOIN Doc_Sent ON Doc_Sent.AP_id=AP_Request.AP_id";

        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $R_id = $row["R_id"];
            $R_type = $row["R_type"];
            $R_position = $row["R_position"];
            $R_sdate = $row["R_sdate"];
            $R_fdate = $row["R_fdate"];
            $R_cost  = $row["R_cost "];
            $R_room  = $row["R_room"];
            $R_status  = $row["R_status"];
            $S_id  = $row["S_id"];
            $C_id  = $row["C_id"];
            $D_id = $row["D_id"];
            $S_pass = $row["S_pass"];
            $S_fname = $row["S_fname"];
            $S_lname = $row["S_lname"];
            $S_year = $row["S_year"];
            $C_fname  = $row["C_fname "];
            $C_lname  = $row["C_lname"];
            $C_email  = $row["C_email"];
            $C_tel  = $row["C_tel"];
            $O_id  = $row["O_id"];
            $O_name = $row["O_name"];
            $O_addr = $row["O_addr"];
            $D_fname = $row["D_fname"];
            $D_lname = $row["D_lname"];
            $D_position = $row["D_position"];
            $DR_id  = $row["DR_id "];
            $DR_date  = $row["DR_date"];
            $DR_path  = $row["DR_path"];
            $AP_id  = $row["AP_id"];
            $AP_date  = $row["AP_date"];
            $AP_approve = $row["AP_approve"];
            $AP_note = $row["AP_note"];
            $A_id = $row["A_id"];
            $A_pass = $row["A_pass"];
            $A_fname = $row["A_fname"];
            $A_lname  = $row["A_lname "];
            $A_position  = $row["A_position"];
            $DS_id  = $row["DS_id"];
            $DS_date  = $row["DS_date"];
            $DS_path  = $row["DS_path"];
            $teacherList[] = new teacher($R_id, $R_type, $R_position, $R_sdate, $R_fdate, $R_cost, $R_room, $R_status, $S_id, $C_id
            , $D_id, $S_pass, $S_fname, $S_lname, $S_year, $C_fname, $C_lname, $C_email, $C_tel, $O_id, $O_name, $O_addr, $D_fname
            , $D_lname, $D_position, $DR_id, $DR_date, $DR_path, $AP_id, $AP_date, $AP_approve, $AP_note, $A_id, $A_pass, $A_fname
            , $A_lname, $A_position, $DS_id, $DS_date, $DS_path);
        }
        require("connection_close.php");
        return $teacherList;
    }


    public function addAP_request($AP_date,$AP_approve,$AP_note,$A_id,$R_id)
    {
        
        require("connect_connection.php");
        $sql = "INSERT INTO `AP_Request`(`AP_id`,`AP_date`,`AP_approve`,`AP_note`,`A_id`,`R_id`) VALUES (NULL,'$AP_date','$AP_approve','$AP_note','$A_id','$R_id')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result row";
        
    }

    public static function updateRequest($R_id){
        require("connect_connection.php");
        $sql="UPDATE Request SET R_status='พิจารณาแล้ว' WHERE R_id='$R_id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Update success $result rows";
    }

    //student organization request AP_approve
    public static function search($key)
    {
        $search_List = [];
        require("connect_connection.php");
        $sql = "SELECT Request.R_id,Request.R_type,Request.R_position,Request.R_sdate
        ,Request.R_fdate,Request.R_cost,Request.R_room,Request.R_status,Request.S_id
        ,Request.C_id,Request.D_id,Student.S_pass,Student.S_fname,Student.S_lname,Student.S_year,
        Colabor.C_fname,Colabor.C_lname,Colabor.C_email,Colabor.C_tel,Organization.O_id,Organization.O_name
        ,Organization.O_addr,Data_namedoc.D_fname,Data_namedoc.D_lname,Data_namedoc.D_position
        ,IF(Doc_Request.DR_id is NULL,'ไม่มีเอกสารคำร้องขอ',Doc_Request.DR_id) AS DR_id
        ,IF(Doc_Request.DR_date is NULL,'ไม่มีเอกสารคำร้องขอ',Doc_Request.DR_date) AS DR_date
        ,IF(Doc_Request.DR_path is NULL,'ไม่มีเอกสารคำร้องขอ',Doc_Request.DR_path) AS DR_path
        
        ,IF(AP_Request.AP_id is NULL,'รอดำเนินการ',AP_Request.AP_id) AS AP_id
        ,IF(AP_Request.AP_date is NULL,'รอดำเนินการ',AP_Request.AP_date) AS AP_date
        ,IF(AP_Request.AP_approve is NULL,'รอดำเนินการ',AP_Request.AP_approve) AS AP_approve
        ,IF(AP_Request.AP_note is NULL,'ไม่มีบันทึก',AP_Request.AP_note) AS AP_note

        ,Admin.A_id,Admin.A_pass,Admin.A_fname,Admin.A_lname
        ,Admin.A_position
        ,IF(Doc_Sent.DS_id is NULL,'ยังไม่ได้อัพเอกสารขอความอนุเคราะห์',Doc_Sent.DS_id) AS DS_id
        ,IF(Doc_Sent.DS_date is NULL,'ยังไม่ได้อัพเอกสารขอความอนุเคราะห์',Doc_Sent.DS_date) AS DS_date
        ,IF(Doc_Sent.DS_path is NULL,'ยังไม่ได้อัพเอกสารขอความอนุเคราะห์',Doc_Sent.DS_path) AS DS_path
       
        
        FROM Request LEFT JOIN Doc_Request ON Request.R_id=Doc_Request.R_id 
                 LEFT JOIN Student ON Request.S_id=Student.S_id
                 LEFT JOIN Colabor ON Request.C_id=Colabor.C_id
                 LEFT JOIN Data_namedoc ON Request.D_id=Data_namedoc.D_id
                 LEFT JOIN Organization ON Data_namedoc.O_id=Organization.O_id && Colabor.O_id=Organization.O_id 
                 LEFT JOIN AP_Request ON AP_Request.R_id=Request.R_id
                 LEFT JOIN Admin ON Admin.A_id=AP_Request.A_id
                 LEFT JOIN Doc_Sent ON Doc_Sent.AP_id=AP_Request.AP_id

        where (Student.S_id like '%$key%' or Student.S_fname like '%$key%' or Student.S_lname like '%$key%' or Student.S_year like '%$key%'
        or Organization.O_name like '%$key%' or Request.R_type like '%$key%' or Request.R_status like '%$key%' or AP_Request.AP_approve like '%$key%')";

        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            echo"เข้าโมเดล1";
            $R_id = $row["R_id"];
            $R_type = $row["R_type"];
            $R_position = $row["R_position"];
            $R_sdate = $row["R_sdate"];
            $R_fdate = $row["R_fdate"];
            $R_cost  = $row["R_cost "];
            $R_room  = $row["R_room"];
            $R_status  = $row["R_status"];
            $S_id  = $row["S_id"];
            $C_id  = $row["C_id"];
            $D_id = $row["D_id"];
            $S_pass = $row["S_pass"];
            $S_fname = $row["S_fname"];
            $S_lname = $row["S_lname"];
            $S_year = $row["S_year"];
            $C_fname  = $row["C_fname "];
            $C_lname  = $row["C_lname"];
            $C_email  = $row["C_email"];
            $C_tel  = $row["C_tel"];
            $O_id  = $row["O_id"];
            $O_name = $row["O_name"];
            $O_addr = $row["O_addr"];
            $D_fname = $row["D_fname"];
            $D_lname = $row["D_lname"];
            $D_position = $row["D_position"];
            $DR_id  = $row["DR_id "];
            $DR_date  = $row["DR_date"];
            $DR_path  = $row["DR_path"];
            $AP_id  = $row["AP_id"];
            $AP_date  = $row["AP_date"];
            $AP_approve = $row["AP_approve"];
            $AP_note = $row["AP_note"];
            $A_id = $row["A_id"];
            $A_pass = $row["A_pass"];
            $A_fname = $row["A_fname"];
            $A_lname  = $row["A_lname "];
            $A_position  = $row["A_position"];
            $DS_id  = $row["DS_id"];
            $DS_date  = $row["DS_date"];
            $DS_path  = $row["DS_path"];
            echo"เข้าโมเดล2";
            $search_List[] = new teacher($R_id, $R_type, $R_position, $R_sdate, $R_fdate, $R_cost, $R_room, $R_status, $S_id, $C_id
            , $D_id, $S_pass, $S_fname, $S_lname, $S_year, $C_fname, $C_lname, $C_email, $C_tel, $O_id, $O_name, $O_addr, $D_fname
            , $D_lname, $D_position, $DR_id, $DR_date, $DR_path, $AP_id, $AP_date, $AP_approve, $AP_note, $A_id, $A_pass, $A_fname
            , $A_lname, $A_position, $DS_id, $DS_date, $DS_path);
        }
        require("connection_close.php");
        echo"เข้าโมเดล3";


        return $search_List;
    }

}

