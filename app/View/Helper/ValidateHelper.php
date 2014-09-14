<?php

class ValidateHelper extends AppHelper{
    function getExtention($data){
        return substr(strrchr($data,'.'),1);
    }
    
    function makeDateFrench($data){        
        $date = explode("-", $data);
        
        return $date[2]."-".$date[1]."-".$date[0];
    }
    
    function makeDateUS($data){
        $date = explode("-", $data);
        
        return $date[2]."-".$date[0]."-".$date[1];
    }
    
    function makePrice($price){
        $end = explode(".",$price);
        
        if(strlen($end[0]) >= 4){
            
            $tab = str_split(strrev($end[0]));           
            $final = null;
            
            for ($i = 0; $i < count($tab); $i++) {
                $final .= $tab[$i];
                
                if(strlen(str_replace(" ", "", $final))%3 == 0){
                    $final .= " ";
                }
            }
            
            $end[0] = strrev($final);
        }
        
        return $end[0].",".$end[1]." €";
    }
}