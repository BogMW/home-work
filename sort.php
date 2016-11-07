<?php

class sizeSorting {

    public $map = array("XXS"=>"1", "XS"=>"2", "S"=>"3", "M"=>"4", "L"=>"5", "XL"=>"6", "XXL"=>"7");
    public $text;
    public $size;

    public function sortArr() {
        $size = explode (",", $this->text);
        foreach ($size as $key=>$value) {
            $tempArr = explode(" ",$value);
            if(count($tempArr) > 1) {
                $tempVal = explode("/",$tempArr[1]);
                if (count($tempVal) > 1) {
                    $tempArr[1] = $tempVal[0]/$tempVal[1];
                }
                $newVal = ($tempArr[0] + $tempArr[1]);
                $size[$key] = $newVal;
            }
            if ($this->map[$value]) {
                $size[$key] = $this->map[$value];
            };
        }
        asort($size);
        foreach ($this->map as $key=>$value) {
            foreach ($size as $key_s=>$value_s) {
                if ($value == $value_s) {
                    $size[$key_s] = $key;
                }
            }
        }
        $this->size = $size;
    }

    public function printArr() {
        foreach ($this->size as $key=>$value) {
            echo "$value ";
        }
    }
}

$my_class = new sizeSorting();
$my_class->text = $_POST['size'];
$my_class->sortArr();
$my_class->printArr();







