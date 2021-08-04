<?php

namespace App\Http\Livewire\Worker;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithPagination;

class ServiceIndex extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $services = Service::where('title', 'LIKE', '%' . $this->search . '%')
                        ->where('user_id', auth()->user()->id)
                        ->latest('id')
                        ->paginate(8);

        return view('livewire.worker.service-index', compact('services'));

    }

    public function clearPage(){
        $this->reset('page');
    }
}
