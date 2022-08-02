<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Dashinsertar extends Component
{
    public $clases=[];

    public function mount (){
        $this->clases[] = [
            'nombre' => 'Proyecto',
            'descripcion' => 'Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.',
            'link' => "nuevoProyecto",
        ];
        $this->clases[] = [
            'nombre' => 'Modulo',
            'descripcion' => 'Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.',
            'link' => "nuevoModulo",
        ];
        $this->clases[] = [
            'nombre' => 'Actividad',
            'descripcion' => 'el nucleo del proyecto.',
            'link' => "nuevoActividad",
        ];
        $this->clases[] = [
            'nombre' => 'HistoriaUsuario',
            'descripcion' => 'Perteneciente a las actividades.',
            'link' => "nuevoHistoriaUsuario",
        ];
        $this->clases[] = [
            'nombre' => 'Proceso',
            'descripcion' => 'Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.',
            'link' => "nuevoProceso",
        ];
        $this->clases[] = [
            'nombre' => 'Solicitud',
            'descripcion' => 'Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.',
            'link' => "nuevoSolicitud",
        ];
        $this->clases[] = [
            'nombre' => 'TipoSolicitud',
            'descripcion' => 'Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.',
            'link' => "nuevoTipoSolicitud",
        ];
        $this->clases[] = [
            'nombre' => 'Parametro',
            'descripcion' => 'Ajustes del sistema.',
            'link' => "nuevoParametro",
        ];

        $this->user = User::all();
        
    }
    public function render()
    {
        return view('livewire.dashinsertar');
    }
}
