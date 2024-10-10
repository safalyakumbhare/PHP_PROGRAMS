<?php


    $name = array("Ram","Mahesh","Kalesh","Jayesh");
    $city = array("Nagpur","Mumbai","Pune","Nashik","Amravati");
    // array_pop($name);  Removes the Last Element in an Array
    // array_push($name,"Safalya","Prajakta");  Adds the New Values in an Array
    $join = array_merge($name,$city);

    print_r( $name);
    print_r($join);

?>