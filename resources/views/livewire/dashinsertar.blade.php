<div>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-10 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">Apartado Insertar</h2>
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">La Estructura principal del aplicativo
                </h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">---</p>
            </div>
            <div class="flex flex-wrap">
                @foreach ($clases as $item)
                    <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">{{$item['nombre']}}</h2>
                        <p class="leading-relaxed text-base mb-4">{{$item['descripcion']}}</p>
                        <a href="{{$item['link']}}" class="text-indigo-500 inline-flex items-center">Nuevo {{$item['nombre']}}
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="flex items-center">
                <a href="{{route('dashboard')}}" type="button" class="inline-flex mx-auto mt-16 text-lg ml-4 text-white bg-black font-bold py-2 px-2 rounded
                    transition duration-500 ease-in-out hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
                    </svg>
                    {{ __('Atrás') }}
                </a>
            </div>
        </div>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-10 mx-auto">
                <livewire:tabla.proyectou />
            </div>
        </div>
    </section>
</div>
