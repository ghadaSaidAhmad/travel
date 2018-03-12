<?php



class Country 
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
    public function read()
    {
        $query = $this->db->prepare("SELECT * FROM country");
        $query->execute();
        $data = array();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }

 
}

?>