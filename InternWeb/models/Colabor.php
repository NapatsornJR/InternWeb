<?php

class Colabor

{

    public $C_id,$C_fname,$C_lname,$C_email,$C_tel,$O_id;


    public function __construct($C_id,$C_fname,$C_lname,$C_email,$C_tel,$O_id)

    {

        $this->C_id = $C_id;

        $this->C_fname = $C_fname;

        $this->C_lname = $C_lname;

        $this->C_email = $C_email;

        $this->C_tel = $C_tel;

        $this->O_id = $O_id;



    }


    public static function getAll()

    {
    

        $ColaborList = [];

        require("connect_connection.php");

        $sql = "SELECT * FROM Colabor";

        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {

            $C_id = $my_row['C_id'];

            $C_fname = $my_row['C_fname'];

            $C_lname = $my_row['C_lname'];

            $C_email = $my_row['C_email'];

            $C_tel = $my_row['C_tel'];

            $O_id= $my_row['O_id'];



            $ColaborList[] = new Colabor($C_id,$C_fname,$C_lname,$C_email,$C_tel,$O_id);

        }

        require("connection_close.php");

        return $ColaborList;
    }
    public static function get($C_fname,$C_lname,$C_email,$C_tel, $O_id)
    {
        
        require("connect_connection.php");
        $sql="SELECT * FROM Colabor WHERE C_fname = '$C_fname' AND  C_lname = '$C_lname' AND  C_tel = '$C_tel'   AND  O_id = '$O_id'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        
        
        $C_id = $my_row['C_id'];

        $C_fname = $my_row['C_fname'];

        $C_lname = $my_row['C_lname'];

        $C_email = $my_row['C_email'];

        $C_tel = $my_row['C_tel'];

        $O_id= $my_row['O_id'];
        
        require("connection_close.php");
        return new Colabor($C_id,$C_fname,$C_lname,$C_email,$C_tel,$O_id);
    }
    
    public static function Add($C_fname,$C_lname,$C_email,$C_tel,$O_id)

    { 

       require("connect_connection.php");

      

       $sql = "INSERT INTO `Colabor` (`C_id`,`C_fname`, `C_lname`, `C_email`, `C_tel`, `O_id`) 
       VALUES (NULL,'$C_fname', '$C_lname', '$C_email', '$C_tel', '$O_id')";

       $result = $conn->query($sql);

       require("connection_close.php");

       return  ;

    }

}

?>