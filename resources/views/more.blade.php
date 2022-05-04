@extends('template.main')
@section('title','event')
@section('content') 
    <section id="more" class=" columns-2xl  w-100 h-[34.4rem]">
        <div id="img" class="w-100 p-6">
            <img src="/img/eventsImg/{{$event->image}}" class="rounded-2xl" alt="{{$event->title}}">
        </div>
        <div class="content">
        <div id="titulo" class="mt-5 text-white text-4xl ">{{$event->title}}</div>
        <div class="mt-5 text-white text-1xl ">{{$event->description}}</div>
        <div id="has" class="my-6 h-15">
            @foreach($event->items as $item)
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$item}}</span>
                
            @endforeach
        </div>
        <div id="date" class="text-white text-xl">
         Data do Evento : <span class="text-white">{{date('d/m/y',strtotime($event->date))}}</span>
        </div>
        </div>

    </section>
@endsection