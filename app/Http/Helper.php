<?php
namespace App\Http;

class Helper{
    public static function getCMPID($old_cmp){
        $return_id ="";
        if($old_cmp != null){
            $divided_id = preg_split("/(,?\s+)|((?<=[a-z])(?=\d))|((?<=\d)(?=[a-z]))/i", $old_cmp);
            
             $increment_value = $divided_id[1]+1;
             $increment_id = str_pad($increment_value,4,"0",STR_PAD_LEFT);         
            //  $arr = array($divided_id[0], $increment_id);
             $return_id =  $divided_id[0].$increment_id;
          }
        else {
            $return_id = "CPM0001";
        }
        return $return_id;
    }
}
