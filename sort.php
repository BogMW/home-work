<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 31.10.2016
 * Time: 17:21
 */
$text = $_POST['size'];
$map = array("XXS"=>"1", "XS"=>"2", "S"=>"3", "M"=>"4", "L"=>"5", "XL"=>"6", "XXL"=>"7",);

$size = explode (" ", $text);

foreach ($size as $key=>$value) {
   if ($map[$value]) {
       $size[$key] = $map[$value];
   };
}

asort($size);

foreach ($map as $key=>$value) {
    foreach ($size as $key_s=>$value_s) {
        if ($value == $value_s) {
            $size[$key_s] = $key;
        }
    }
}

foreach ($size as $key=>$value) {
    echo "$value ";
}