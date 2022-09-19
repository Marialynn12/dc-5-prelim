<?php

namespace App\Http\Livewire\Travels;
use App\Models\Travel;
use Livewire\Component;

class Delete extends Component
{

    public $travelId;



    public function getTravelProperty(){
        return Travel::find($this->travelId);
    }

    public function render()
    {
        return view('livewire.travels.delete');
    }
    public function delete() {
        $this->travel->delete();

        return redirect('/dashboard')->with('message', $this->travel->name . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
}
