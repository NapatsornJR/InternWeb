<?php

class detailrequest1

{

    public $R_type,$S_fname,$S_lname,$R_position,$R_sdate,$R_fdate,$O_name,$O_addr,$C_fname,$C_lname,$C_email,$C_tel,$D_fname,$D_lname,$D_position,$R_status,$DR_path;



    public function __construct($R_type,$S_fname,$S_lname,$R_position,$R_sdate,$R_fdate,$O_name,$O_addr,$C_fname,$C_lname,$C_email,$C_tel,$D_fname,$D_lname,$D_position,$R_status,$DR_path)

    {

  
        $this->R_type = $R_type;
        $this->S_fname= $S_fname;
        $this->S_lname = $S_lname;
        $this->R_position = $R_position;
        $this->R_sdate = $R_sdate;
        $this->R_fdate = $R_fdate;
        $this->O_name = $O_name;
        $this->O_addr = $O_addr;
        $this->C_fname = $C_fname;
        $this->C_lname = $C_lname;
        $this->C_email = $C_email;
        $this->C_tel = $C_tel;
        $this->D_fname = $D_fname;
        $this->D_lname = $D_lname;
        $this->D_position = $D_position;
        $this->R_status = $R_status;
        $this->DR_path = $DR_path;
    }



     

    public static function getAll()

    {
    

        $detailrequestList = [];

        require("connect_connection.php");

        $sql = "SELECT Request.R_type,Student.S_fname,Student.S_lname,
        Request.R_position,Request.R_sdate,Request.R_fdate,
        Organization.O_name,Organization.O_addr,Colabor.C_fname,
        Colabor.C_lname,Colabor.C_email,Colabor.C_tel,
        Data_namedoc.D_fname,Data_namedoc.D_lname,
        Data_namedoc.D_position,Request.R_status,
        Doc_Request.DR_path
        
        FROM Request INNER JOIN Student ON Request.S_id = Student.S_id 
        INNER JOIN Colabor ON Colabor.C_id=Request.C_id
        INNER JOIN Organization ON Colabor.O_id =Organization.O_id
        INNER JOIN Data_namedoc ON Request.D_id =Data_namedoc.D_id
        LEFT JOIN Doc_Request ON Doc_Request.R_id = Request.R_id";

        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {

            $R_type= $my_row["R_type"];
            $S_fname = $my_row["S_fname"];
            $S_lname= $my_row["S_lname"];
            $R_position = $my_row["R_position"];
            $R_sdate= $my_row["R_sdate"];
            $R_fdate = $my_row["R_fdate"];
            $O_name= $my_row["O_name"];
            $O_addr = $my_row["O_addr"];
            $C_fname= $my_row["C_fname"];
            $C_lname = $my_row["C_lname"];
            $C_email= $my_row["C_email"];
            $C_tel = $my_row["C_tel"];
            $D_fname= $my_row["D_fname"];
            $D_lname = $my_row["D_lname"];
            $D_position = $my_row["D_position"];
            $R_status = $my_row["R_status"];
            $DR_path = $my_row["DR_path"];
           

            $detailrequestList[] = new detailrequest1($R_type,$S_fname,$S_lname,$R_position,$R_sdate,$R_fdate,$O_name,$O_addr,$C_fname,$C_lname,$C_email,$C_tel,$D_fname,$D_lname,$D_position,$R_status,$DR_path);

        }

        require("connection_close.php");

        return $detailrequestList;

    }

}
