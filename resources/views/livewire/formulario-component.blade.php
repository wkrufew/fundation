<div>

    

    <div  class="transition-all duration-500 ease-in">
        
        <div class="relative w-full mb-1 mt-4">
            <label for="" class="block uppercase text-gray-50 text-xs font-bold mb-2">Nombres: </label>
            <input placeholder="Nombres completos" wire:model="nombre" type="text" class=" border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-full text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
        
            @error('nombre')
            <div x-data="{ open: true }" class="my-4">
                <div x-show="open" class="bg-red-400 border border-red-500 text-white px-4 py-1 rounded-full relative" role="alert">
                    <strong class="font-bold">Ups!</strong>
                    <span class="block sm:inline">{{$message}}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
                    <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
            </div>
            @enderror
        </div>

        <div class="relative w-full mb-1 mt-2">
            <label for="" class="block uppercase text-gray-50 text-xs font-bold mb-2">Telefono/Celular: </label>
            <input placeholder="Numero telefonico o celular" wire:model="telefono" type="text" class=" border-0 px-2   py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-full text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
          
            @error('telefono')
            <div x-data="{ open: true }" class="my-4">
                <div x-show="open" class="bg-red-400 border border-red-500 text-white px-4 py-1 rounded-full relative" role="alert">
                    <strong class="font-bold">Ups!</strong>
                    <span class="block sm:inline">{{$message}}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
                    <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
            </div>
            @enderror
        </div>

        <div class="relative w-full mb-1 mt-2">
            <label for="" class="block uppercase text-gray-50 text-xs font-bold mb-2">Correo: </label>
            <input placeholder="Ejm. fundecom@hotmail.com" wire:model="correo" type="text" class=" border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-full text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            
            @error('correo')
            <div x-data="{ open: true }" class="my-4">
                <div x-show="open" class="bg-red-400 border border-red-500 text-white px-4 py-1 rounded-full relative" role="alert">
                    <strong class="font-bold">Ups!</strong>
                    <span class="block sm:inline">{{$message}}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
                    <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
            </div>
            @enderror
        </div>

        <div class="relative w-full mb-1 mt-2">
            <label for="" class="block uppercase text-gray-50 text-xs font-bold mb-2">Asunto: </label>
            <input wire:model="asunto" type="text" class=" border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-full text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            
            @error('asunto')
            <div x-data="{ open: true }" class="my-4">
                <div x-show="open" class="bg-red-400 border border-red-500 text-white px-4 py-1 rounded-full relative" role="alert">
                    <strong class="font-bold">Ups!</strong>
                    <span class="block sm:inline">{{$message}}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
                    <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
            </div>
            @enderror
        </div>

        <div class="relative w-full mb-1 mt-2">
            <label for="" class="block uppercase text-gray-50 text-xs font-bold mb-2">Detalle del mensaje: </label>
            <textarea  wire:model="detalle" type="text" name="" id="" cols="30" rows="2" class="text-gray-700 border-0 px-3 py-2 placeholder-blueGray-300  bg-white rounded-xl text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150"></textarea>

            @error('detalle')
            <div x-data="{ open: true }" class="my-4">
                <div x-show="open" class="bg-red-400 border border-red-500 text-white px-4 py-1 rounded-full relative" role="alert">
                    <strong class="font-bold">Ups!</strong>
                    <span class="block sm:inline">{{$message}}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
                    <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
            </div>
            @enderror
        </div>
      
       
        <div class="mx-auto mb-2 mt-2 text-center ">
            <div wire:loading wire:target="save">
                <label class="text-white  text-base flex items-center">Procesando datos...
                    <svg class="animate-spin flex items-center ml-2 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                      </svg>
                </label>
            </div>
            <button wire:click="save" wire:target="save"  
                    wire:loading.remove class="border-0  mx-auto focus:outline-none focus:ring ease-linear transition-all duration-150 lg:mx-0 hover:bg-purple-500 hover:text-gray-100 bg-white text-purple-500 font-bold rounded-full my-2 py-2 px-8 shadow-2xl">
                    Enviar
            </button>
        </div>

        </div>
    </div>
</div>
</div>
