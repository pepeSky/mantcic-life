<?php

namespace App\Http\Livewire\Dashboard\Mantenance\Worker;

use App\Models\Mantenance\Requirement;
use Livewire\Component;
use App\Models\Mantenance\Service;

class ServicesRequirements extends Component
{
    public $service, $requirement, $name;

    protected $rules = [
        'requirement.name' => 'required'
    ];

    public function mount(Service $service){
        $this->service = $service;
        $this->requirement = new Requirement();
    }

    public function render()
    {
        return view('livewire.mantenance.worker.services-requirements');
    }

    public function store(){

        $this->validate([
            'name' => 'required'
        ]);

        $this->service->requirements()->create([
            'name' => $this->name
        ]);

        $this->reset('name');
        $this->service = Service::find($this->service->id);
    }

    public function edit(Requirement $requirement){
        $this->requirement = $requirement;
    }

    public function update(){
        $this->validate();

        $this->requirement()->save();
        $this->requirement = new Requirement();

        $this->service = Service::find($this->service->id);
    }

    public function destroy(Requirement $requirement){
            $requirement->delete();
            $this->service = Service::find($this->service->id);
    }
}
