<div>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-col px-5 py-7 justify-center items-center">
            <div class="w-full md:w-2/3 flex flex-col mb-16 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Nuevo {{ $nombre_clase }}</h1>
                <p class="mb-8 leading-relaxed"></p>
                <div class="flex w-full justify-center items-end">

                    <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left">
                        <label for="nombre" class="leading-7 text-sm text-gray-600">Nombre</label>
                        <input wire:model.defer="nombre" type="text"
                            class="w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left">
                        <select wire:model.defer="proyecto_id" id="proyecto_id"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="-1" selected>Seleccione el proyecto al que pertenecerá...</option>
                            @foreach ($proyectos as $i => $gen)
                                <option value="{{ $gen->id }}">{{ $gen->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button wire:click="savepro"
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                        Guardar</button>
                </div>
            </div>
        </div>
    </section>


    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-1 mx-auto">
            <div class="flex flex-wrap -m-12">

                @forelse ($listaModulos as $item)
                    <div class="p-12 md:w-1/2 flex flex-col items-start">
                        <span
                            class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest">{{count($item->actividades)}} Actividades</span>
                        <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">{{$item->nombre}}</h2>
                        <p class="leading-relaxed mb-8">Live-edge letterpress cliche, salvia fanny pack humblebrag narwhal
                            portland. VHS man braid palo santo hoodie brunch trust fund. Bitters hashtag waistcoat fashion
                            axe chia unicorn. Plaid fixie chambray 90's, slow-carb etsy tumeric. Cray pug you probably
                            haven't heard of them hexagon kickstarter craft beer pork chic.</p>
                        <div class="flex items-center flex-wrap pb-4 mb-4 border-b-2 border-gray-100 mt-auto w-full">
                            <a href="{{route('EditModulo', $item->id)}}" class="text-indigo-500 inline-flex items-center">Editar
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span
                                class="text-gray-400 mr-3 inline-flex items-center ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                $ 1'200.000
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg> 5 solicitudes
                            </span>
                        </div>
                        <a class="inline-flex items-center my-2">
                            <img alt="blog" src="https://dummyimage.com/104x104"
                                class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-medium text-gray-900">Nombre Caulfield</span>
                                <span class="text-gray-400 text-xs tracking-widest mt-0.5">UI DEVELOPER</span>
                            </span>
                        </a>
                        <a class="inline-flex items-center my-2">
                            <img alt="blog" src="https://dummyimage.com/104x104"
                                class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-medium text-gray-900">Nombre2 Aristizabal</span>
                                <span class="text-gray-400 text-xs tracking-widest mt-0.5">Analista</span>
                            </span>
                        </a>
                    </div>
                @empty
                    <p class="text-sm mt-2 text-gray-500 mb-8 w-full">No hay modulos registrados</p>
                @endforelse
               


            </div>
        </div>
    </section>
</div>
