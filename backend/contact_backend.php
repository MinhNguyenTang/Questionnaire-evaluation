<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/Questionnaire-evaluation/manager/manager.php');

$msg = new msg();
$manager = new manager();
$manager->get_message($msg);

 ?>
