<?php

namespace App;

class jsonMenuOutPut implements MenuOutPut{
    public function output($products)
    {
        return $menu=json_decode($products);
    }
}