<?php

namespace App\Http\Controllers;
use App\Diary;
use Illuminate\Http\Request;

class DiaryCOntroller extends Controller
{
    //show 10 entries
    public function index(Request $request){
        $numberofentries = $request->get('number');
        $diary = new Diary();
        $diary = $diary->showDiary($numberofentries);
        return $diary;
    }
   //search result for diaries
    public function search(Request $request)
    {   if(Input::has('name'))
        return $this->store();
    }

}


