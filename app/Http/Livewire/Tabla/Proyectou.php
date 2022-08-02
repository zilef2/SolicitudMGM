<?php

namespace App\Http\Livewire\Tabla;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Proyectou extends LivewireDatatable
{
    public function builder()
    {
        return User::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')->label('ID'),
            Column::name('name')->label('Nombre')->searchable(),
        ];
    }
}