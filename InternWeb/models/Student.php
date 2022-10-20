<?php

class Student

{

    public $S_id,$S_pass,$S_fname,$S_lname,$S_year;


    public function __construct($S_id,$S_pass,$S_fname,$S_lname,$S_year)

    {

        $this->S_id = $S_id;

        $this->S_pass = $S_pass;

        $this->S_fname = $S_fname;

        $this->S_lname = $S_lname;

        $this->S_year = $S_year;

    }


    public static function getAll()

    {
    

        $StudentList = [];

        require("connect_connection.php");

        $sql = "SELECT * FROM Student";

        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {

            $S_id= $my_row['S_id'];

            $S_pass = $my_row['S_pass'];

            $S_fname = $my_row['S_fname'];

            $S_lname = $my_row['S_lname'];

            $S_year = $my_row['S_year'];

            $StudentList[] = new Student($S_id,$S_pass,$S_fname,$S_lname,$S_year);

        }

        require("connection_close.php");

        return $StudentList;
    }
    public static function get($fname,$lname)
    {
        
        require("connect_connection.php");
        $sql="SELECT * FROM Student WHERE S_fname = '$fname' AND S_lname = '$lname' ";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        
        
        $S_id= $my_row['S_id'];

        $S_pass = $my_row['S_pass'];

        $S_fname = $my_row['S_fname'];

        $S_lname = $my_row['S_lname'];

        $S_year = $my_row['S_year'];
        
        require("connection_close.php");
        return new Student($S_id,$S_pass,$S_fname,$S_lname,$S_year);
    }
    public static function get2($id)
    {
        
        require("connect_connection.php");
        $sql="SELECT * FROM Student WHERE S_id = '$id'  ";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        
        
        $S_id= $my_row['S_id'];

        $S_pass = $my_row['S_pass'];

        $S_fname = $my_row['S_fname'];

        $S_lname = $my_row['S_lname'];

        $S_year = $my_row['S_year'];
        
        require("connection_close.php");
        return new Student($S_id,$S_pass,$S_fname,$S_lname,$S_year);
    }



    public static function Add($S_fname,$S_lname)

    { 

       require("connect_connection.php");

      

       $sql = "INSERT INTO `Student` (`S_fname`, `S_lname`) VALUES ('$S_fname', '$S_lname')";

       $result = $conn->query($sql);

       require("connection_close.php");

       return  ;

    }
    

}

?>