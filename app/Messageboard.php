<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Messageboard extends Model
{
    public static function getMessages($start, $end) {
		$messages = DB::table('messageboards AS mb')->join('users AS u','mb.user_id','=','u.id')
						->select(['mb.id as messageid', 'mb.message AS message', 'u.character_name', 'mb.created_at'])
						->orderBy('mb.created_at','desc');									 
		return $messages->get();
    }
}
