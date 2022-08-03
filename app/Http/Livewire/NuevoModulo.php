<?php

namespace App\Http\Livewire;

use App\Models\Actividad;
use App\Models\Proyecto;
use App\Models\Modulo;

use Livewire\Component;

class NuevoModulo extends Component
{
    public $nombre_clase;
    public $nombre;
    public $proyecto_id;
    public $proyectos;
    //edicion
    public $listaModulos;



    public function mount (){
        $this->nombre_clase = "Modulo";
        $this->proyectos = Proyecto::all();

        $this->listaModulos = Modulo::all();
        // $this->listaModulos = Modulo::has('Actividad')->get();
        
    }

    protected $rules = [
        'nombre' => 'required|min:2',
        'proyecto_id' => 'required|min:1',
    ];
    public function updated($propertyName){$this->validateOnly($propertyName);}


    public function savepro (){
        $validatedData = $this->validate();
        $nuevaacti = Modulo::create($validatedData);
        // session()->flash( 'message', "{$proyecto->nombre} agregada correctamente" );
        return redirect()->route('dashinsertar');
    }

    public function render()
    {
        foreach ($this->listaModulos as $key => $value) {
            $value->actividades = Actividad::where('modulo_id', $value->id)->get();
        }
        return view('livewire.nuevo-modulo');
    }
}
