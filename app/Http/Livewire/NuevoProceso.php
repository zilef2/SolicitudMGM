<?php

namespace App\Http\Livewire;

use App\Models\Modulo;
use App\Models\Actividad;
use App\Models\HistoriaUsuario;
use App\Models\Proceso;

use Livewire\Component;

class NuevoProceso extends Component
{
    public $nombre_clase;
    public $nombre;
    public $modulo_id;
    public $modulo;
    public $Nuevo = "Nuevo";

    public $claseInput;

    public function nombre() { echo "" , get_class($this) , ""; }


    public function mount (){
        $this->claseInput = "relative m-4 sm:w-1/2 xl:w-1/3 w-2/4  text-left";
        $this->nombre_clase = "Proceso ";
    }

    protected $rules = [
        'nombre' => 'required|min:2',
    ];
    public function updated($propertyName){$this->validateOnly($propertyName);}


    public function savepro (){
        $validatedData = $this->validate();
        $nuevaacti = Proceso::create($validatedData);
        // session()->flash( 'message', "{$modulo->nombre} agregada correctamente" );
        return redirect()->route('dashinsertar');
    }

    public function render()
    {
        return view('livewire.nuevo-proceso');
    }
}
