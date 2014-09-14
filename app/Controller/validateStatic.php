<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of validateStatic
 *
 * @author Lucas
 */
class ValidateStatic {
   
    static function getExtention($data){
        return substr(strrchr($data,'.'),1);
    }
    
    static function makeDateFrench($data){        
        $date = explode("-", $data);
        
        return $date[2]."-".$date[1]."-".$date[0];
    }
    
    static function makeDateUS($data){
        $date = explode("-", $data);
        
        return $date[2]."-".$date[0]."-".$date[1];
    }
    
    static function makePrice($price){
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
