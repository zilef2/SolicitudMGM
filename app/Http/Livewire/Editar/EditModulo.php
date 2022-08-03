<?php

namespace App\Http\Livewire\Editar;

use Livewire\Component;
use App\Models\Modulo;
use App\Models\Actividad;
    use App\Models\HistoriaUsuario;
    use App\Models\Proceso;

class EditModulo extends Component
{

    public function mount ($id_a){
        $this->modulo = Modulo::find($id_a);
        $this->actividades = Actividad::where('modulo_id',$id_a)->get();
        foreach ($this->actividades as $key => $value) {
            $value->HU = HistoriaUsuario::find($value->historia_usuarios_id);
            $value->pro = Proceso::find($value->proceso_id);
        }
    }
    public function render()
    {
        return view('livewire.editar.edit-modulo');
    }
}
