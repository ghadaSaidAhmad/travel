<?php
/**
 * Created by PhpStorm.
 * User: Ghada
 * Date: 3/11/2018
 * Time: 4:28 PM
 */

include_once("rundml.php");
class User
{
    var $id;
    var $name;
    var $email;
    var $countery;
    var $gender;
    var $username;
    var $password;
    var $msg = "";

    //add new user
    function add($name,$email,$countery,$gender,$username,$password)
    {
        $query="insert into user(name,email,countery,gender,username,password)
	            values ('$name','$email','$countery',
	            '$gender','$username','$password')";
        $result=dml($query);
        if($result)
        {
            $msg=" added successfuley";
        }else
        {
            $msg=" added failed";
        }
        return $msg;

    }