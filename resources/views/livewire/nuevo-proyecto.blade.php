<div>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-col px-5 py-24 justify-center items-center">
            <div class="w-full md:w-2/3 flex flex-col mb-16 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Nuevo proyecto</h1>
                <p class="mb-8 leading-relaxed"></p>
                <div class="flex w-full justify-center items-end">

                    <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left">
                        <label for="nombre" class="leading-7 text-sm text-gray-600">Nombre</label>
                        <input wire:model="nombre" type="text" 
                            class="w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    

                    <button wire:click="savepro"
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                        Agregar</button>

                </div>
                <p class="text-sm mt-2 text-gray-500 mb-8 w-full">{{$nombre}}.</p>

            </div>
        </div>
    </section>
</div>
