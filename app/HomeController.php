<?php
require  '../config/db.php';
require '../classes/User.php';
require '../classes/Country.php';
require '../classes/TravelerType.php';
require '../classes/TravelWay.php';
require '../classes/AgeGroup.php';

class HomeController
{
     protected $db;

    function __construct()
    {
       
        $this->db = DB();
    }
    
    public function Create($name,$email,$phone,$country_id,$age_group_id,$travel_way_id,$country_number)
    {
       $user=new User($this->db);
       $result=$user->Create($name,$email,$phone,$country_id,$age_group_id,$travel_way_id,$country_number);
       return $result;
     
    }

    public function getCounteries()
    {
        $object = new Country($this->db);

        // Design initial table header
        $data = ' <select  name="country_id" id="country_id" class="form-control input-sm floatlabel" >
                        <option value="229" >+229</option>';


        $countries = $object->Read();

        if (count($countries) > 0) {
            $number = 1;
            foreach ($countries as $country) {
                $data .= '<option value='.$country['id'].'>+'.$country['dial_code'].'</option>';
                
            }
        } else {
            // records not found
            $data .= '<option> no countries found</option>';
        }

        $data .= '</select>';

        echo $data;
    }

    public function getTravelerType()
    {
        $object = new TravelerType($this->db);

        // Design initial table header
        $data = ' <select  name="traveler_type_id" id="traveler_type_id" class="form-control input-sm floatlabel" >
                        <option value="229" >What Type Of Traveler?</option>';


        $types = $object->Read();

        if (count($types) > 0) {
            $number = 1;
            foreach ($types as $type) {
                $data .= '<option value='.$type['id'].'>'.$type['title'].'</option>';
                
            }
        } else {
            // records not found
            $data .= '<option> no data found</option>';
        }

        $data .= '</select>';

        echo $data;
    }

    public function getTravelWay()
    {
        $object = new TravelWay($this->db);

        // Design initial table header
        $data = ' <select  name="traveler_type_id" id="traveler_type_id" class="form-control input-sm floatlabel" >
                        <option value="229" >HOW often Do You Travel?</option>';


        $types = $object->Read();

        if (count($types) > 0) {
            $number = 1;
            foreach ($types as $type) {
                $data .= '<option value='.$type['id'].'>'.$type['title'].'</option>';
                
            }
        } else {
            // records not found
            $data .= '<option> no data found</option>';
        }

        $data .= '</select>';

        echo $data;
    }


    public function getAgeGroup()
    {
        $object = new AgeGroup($this->db);

        // Design initial table header
        $data = ' <select  name="traveler_type_id" id="traveler_type_id" class="form-control input-sm floatlabel" >
                        <option value="229" >What Age Group Do You Fall Under?</option>';


        $types = $object->Read();

        if (count($types) > 0) {
            $number = 1;
            foreach ($types as $type) {
                $data .= '<option value='.$type['id'].'>'.$type['title'].'</option>';
                
            }
        } else {
            // records not found
            $data .= '<option> no data found</option>';
        }

        $data .= '</select>';

        echo $data;
    }
    


}