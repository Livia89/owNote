<?php

namespace App\Http\Controllers\Notification;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Note;
use App\OneSignal;
class OneSignalController extends Controller
{
    
    public function send(){
        $NOTES = Note::All()->where('dateNotification', date('Y-m-d'))->where('hourNotification', '>=' ,date('H:i:s'))->where('hourNotification', '<' , date('H:i:s', strtotime('+5 minutes')));
        foreach($NOTES as $NOTE){
            OneSignal::createNotification($NOTE);
        }

    }

}
