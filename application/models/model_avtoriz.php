<?php

class Model_Avtoriz extends Model
{


  private function hash_pass($pass)
{
    $hash = password_hash($pass, PASSWORD_DEFAULT); // создает соль и кодирует пароль
    return $hash; // выводит результат функции
}

private function verif_pass($pass, $hash){
    $verifypass = password_verify($pass, $hash); // пррверяет правильность ввода пароля
    return $verifypass; // выводит результат функции
    }


    public function avtoriz($name, $pass)
    {
        $hash = $this->hash_pass($pass);
       // $hash_pass = hased_password($pass) // созд хеш-пароля 
        $conn=$this->db_connect();
        $sql="INSERT avtoriz (name,pass) VALUES (:name, :pass);";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":name", $name);
        $stmt->bindValue(":pass", $hash);
        $stmt->execute();
    }
    // public function auth($name, $pass)
    // {

    //     $conn=$this->db_connect();
    //     $sql="INSERT avtoriz (name,pass) VALUES (:name, :pass);";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bindValue(":name", $name);
    //     $stmt->bindValue(":pass", $pass);
    //     $stmt->execute();
    //     if ($stmt->rowCount()!=0){
    //         return true;
    //     }
        
    // else{
    //     return false;
    // }

    //}
    public function success($name, $pass)
    {
        $conn=$this->db_connect();
        $sql="SELECT * FROM avtoriz WHERE name =:name";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":name", $name);
        $stmt->execute();
        $db_pass = "";
        foreach ($stmt as $row) 
  { 
        $db_pass = $row["pass"];
  }
        $verif = $this->verif_pass($pass, $db_pass);
        // if (verify_password($stmt["pass"],$pass)==true){
        //     return true
        // }
        return $verif;

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