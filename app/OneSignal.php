<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OneSignal extends Model
{
    private $APP_ID = '597c7226-83eb-4d80-9fb1-18856e8aaa6f';
    private $REST_API_KEY = 'ZmY2OGE3MjctMDI5MC00YjljLTgyZjctMmY2MzBmM2FiYjI1';


    public function getAppId(){return $this->app_id;}
    public function getRestApiKey(){return $this->REST_API_KEY;}

    static function createNotification($note){
            
        
    }


    function sendMessage() {
        $content = array(
            "en" => 'English Message'
        );
       
        $fields = array(
            'included_segments' => array(
                'All'
            ),
            'data' => array(
                "foo" => "bar"
            ),
            'contents' => $content
        );
        
        $fields = json_encode($fields);
   
    }
    
    public function cURL(){


        $ch = curl_init();
        $fields['app_id'] = $this->getAppId();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',
            'Authorization: Basic ' . $this->getRestApiKey()
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        
        $response = curl_exec($ch);
        curl_close($ch);   
    
    }




}
