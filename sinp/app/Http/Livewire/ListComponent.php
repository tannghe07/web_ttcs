<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListComponent extends Component
{
    public function render()
    {
        return view('livewire.list-component')->layout('layouts.base');
    }
}
