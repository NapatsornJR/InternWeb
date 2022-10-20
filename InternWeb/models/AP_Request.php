
<?php

class AP_Request

{

    public $AP_id,$AP_date,$AP_approve,$AP_note,$A_id,$R_id;



    public function __construct($AP_id,$AP_date,$AP_approve,$AP_note,$A_id,$R_id)

    {

        $this->AP_id = $AP_id;
        $this->AP_date = $AP_date;
        $this->AP_approve = $AP_approve;
        $this->AP_note = $AP_note;
        $this->A_id = $A_id;
        $this->R_id = $R_id;


    }



    public static function getAll()

    {
    

        $AP_RequestList = [];

        require("connect_connection.php");

        $sql = "SELECT * FROM AP_Request";

        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {

            $p_id= $my_row['p_id'];

            $AP_id = $my_row['AP_id'];
            $AP_date = $my_row['AP_date'];
            $AP_approve = $my_row['AP_approve'];
            $AP_note = $my_row['AP_note'];
            $A_id = $my_row['A_id'];
            $R_id = $my_row['R_id'];

            $AP_RequestList[] = new AP_Request($AP_id,$AP_date,$AP_approve,$AP_note,$A_id,$R_id);

        }

        require("connection_close.php");

        return $AP_RequestList;

    }

    // public static function Add($AP_id,$AP_date,$AP_approve,$AP_note,$A_id)

    // { 

    //    require("connect_connection.php");

      

    //    $sql = "INSERT INTO `AP_RequesttList` (`AP_id`, `AP_date`, `AP_approve`, `AP_note`, `A_id`, `เงื่อนไข`) VALUES ('$id_order', '$date', '$condition', '$id_cus', '$Staff_id', '$เงื่อนไข')";

    //    $result = $conn->query($sql);

    //    require("connection_close.php");

    //    return  ;

    // }

}
