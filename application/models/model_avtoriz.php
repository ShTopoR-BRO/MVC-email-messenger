<?php

class Model_Avtoriz extends Model
{
    public function avtoriz($name, $pass)
    {
        $conn=$this->db_connect();
        $sql="INSERT avtoriz (name,pass) VALUES (:name, :pass);";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":name", $name);
        $stmt->bindValue(":pass", $pass);
        $stmt->execute();
    }
    public function auth($name, $pass)
    {
        $conn=$this->db_connect();
        $sql="INSERT avtoriz (name,pass) VALUES (:name, :pass);";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":name", $name);
        $stmt->bindValue(":pass", $pass);
        $stmt->execute();
        if ($stmt->rowCount()!=0){
            return true;
        }
        
    else{
        return false;
    }

    }
    public function success($name, $pass)
    {
        $conn=$this->db_connect();
        $sql="SELECT * FROM avtoriz WHERE name =:name AND pass =:pass;";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":name", $name);
        $stmt->bindValue(":pass", $pass);
        $stmt->execute();
        if ($stmt->rowCount()!=0){
            return true;
        }
        
    else{
        return false;
    }

    }
    public function create_case($name, $date, $your_case) // для добавления дел в ежедневник(не работает)
    {   
        $conn = $this->db_connect();
        $sql = "INSERT INTO timetable (name, date, your_case) VALUES (:name, :date, :your_case);";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":name", $name);
        $stmt->bindValue(":date", $date);
        $stmt->bindValue(":your_case", $your_case);
        $stmt->execute();
        if ($stmt->rowCount()!=0){
            return true;
        }
        
    else{
        return false;
    }   
    }

    public function show_cases($name)
    {
        $conn = $this->db_connect();
        $sql = "SELECT * FROM timetable where name=:name;";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":name", $name); 
        $stmt->execute();
        return $stmt;   
    }
}
?>