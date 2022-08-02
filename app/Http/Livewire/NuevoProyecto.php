<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proyecto;

class NuevoProyecto extends Component
{
    public $nombre;

    public function mount (){
    }

    protected $rules = [
        // 'photo' => 'nullable|image|max:1024', // 1MB Max
        'nombre' => 'required|min:2',
    ];
    public function updated($propertyName){$this->validateOnly($propertyName);}


    public function savepro (){
        $validatedData = $this->validate();
        $nuevaacti = Proyecto::create($validatedData);
        // session()->flash( 'message', "{$proyecto->nombre} agregada correctamente" );
        return redirect()->route('dashinsertar');
    }

    public function render()
    {
        return view('livewire.nuevo-proyecto');
    }
}
