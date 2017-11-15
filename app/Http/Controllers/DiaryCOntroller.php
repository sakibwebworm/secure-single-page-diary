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
    //handle post request
    public function store(Request $request)
    {/*
//        //Post::create(request()->all());
//        $this->validate(request(), [
//            'title' => 'required',
//            "entry" => 'required'
//        ]);
//        Diary::forceCreate([
//            'title' => request('title'),
//            'entry' => request('entry')
//        ]);
        return ['message' => 'Post Created!'];*/
        $this->validate($request, [
            'title' => 'required',
            "entry" => 'required',
            'user_id'=> 'required'
        ]);
         $diary=new Diary;
        $diary->title = $request->title;
        $diary->entry = $request->entry;
        $diary->user_id = $request->user_id;

       return Diary::create([ 'title' => request('title'),'entry' => request('entry'),'user_id' => request('user_id') ]);
    }

}


