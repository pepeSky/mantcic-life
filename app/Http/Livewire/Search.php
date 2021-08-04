<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class Search extends Component
{

    public $search;

    public function render()
    {
        return view('livewire.search');
    }

    public function getResultsProperty(){
        return Service::where('title','LIKE', '%' . $this->search . '%')
                ->where('status', 3)->take(8)->get();
    }
}
