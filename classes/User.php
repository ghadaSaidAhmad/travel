<?php

class User
{
  protected $db;
      public function __construct($db)
    {
        $this->db = $db;
    }
    
   

    /*
     * Add new Record
     * @param $first_name
     * @param $last_name
     * @param $email
     * @return $mixed
     * */
    public function create($name,$email,$phone,$country_id,$age_group_id,$travel_way_id,$country_number)
    {
        $query = $this->db->prepare("INSERT INTO user(name, email,phone,country_id,age_group_id,travel_way_id,country_number) VALUES 
                                                     (:name,:email,:phone,:country_id,:age_group_id,:travel_way_id,:country_number)");
        $query->bindParam("name", $name, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("phone", $phone, PDO::PARAM_STR);
        $query->bindParam("country_id", $country_id, PDO::PARAM_STR);
        $query->bindParam("age_group_id", $age_group_id, PDO::PARAM_STR);
        $query->bindParam("travel_way_id", $travel_way_id, PDO::PARAM_STR);
        $query->bindParam("country_number", $country_number, PDO::PARAM_STR);
       $query= $query->execute();
       $result=$query?true:false;
      
       
        return $result;
    }
    public function checkEmail($email)
    {
        
    }


 
}

?>