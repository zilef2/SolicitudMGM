<?php
namespace App\Http\Livewire;

use App\Models\Modulo;
use App\Models\Actividad;
use App\Models\HistoriaUsuario;
use App\Models\Proceso;

use Livewire\Component;

class NuevoActividad extends Component
{
    public $nombre_clase;
    public $nombre;
    public $modulo_id;
    public $modulo;

    public $claseInput;

    public $historia_usuarios_id;
    public $historia_usuarios;
    public $proceso_id;
    public $proceso;

    public function mount (){
        $this->claseInput = "relative m-4 w-full text-left";
        $this->nombre_clase = "Actividad";
        $this->modulo = modulo::all();
        $this->historia_usuarios = HistoriaUsuario::all();
        $this->proceso = Proceso::all();
        // $this->proceso_id = Proceso::all();
    }

    protected $rules = [
        'nombre' => 'required|min:2',
        'historia_usuarios_id' => 'required|min:1',
        'proceso_id' => 'required|min:1',
        'modulo_id' => 'required|min:1',
    ];
    public function updated($propertyName){$this->validateOnly($propertyName);}


    public function savepro (){
        $validatedData = $this->validate();
        $nuevaacti = Actividad::create($validatedData);
        // session()->flash( 'message', "{$modulo->nombre} agregada correctamente" );
        return redirect()->route('dashinsertar');
    }

    public function render()
    {
        return view('livewire.nuevo-actividad');
    }
}