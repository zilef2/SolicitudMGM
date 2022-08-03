<section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-12 mx-auto">
        <div class="container px-5 py-3 mx-auto">
            <div class="flex flex-col text-center w-full mb-3">
                <h2 class="capitalize text-2xl text-indigo-500 tracking-widest font-medium title-font mb-1">{{$modulo->nombre}}</h2>
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
                </h1>
            </div>
        </div>
        <div class="-my-8 divide-y-2 divide-gray-100">
            @foreach ($actividades as $item)
                <div class="py-8 flex flex-wrap md:flex-nowrap">
                    <div class="w-full md:mb-0 mb-3 flex-shrink-0 flex flex-col">
                        <span class="mt-1 text-gray-400 text-md">12 Jun 2022</span>
                    </div>
                    <div class="md:flex-grow">
                        <h2 class="capitalize border-b-4 border-indigo-300 text-2xl font-medium text-gray-900 title-font mb-2">{{$item->nombre}}</h2>
                        <div class="grid grid-cols-7 gap-5">
                            <div class="col-span-1">
                                <p class="my-2 font-semibold title-font text-lg text-gray-600">{{$item->HU->nombre}} </p>
                                <p class="my-2 font-semibold title-font text-md text-gray-800">{{$item->pro->nombre}}</p>
                            </div>
                            <div class="col-span-4">
                                <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist
                                    pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware
                                    kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                            </div>
                            <div class="">
                                <div class="flex mb-4">
                                    <span class="flex items-center">
                                      <span class="text-gray-500 ml-3">Horas estimadas:</span>
                                        <p class="mx-2 text-gray-800"> {{$item->horas_estimadas}}</p>
                                    </span>
                                </div>
                            </div>
                            <div class="border-x-4 border-indigo-300">
                                <div class="flex mb-4">
                                    <span class="flex items-center">
                                      <span class="text-gray-500 ml-3">Costo: </span>
                                        <p class="mx-2 text-gray-800"> $ {{$item->costo}}</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
            <a class="text-indigo-500 inline-flex items-center mt-4">añadir otra actividad
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
