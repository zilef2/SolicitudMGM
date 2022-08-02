<?php

namespace App\Http\Livewire;

use App\Models\Modulo;
use App\Models\Actividad;
use App\Models\HistoriaUsuario;
use App\Models\Solicitud;
use App\Models\TipoSolicitud;
use Carbon\Carbon;


use Livewire\Component;

class NuevoSolicitud extends Component
{
    public $nombre_clase;
    public $nombre;
    public $Nuevo = "Nueva";
    public $collection;
    
    public $claseInput;
    
    //*cambiar  tipo_solicitud
    public $tipo_solicitud;
    public $tipo_solicitud_id;
    public $El_Label;

    //*borrable
    public $fecha;

    public function nombre() { return get_class($this); }

    public function mount (){
        $this->tipo_solicitud = TipoSolicitud::all();


        $this->El_Label = str_replace("_", " ", "tipo_solicitud_id");
        $this->El_Label = str_replace("_id", "", $this->El_Label);
        $this->claseInput = "relative m-4 sm:w-1/2 xl:w-1/3 w-2/4  text-left";
        $this->nombre_clase = "solicitud";

        // $this->fecha = Carbon::now()->format('m d Y');;
    }

    protected $rules = [
        'nombre' => 'required|min:2',
        'tipo_solicitud_id' => 'required|min:1',
        'fecha' => 'required|Date',

    ];
    public function updated($propertyName){$this->validateOnly($propertyName);}


    public function savepro (){
        // $this->fecha = Carbon::createFromDate($this->fecha);
        // dd( $this->fecha);
        // ->format('Y-m-d');


        $validatedData = $this->validate();
        $nuevaacti = Solicitud::create($validatedData);
        // session()->flash( 'message', "{$modulo->nombre} agregada correctamente" );
        return redirect()->route('dashinsertar');
    }

    public function render()
    {
        return view('livewire.nuevo-solicitud');
    }
}
