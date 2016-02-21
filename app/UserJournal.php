<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserJournal extends Model
{
    protected $fillable = ['user_id', 'status', 'entry'];
}
