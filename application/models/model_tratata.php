<?php

class Model_Tratata extends Model
{
    public function get_all_users()
    {
        $conn=$this->db_connect();
        $sql="SELECT * FROM tablichka;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
    public function create_useres($name)
    {
        $conn=$this->db_connect();
        $sql="INSERT INTO tablichka VALUES (:name);";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":name", $name);
        $stmt->execute();
    }
}