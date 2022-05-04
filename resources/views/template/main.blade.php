<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/d951250582.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<section class="p-5 bg-white md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
      <span class="text-2xl  cursor-pointer"><i class="fa-solid fa-tent text-cyan-500"></i></span>

      <span class="text-3xl cursor-pointer mx-2 md:hidden ">
      <i class="fa-solid fa-bars"></i>
      </span>
    </div>

    <ul class="hidden md:flex md:items-center z-[-1] md:z-auto md:static absolute w-full left-0 bg-white md:w-auto md:py-0 py-4 md:pl-0 pl-7 ">
      <li class=" cursor-pointer md:mx-3 sm:border-none hover:border-b-2 my-6 md:my-0">
        <a href="/" class="text-md hover:text-cyan-500 duration-500 font-medium">HOME</a>
      </li>
      <li class=" cursor-pointer md:mx-3 sm:border-none hover:border-b-2 my-6 md:my-0">
        <a href="/creat" class="text-md hover:text-cyan-500 duration-500 font-medium">CADASTRE O EVENTO</a>
      </li>
      <li class=" cursor-pointer md:mx-3 sm:border-none hover:border-b-2 my-6 md:my-0">
        <a href="/login" class="text-md hover:text-cyan-500 duration-500 font-medium">LOGIN</a>
      </li>
      <li class=" cursor-pointer md:mx-3 sm:border-none hover:border-b-2 my-6 md:my-0">
        <a href="#" class="text-md hover:text-cyan-500 duration-500 font-medium">PERFIL</a>
      </li>
<h2 class=""></h2>
    </ul>
  </section>
<body class="bg-slate-900">
  @if(session('msg'))
    <div class="p-2  bg-cyan-500 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
    <span class="flex rounded-full bg-cyan-800 text-indigo-100 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
    <span class="font-semibold mr-2 text-left flex-auto">{{session('msg')}}</span>
    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
  </div>
  @endif
    @yield('content')
</body>
<footer class=" h-10 bg-white  flex justify-center items-center">
    <h4>@Direitos reservados a Yuri Marcio </h4>
</footer>

</html>