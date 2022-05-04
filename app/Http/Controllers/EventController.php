<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){
            $events = Event::where([
                ['title','like','%'.$search.'%']
            ])->get();
        }else{
            $events = Event::all();
        }
        return view('home',['events'=>$events,'search'=>$search]);
    }
    public function creat(){
        return view('creat');
    }
    public function login(){
        return view('login');
    }
    public function store(Request $request){
         $event = new Event;
         
         $event->title = $request->title;
         $event->description = $request->description;
         $event->private = $request->private;
         $event->city = $request->city;
         $event->items = $request->items;
         $event->date = $request->date;


         //upload de arquivos e imagens
         if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage= $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) .".".$extension;

            $requestImage->move(public_path('/img/eventsImg'),$imageName);

            $event->image = $imageName;
         }

         $event->save();


         return redirect('/')->with('msg','evento criado com sucesso',19);
         
    }

    public function show($id){
        $event = Event::findOrfail($id);
        return view('more',['event'=>$event]);
    }
}
