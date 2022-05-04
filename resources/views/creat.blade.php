@extends('template.main')
@section('title','event')
@section('content')

<section id="creat" class="w-full h-full p-5 flex items-center flex-col ">
    <h1 class="text-white font-bold text-4xl">Crie seu evento</h1>
    <form id="form" class="w-full md:w-6/12 mt-10 " method="POST" action="/events" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-2 gap-4">
        <div class="form-group mb-3">
        <span class="text-lg font-semibold text-white">Nome do Evento :</span>
        <input type="text" name="title" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
            placeholder="Nome do Evento">
        </div>
        <div class="form-group mb-3">
        <span class="text-lg font-semibold text-white">Cidade :</span>
        <input type="text" name="city" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="city"
            placeholder="Cidade">
        </div>
        <div class="form-goup mb-3">
        <span class="text-lg font-semibold text-white">Data :</span>
            <div class="flex items-center justify-center">
                    <input type="date"
                    name="date"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    placeholder="Select a date"/>
            </div>
        </div>
        <div class="form-group">
        <span class="text-lg font-semibold text-white">Visibilidade :</span>
            <select name="private" class="form-select appearance-none
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding bg-no-repeat
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                    <option value="0">publico</option>
                    <option value="1">privado</option>
            </select>
        </div>
    </div>
   

    <div class="form-group mb-6">
        <span class="text-lg font-semibold text-white">Descrição :</span>
            <textarea
           name="description" class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
            "
            id="exampleFormControlTextarea13"
            rows="3"
            placeholder="Descrição do Evento"
            ></textarea>
    </div>
    <div class="form-group mb-5">
        <span class="text-lg font-semibold text-white">Adicione itens de infraectrutura :</span>
        <div class="form-check">
            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" name="items[]" type="checkbox" value="Cadeiras" id="flexCheckDefault">
            <label class="form-check-label inline-block text-white" for="flexCheckDefault">
                Cadeiras
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" name="items[]" type="checkbox" value="Palco" id="flexCheckChecked" checked>
            <label class="form-check-label inline-block text-white" for="flexCheckChecked">
                Palco
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" name="items[]" type="checkbox" value="Buffet" id="flexCheckDefault">
            <label class="form-check-label inline-block text-white" for="flexCheckDefault">
                Buffet
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" name="items[]" type="checkbox" value="Musica" id="flexCheckDefault">
            <label class="form-check-label inline-block text-white" for="flexCheckDefault">
                Musica
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" name="items[]" type="checkbox" value="Palestrante" id="flexCheckDefault">
            <label class="form-check-label inline-block text-white" for="flexCheckDefault">
                Palestrante
            </label>
        </div>
    </div>
    <div class="form-group mb-11 w-80">
        <input class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="image" type="file" id="formFile">
    </div>
    <input type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
    </form>
    </section>


@endsection