<?php

require '../app/HomeController.php';

//echo $_POST['name'];

if (isset($_POST['name'])  && isset($_POST['email']) 
&&isset($_POST['phone'])  ||isset($_POST['country_id'])  
||isset($_POST['age_group_id'])  ||isset($_POST['travel_way_id'])
 ||isset($_POST['country_number'])) {


    $name = isset($_POST['name'])?$_POST['name']:'';
    $email = isset($_POST['email'])?$_POST['email']:'';
    $phone = isset($_POST['phone'])?$_POST['phone']:'';
    $country_id = isset($_POST['country_id'])?$_POST['country_id']:'';
    $age_group_id =isset($_POST['age_group_id'])? $_POST['age_group_id']:'';
    $travel_way_id =isset($_POST['travel_way_id'])? $_POST['travel_way_id']:'';
    $country_number = isset($_POST['country_number'])?$_POST['country_number']:'';

    //$object = new User();

    //$object->Create($name,$email,$phone,$country_id,$age_group_id,$travel_way_id,$country_number);
    $object = new HomeController();
    $result=$object->create($name,$email,$phone,$country_id,$age_group_id,$travel_way_id,$country_number);
    echo $result;
}

?>