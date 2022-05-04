@extends('template.main')
@section('title','event')
@section('content')
<body class="bg-slate-900">


  <section id="banner" class="flex justify-center items-center flex-col h-80 w-full pt-32">
    <h1 class="text-white text-4xl font-bold">O que está procurando ?</h1>

      <form action="/" method="GET" class="input-group relative flex flex-nowrap items-stretch w-2/4 mt-8 mb-4 rounded">
        <input type="search" name="search" class="form-control relative flex-auto min-w-0 block px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-cyan-500 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-cyan-500 focus:outline-none" placeholder="Procure por um evento ..." aria-label="Search" aria-describedby="button-addon2">
      <span class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-cyan-500 text-center whitespace-nowrap rounded" id="basic-addon2">
        
      <i class="fa-solid fa-magnifying-glass"></i>
      </span>
      </form>

  </section>
  <section id="event" class="w-full p-10 grid grid-cols-1 md:grid-cols-3 place-items-center gap-10 ">
  @foreach($events as $event)
  <div id="card" class="w-full h-[35rem] rounded  shadow-lg bg-white">
      <img class="w-full h-64" src="/img/eventsImg/{{$event->image}}" alt="{{$event->title}}">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{$event->title}}</div>
        <span>{{date('d/m/y',strtotime($event->date))}}</span>
        <p class="text-gray-700 text-base">
         {{mb_strimwidth(($event->description), 0, 70, "...")}}
        </p>
      </div>
      <div class="px-6 pb-6">
      <div id="has" class="mb-6 h-15">
      @foreach($event->items as $item)
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$item}}</span>
      @endforeach
        
        <br>
      </div>
        <a href="/more/{{$event-> id}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4  rounded-full">
            Saiba mais 
        </a>
      </div>
    </div>
  @endforeach
  @if(count($events)==0 && $search)
  <div class="p-2  bg-cyan-500 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
    <span class="flex rounded-full bg-cyan-800 text-indigo-100 uppercase px-2 py-1 text-xs font-bold mr-3">Ops!</span>
    <span class="font-semibold mr-2 text-left flex-auto">Não há eventos Disponiveis com o nome <b>{{$search}}</b></span>
    <i class="fa-solid fa-face-sad-tear"></i>
  </div>
  @elseif(count($events)==0 )
  <div class="p-2  bg-cyan-500 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
    <span class="flex rounded-full bg-cyan-800 text-indigo-100 uppercase px-2 py-1 text-xs font-bold mr-3">Ops!</span>
    <span class="font-semibold mr-2 text-left flex-auto">Não há eventos Disponiveis</span>
    <i class="fa-solid fa-face-sad-tear"></i>
  </div>
  @endif
  </section>
  

@endsection
