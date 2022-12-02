<?php

namespace App;

class Menu{
    public function view($products,MenuOutPut $output){
        return $output->output($products);

        }
        
    }
