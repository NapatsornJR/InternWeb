<?php

class studentRequest

{

    public $S_id, $R_id,
        $O_id, $O_name, $AP_date, $AP_approve, $R_status, $R_type, $S_fname, $S_lname,
        $R_position, $R_sdate, $R_fdate, $O_addr, $C_fname, $C_lname, $C_email, $C_tel,
        $D_fname, $D_lname, $D_position, $DR_path, $AP_note;


    public function __construct(

        $S_id,
        $R_id,
        $O_id,
        $O_name,
        $AP_date,
        $R_status,
        $R_type,
        $S_fname,
        $S_lname,
        $R_position,
        $R_sdate,
        $R_fdate,
        $O_addr,
        $C_fname,
        $C_lname,
        $C_email,
        $C_tel,
        $D_fname,
        $D_lname,
        $D_position,
        $DR_path,
        $AP_approve,
        $AP_note
    ) {


        $this->S_id = $S_id;
        $this->R_id = $R_id;
        $this->O_id = $O_id;
        $this->O_name = $O_name;
        $this->AP_date = $AP_date;
        $this->R_status = $R_status;
        $this->R_type = $R_type;
        $this->S_fname = $S_fname;
        $this->S_lname = $S_lname;
        $this->R_position = $R_position;
        $this->R_sdate = $R_sdate;
        $this->R_fdate = $R_fdate;
        $this->O_addr = $O_addr;
        $this->C_fname = $C_fname;
        $this->C_lname = $C_lname;
        $this->C_email = $C_email;
        $this->C_tel = $C_tel;
        $this->D_fname = $D_fname;
        $this->D_lname = $D_lname;
        $this->D_position = $D_position;
        $this->DR_path = $DR_path;
        $this->AP_approve = $AP_approve;
        $this->AP_note = $AP_note;
    }


    public static function getAll()

    {


        $studentRequestList = [];

        require("connect_connection.php");

        $sql = "SELECT Request.S_id,Request.R_id,Organization.O_id,Organization.O_name,AP_Request.AP_date,AP_Request.AP_approve,AP_Request.AP_note,Request.R_status,Request.R_type,
        Student.S_fname,Student.S_lname,  Request.R_position,Request.R_sdate,Request.R_fdate,Organization.O_addr,Colabor.C_fname,
        Colabor.C_lname,Colabor.C_email,Colabor.C_tel,
        Data_namedoc.D_fname,Data_namedoc.D_lname,
        Data_namedoc.D_position,
        Doc_Request.DR_path
        
        FROM Request LEFT JOIN AP_Request ON AP_Request.R_id = Request.R_id
        INNER JOIN Colabor ON Colabor.C_id = Request.C_id
        INNER JOIN Organization ON Colabor.O_id = Organization.O_id
        INNER JOIN Student ON Student.S_id =Request.S_id
        INNER JOIN Data_namedoc ON Data_namedoc.D_id = Request.D_id
        LEFT JOIN Doc_Request ON Doc_Request.R_id = Request.R_id
        
        
        ";

        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {


            $S_id = $my_row["S_id"];
            $R_id = $my_row["R_id"];
            $O_id = $my_row["O_id"];
            $O_name = $my_row["O_name"];
            $AP_date = $my_row["AP_date"];
            $R_status = $my_row["R_status"];
            $R_type = $my_row["R_type"];
            $S_fname = $my_row["S_fname"];
            $S_lname = $my_row["S_lname"];
            $R_position = $my_row["R_position"];
            $R_sdate = $my_row["R_sdate"];
            $R_fdate = $my_row["R_fdate"];
            $O_addr = $my_row["O_addr"];
            $C_fname = $my_row["C_fname"];
            $C_lname = $my_row["C_lname"];
            $C_email = $my_row["C_email"];
            $C_tel = $my_row["C_tel"];
            $D_fname = $my_row["D_fname"];
            $D_lname = $my_row["D_lname"];
            $D_position = $my_row["D_position"];
            $DR_path = $my_row["DR_path"];
            $AP_approve = $my_row["AP_approve"];
            $AP_note = $my_row["AP_note"];

            $studentRequestList[] = new studentRequest(
                $S_id,
                $R_id,
                $O_id,
                $O_name,
                $AP_date,
                $R_status,
                $R_type,
                $S_fname,
                $S_lname,
                $R_position,
                $R_sdate,
                $R_fdate,
                $O_addr,
                $C_fname,
                $C_lname,
                $C_email,
                $C_tel,
                $D_fname,
                $D_lname,
                $D_position,
                $DR_path,
                $AP_approve,
                $AP_note
            );
        }

        require("connection_close.php");

        return $studentRequestList;
    }

    public static function get($id)
    {

        require("connect_connection.php");
        $sql = "SELECT Request.S_id,Request.R_id,Organization.O_id,Organization.O_name,AP_Request.AP_date,AP_Request.AP_approve,AP_Request.AP_note,Request.R_status,Request.R_type,
        Student.S_fname,Student.S_lname,  Request.R_position,Request.R_sdate,Request.R_fdate,Organization.O_addr,Colabor.C_fname,
        Colabor.C_lname,Colabor.C_email,Colabor.C_tel,
        Data_namedoc.D_fname,Data_namedoc.D_lname,
        Data_namedoc.D_position,
        Doc_Request.DR_path
        
        FROM Request LEFT JOIN AP_Request ON AP_Request.R_id = Request.R_id
        INNER JOIN Colabor ON Colabor.C_id = Request.C_id
        INNER JOIN Organization ON Colabor.O_id = Organization.O_id
        INNER JOIN Student ON Student.S_id =Request.S_id
        INNER JOIN Data_namedoc ON Data_namedoc.D_id = Request.D_id
        LEFT JOIN Doc_Request ON Doc_Request.R_id = Request.R_id
        WHERE Request.R_id='$id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();


        $S_id = $my_row["S_id"];
        $R_id = $my_row["R_id"];
        $O_id = $my_row["O_id"];
        $O_name = $my_row["O_name"];
        $AP_date = $my_row["AP_date"];
        $R_status = $my_row["R_status"];
        $R_type = $my_row["R_type"];
        $S_fname = $my_row["S_fname"];
        $S_lname = $my_row["S_lname"];
        $R_position = $my_row["R_position"];
        $R_sdate = $my_row["R_sdate"];
        $R_fdate = $my_row["R_fdate"];
        $O_addr = $my_row["O_addr"];
        $C_fname = $my_row["C_fname"];
        $C_lname = $my_row["C_lname"];
        $C_email = $my_row["C_email"];
        $C_tel = $my_row["C_tel"];
        $D_fname = $my_row["D_fname"];
        $D_lname = $my_row["D_lname"];
        $D_position = $my_row["D_position"];
        $DR_path = $my_row["DR_path"];
        $AP_approve = $my_row["AP_approve"];
        $AP_note = $my_row["AP_note"];


        require("connection_close.php");
        return new studentRequest(
            $S_id,
            $R_id,
            $O_id,
            $O_name,
            $AP_date,
            $R_status,
            $R_type,
            $S_fname,
            $S_lname,
            $R_position,
            $R_sdate,
            $R_fdate,
            $O_addr,
            $C_fname,
            $C_lname,
            $C_email,
            $C_tel,
            $D_fname,
            $D_lname,
            $D_position,
            $DR_path,
            $AP_approve,
            $AP_note
        );
    }
    public static function get2($R_type, $R_position, $R_cost, $R_room, $R_sdate, $R_fdate, $S_id, $C_id, $D_id)
    {

        require("connect_connection.php");
        $sql = "SELECT Request.S_id,Request.R_id,Organization.O_id,Organization.O_name,AP_Request.AP_date,AP_Request.AP_approve,AP_Request.AP_note,Request.R_status,Request.R_type,
        Student.S_fname,Student.S_lname,  Request.R_position,Request.R_sdate,Request.R_fdate,Organization.O_addr,Colabor.C_fname,
        Colabor.C_lname,Colabor.C_email,Colabor.C_tel,
        Data_namedoc.D_fname,Data_namedoc.D_lname,
        Data_namedoc.D_position,
        Doc_Request.DR_path
        
        FROM Request LEFT JOIN AP_Request ON AP_Request.R_id = Request.R_id
        INNER JOIN Colabor ON Colabor.C_id = Request.C_id
        INNER JOIN Organization ON Colabor.O_id = Organization.O_id
        INNER JOIN Student ON Student.S_id =Request.S_id
        INNER JOIN Data_namedoc ON Data_namedoc.D_id = Request.D_id
        LEFT JOIN Doc_Request ON Doc_Request.R_id = Request.R_id
        WHERE Request.R_type='$R_type' AND  Request.R_position='$R_position'  AND  Request.R_cost='$R_cost'  AND  Request.R_room='$R_room'   AND  Request.R_sdate='$R_sdate'  AND  Request.R_fdate='$R_fdate'  AND  Request.S_id='$S_id'  AND  Request.C_id='$C_id' AND  Request.D_id='$D_id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();


        $S_id = $my_row["S_id"];
        $R_id = $my_row["R_id"];
        $O_id = $my_row["O_id"];
        $O_name = $my_row["O_name"];
        $AP_date = $my_row["AP_date"];
        $R_status = $my_row["R_status"];
        $R_type = $my_row["R_type"];
        $S_fname = $my_row["S_fname"];
        $S_lname = $my_row["S_lname"];
        $R_position = $my_row["R_position"];
        $R_sdate = $my_row["R_sdate"];
        $R_fdate = $my_row["R_fdate"];
        $O_addr = $my_row["O_addr"];
        $C_fname = $my_row["C_fname"];
        $C_lname = $my_row["C_lname"];
        $C_email = $my_row["C_email"];
        $C_tel = $my_row["C_tel"];
        $D_fname = $my_row["D_fname"];
        $D_lname = $my_row["D_lname"];
        $D_position = $my_row["D_position"];
        $DR_path = $my_row["DR_path"];
        $AP_approve = $my_row["AP_approve"];
        $AP_note = $my_row["AP_note"];

        require("connection_close.php");
        return new studentRequest(
            $S_id,
            $R_id,
            $O_id,
            $O_name,
            $AP_date,
            $R_status,
            $R_type,
            $S_fname,
            $S_lname,
            $R_position,
            $R_sdate,
            $R_fdate,
            $O_addr,
            $C_fname,
            $C_lname,
            $C_email,
            $C_tel,
            $D_fname,
            $D_lname,
            $D_position,
            $DR_path,
            $AP_approve,
            $AP_note
        );
    }
    public static function Add($R_type, $R_position, $R_cost, $R_room, $R_sdate, $R_fdate, $S_id, $C_id, $D_id)

    {

        require("connect_connection.php");



        $sql = "INSERT INTO `Request` (`R_id`, `R_type`, `R_position`, `R_cost`, `R_room`, `R_sdate`, `R_fdate`, `S_id`, `C_id`, `D_id`, `R_status`)
        VALUES (NULL,'$R_type', '$R_position', '$R_cost', '$R_room', '$R_sdate', '$R_fdate', '$S_id', '$C_id', '$D_id','รอพิจารณา')";

        $result = $conn->query($sql);

        require("connection_close.php");

        return;
    }
}
