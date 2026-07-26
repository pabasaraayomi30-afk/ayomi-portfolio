<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SendMsg extends Model
{
    protected $table = 'send_message';

    protected $fillable = [
        'name',
        'email',
        'message'
    ];
}
