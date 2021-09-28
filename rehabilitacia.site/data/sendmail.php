<?php
session_start();
$qa_1_2 = filter_input(INPUT_POST, "from_name");
$email = filter_input(INPUT_POST, "email");
$message =filter_input(INPUT_POST, "text1");
$my_ilian = filter_input_array(INPUT_POST);
$otnosno = "съобщение от контактната форма";
$fromwho = "From: $email";


print_r($my_ilian);

mail("ilian0791@abv.bg", $otnosno, $message, $fromwho);
