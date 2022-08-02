<?php
namespace App\Http\Livewire;


use App\Models\Modulo;
use App\Models\Actividad;
use App\Models\HistoriaUsuario;
use App\Models\Proceso;

use Livewire\Component;

class NuevoHistoriaUsuario extends Component
{
    public $nombre_clase;
    public $nombre;

    public $claseInput;


    public function mount (){
        $this->claseInput = "relative m-4 sm:w-1/2 xl:w-1/3 w-2/4  text-left";
        $this->nombre_clase = "Historia de usuario";
    }

    protected $rules = [
        'nombre' => 'required|min:2',
    ];
    public function updated($propertyName){$this->validateOnly($propertyName);}


    public function savepro (){
        $validatedData = $this->validate();
        $nuevaacti = HistoriaUsuario::create($validatedData);
        // session()->flash( 'message', "{$modulo->nombre} agregada correctamente" );
        return redirect()->route('dashinsertar');
    }

    public function render()
    {
        return view('livewire.nuevo-historia-usuario');
    }
}
