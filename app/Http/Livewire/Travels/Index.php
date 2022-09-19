<?php

namespace App\Http\Livewire\Travels;

use App\Models\Travel;
use Livewire\Component;

class Index extends Component
{
    public function loadTravel() {
        $travels = Travel::orderBy('name')->get();

        return compact('travels');
    }

    public function render()
    {
        return view('livewire.travels.index', $this->loadTravel());
    }
}
