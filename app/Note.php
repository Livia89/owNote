<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Note extends Model
{
    use SoftDeletes; /* To delete logical */ 

    protected $fillable = [
        'title', 'content', 'dateNotification',
    ];

    protected $dates = ['deleted_at'];
    
}
