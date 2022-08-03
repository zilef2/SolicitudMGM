<?php

namespace App\Http\Livewire;

use App\Models\Modulo;
use App\Models\Actividad;
use App\Models\HistoriaUsuario;
use App\Models\TipoSolicitud;

use Livewire\Component;

class NuevoTipoSolicitud extends Component
{
    public $nombre_clase;
    public $nombre;
    public $Nuevo = "Nuevo";
    public $collection;
    
    public $claseInput;

    

    public function nombre() { return get_class($this); }

    public function mount (){

        $this->claseInput = "relative m-4 sm:w-1/2 xl:w-1/3 w-2/4  text-left";
        $this->nombre_clase = "Tipo de solicitud";

        // $this->fecha = Carbon::now()->format('m d Y');;
    }

    protected $rules = [
        'nombre' => 'required|min:2',

    ];
    public function updated($propertyName){$this->validateOnly($propertyName);}


    public function savepro (){
        $validatedData = $this->validate();
        $nuevaacti = TipoSolicitud::create($validatedData);
        // session()->flash( 'message', "{$modulo->nombre} agregada correctamente" );
        return redirect()->route('dashinsertar');
    }

    public function render()
    {        
        return view('livewire.nuevo-tipo-solicitud');
    }
}
