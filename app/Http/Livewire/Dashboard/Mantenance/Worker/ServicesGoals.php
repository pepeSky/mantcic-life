<?php

namespace App\Http\Livewire\Dashboard\Mantenance\Worker;

use App\Models\Mantenance\Service;
use Livewire\Component;
use App\Models\Mantenance\Goal;

class ServicesGoals extends Component
{
    public $service, $goal, $name;

    protected $rules = [
        'goal.name' => 'required'
    ];

    public function mount(Service $service){
        $this->service = $service;
        $this->goal = new Goal();
    }

    public function render()
    {
        return view('livewire.mantenance.worker.services-goals');
    }

    public function store(){

        $this->validate([
            'name' => 'required'
        ]);

        $this->service->goals()->create([
            'name' => $this->name
        ]);

        $this->reset('name');
        $this->service = Service::find($this->service->id);
    }

    public function edit(Goal $goal){
        $this->goal = $goal;
    }

    public function update(){
        $this->validate();

        $this->goal()->save();
        $this->goal = new Goal();

        $this->service = Service::find($this->service->id);
    }

    public function destroy(Goal $goal){
            $goal->delete();
            $this->service = Service::find($this->service->id);
    }

}
