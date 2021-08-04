<?php

namespace App\Http\Livewire\Mantenance;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ServicesJobs extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public $service, $search;

    public function mount(Service $service){
        $this->service = $service;
        $this->authorize('dicatated', $service);

    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $jobs = $this->service->jobs()->where('name', 'LIKE', '%' . $this->search . '%')->paginate(4);

        return view('livewire.mantenance.services-jobs', compact('jobs'))->layout('layouts.mantenance', ['service' => $this->service]);
    }
}
