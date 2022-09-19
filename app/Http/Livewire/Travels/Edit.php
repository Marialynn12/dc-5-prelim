<?php

namespace App\Http\Livewire\Travels;
use App\Models\Travel;
use Livewire\Component;

class Edit extends Component
{

    public $travelId;
    public $name,$destination,$cost;


    public function mount(){

        $this->name = $this->travel->name;
        $this->destination = $this->travel->destination;
        $this->cost = $this->travel->cost;

    }

    public function editTravel()
    {
        $this->validate([
            'name'        => ['required','string','max:255'],
            'destination'        => ['required'],
            'cost'         => ['required','string','max:255'],
        ]);

        $this->travel->update([
            'name'=> $this->name,
            'destination'=> $this->destination,
            'cost'=> $this->cost,
        ]);

        return redirect('/dashboard')->with('message', $this->travel->name .' updated successfully');
    }


    public function getTravelProperty(){
        return Travel::find($this->travelId);
    }

    public function render()
    {
        return view('livewire.travels.edit');
    }
}
