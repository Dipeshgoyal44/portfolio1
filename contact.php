<?php
     
    $first_name = $_POST['name']; // required
    $test = $_POST['name1']; 
    $email_from = $_POST['txtEmail']; // required
    $telephone = $_POST['txtPhone']; // not required
    $comments = $_POST['txtMsg']; // required
    echo "$first_name";
    echo "$email_from";
    echo "$telephone";
    echo "$test";

  ?>