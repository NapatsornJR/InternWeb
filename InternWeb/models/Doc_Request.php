<?php

class Doc_Request

{
    public $DR_id,$DR_date,$DR_path,$R_id;

    public function __construct($DR_id,$DR_date,$DR_path,$R_id)

    {
        $this->DR_id = $DR_id;
        $this->DR_date = $DR_date;
        $this->DR_path = $DR_path;
        $this->R_id = $R_id;
    }


    public static function getAll()

    {
        $Doc_RequestList = [];
        require("connect_connection.php");
        $sql = "SELECT * FROM Doc_Request";
        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {

            $DR_id = $my_row['DR_id'];
            $DR_date = $my_row['DR_date'];
            $DR_path = $my_row['DR_path'];
            $R_id = $my_row['R_id'];
            $Doc_RequestList[] = new Doc_Request($DR_id,$DR_date,$DR_path,$R_id);


        }

        require("connection_close.php");
        return $Doc_Request;
    }

    public static function Add($DR_path,$R_id,$date1)

    { 
       require("connect_connection.php");
       $sql = "INSERT INTO `Doc_Request` (`DR_id`, `DR_date`,`R_id` , `DR_path`) VALUES (NULL, '$date1', '$R_id', '$DR_path')";
       $result = $conn->query($sql);
       require("connection_close.php");
       return  ;
    }

}

?>