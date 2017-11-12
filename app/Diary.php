<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Jedrzej\Searchable\SearchableTrait;

class Diary extends Model
{
    //hide user_id
    protected $hidden = [
        'user_id',
    ];
    use SearchableTrait;

    // either a property holding a list of searchable fields...
    protected $searchable = [
        'columns' => [
            'diaries.title' => 10,
            'diaries.entry' => 5,

        ],

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function showDiary($number){
        $diary = DB::table('diaries')->paginate($number);
        return $diary;
    }

}



