<?php

namespace App\Http\Livewire;

use App\Models\Proyecto;
use App\Models\Modulo;

use Livewire\Component;

class NuevoModulo extends Component
{
    public $nombre_clase;
    public $nombre;
    public $proyecto_id;
    public $proyectos;

    public function mount (){
        $this->nombre_clase = "Modulo";
        $this->proyectos = Proyecto::all();
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
        return view('livewire.nuevo-modulo');
    }
}
