<?php


class AgeGroup 
{
    protected $db;
      public function __construct($db)
    {
        $this->db = $db;
    }
    


     /*
     * Read all records
     *
     * @return $mixed
     * */
    public function Read()
    {
        $query = $this->db->prepare("SELECT * FROM `age_group");
        $query->execute();
        $data = array();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }

 
}

?>