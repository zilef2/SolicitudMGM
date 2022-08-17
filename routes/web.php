<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\dashinsertar;
use App\Http\Livewire\nuevoProyecto;
use App\Http\Livewire\nuevoModulo;
use App\Http\Livewire\Tabla\Proyectou;
//CRUDS
    //nuevos
        use App\Http\Livewire\nuevoActividad;
        use App\Http\Livewire\NuevoHistoriaUsuario;
        use App\Http\Livewire\nuevoProceso;
        use App\Http\Livewire\nuevoSolicitud;
        use App\Http\Livewire\nuevoTipoSolicitud;
        use App\Http\Livewire\nuevoParametro;
    //editar
        use App\Http\Livewire\editar\EditModulo;
        use App\Http\Livewire\editar\EditProyecto;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix'=>"us"],function () {
    Route::get('dashinsertar', dashinsertar::class)->name('dashinsertar');
    Route::get('nuevoProyecto', nuevoProyecto::class)->name('nuevoProyecto');
    Route::get('nuevoModulo', nuevoModulo::class)->name('nuevoModulo');
    
});


// <editor-fold desc="Artisan">
    Route::get('/exception',function(){
        throw new Exception('Probando excepciones y enrutamiento. La prueba ha concluido exitosamente.');
    });

    Route::get('/foo', function () {
        if (file_exists(public_path('storage'))){
            return 'Ya existe';
        }
        app('files')->link(
            storage_path('app/public'), public_path('storage')
        );return 'Listo';
    });

    Route::get('/clear-c', function () {
        echo Artisan::call('cache:clear');
        echo Artisan::call('route:clear');
        echo Artisan::call('config:clear');
        echo Artisan::call('config:cache');
        echo Artisan::call('view:clear');
        // echo Artisan::call('optimize');
        return " Listo papá";
    });

    Route::get('/tmantenimiento', function () {
        echo Artisan::call('down --secret="token-it"');
        return "Aplicación abajo: token-it";
    });
    Route::get('/Arriba', function () {
        echo Artisan::call('up');
        return "Aplicación funcionando";
    });

//</editor-fold>
