<?php

require '../app/HomeController.php';

$object = new HomeController();
if (isset($_POST['email']))
{
  $object->checkEmail(($_POST['email']));
}
       

