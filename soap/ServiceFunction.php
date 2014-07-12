<?php

class ServiceFunctions {

    //return name like this format J. Wojnik
    public function getDisplayName($first_name, $last_name) {
        $name = '';
        $name .= strtoupper(substr($first_name, 0, 1));
        $name .= ' ' . ucfirst($last_name);
        return $name;
    }
    
    //reutunr count of words in string
    public function countWords($paragraph){
        $words = preg_split('/[. ,!?;]+/', $paragraph);
        return count($words);
    }

}