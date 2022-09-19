<?php

namespace App\Http\Livewire\Travels;

use App\Models\Travel;
use Livewire\Component;

class Create extends Component
{
    public $name,$destination,$cost;

    public function addFood(){

            $this->validate([
                'name'        => ['required','string','max:255'],
                'destination'         => ['required'],
                'cost'          => ['required','string','max:255'],
            ]);

            Travel::create([
                'name'        => $this->name,
                'destination'         => $this->destination,
                'cost'          => $this->cost,
            ]);

            return redirect('/dashboard')->with('message', $this->name . ' added successfully');
    }



    public function render()
    {
        return view('livewire.travels.create');
    }
}
