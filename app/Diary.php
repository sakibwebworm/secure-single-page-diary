<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    //hide user_id

    protected $fillable = [
        'title','entry',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function showDiary($number){
        $diary = DB::table('diaries')->paginate($number);
        return $diary;
    }

}



