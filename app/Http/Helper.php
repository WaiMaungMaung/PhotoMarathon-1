<?php
namespace App\Http;
use Illuminate\Support\Facades\DB;
use DateTime;

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
            $return_id = "CPM210001";
        }
        return $return_id;
    }

    public static function getConfigsData(){
        $data = DB::table('configs')->get();
        // print_r($data);
        $d = null;
        if($data->isNotEmpty()){
            foreach($data as $data){                
                switch ($data->type) {
                    case "reg":
                        $d['reg'] =$data;
                    break;
                    case "enroll":
                        $d['enroll'] =$data;
                    break;
                    case "student":
                        $d['student'] =$data;
                    break;
                    case "theme1":
                        $d['theme1']=$data;
                    break;
                    case "theme2":
                        $d['theme2']=$data;
                    default:
                        $d['default']=null;
                }
                    
            }            
        }else{
            $d['reg'] = null;
            $d['enroll']=null;
            $d['student']=null;
            $d['theme1']=null;
            $d['theme2']=null;
            
        }
        return $d;
    }

    public static function isValidTime($fromdate,$todate){
        date_default_timezone_set('Asia/Rangoon');
        $currentdatetime = new DateTime("now");
        $fromdatetime = new DateTime($fromdate);
        $todatetime=new DateTime($todate);
        if($currentdatetime >= $fromdatetime && $currentdatetime <= $todatetime )
        {
           $isValid = true;

        }else{
            $isValid= false;
        }
        return $isValid;        
    }
}
