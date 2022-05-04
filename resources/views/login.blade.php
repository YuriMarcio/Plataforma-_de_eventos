@extends('template.main')
@section('title','event')
@section('content')
<div class="h-[33.5rem] md:h-[34.4rem] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div class="flex justify-center items-center flex-col">
      <span class="text-5xl  cursor-pointer w-auto"><i class="fa-solid fa-tent text-teal-400"></i></span>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-white">FAÇA O LOGIN</h2>
    </div>
    <form class="mt-8 space-y-6" action="#" method="POST">
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label for="email-address" class="sr-only">Email address</label>
          <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-teal-400 focus:border-teal-400 focus:z-10 sm:text-sm" placeholder="Email">
        </div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-teal-400 focus:border-teal-400 focus:z-10 sm:text-sm" placeholder="Senha">
        </div>
      </div>

      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-teal-400 focus:ring-teal-400 border-gray-300 rounded">
          <label for="remember-me" class="ml-2 block text-sm text-white"> Remember me </label>
        </div>

        <div class="text-sm">
          <a href="#" class="font-medium text-teal-400 hover:text-teal-400"> Forgot your password? </a>
        </div>
      </div>

      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-teal-400 hover:bg-teal-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-400">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-teal-400 group-hover:text-teal-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
          Entrar
        </button>
      </div>
    </form>
  </div>
</div>
@endsection