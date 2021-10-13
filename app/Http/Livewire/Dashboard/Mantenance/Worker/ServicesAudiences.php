<?php

namespace App\Http\Livewire\Dashboard\Mantenance\Worker;

use Livewire\Component;
use App\Models\Mantenance\Service;
use App\Models\Mantenance\Audience;

class ServicesAudiences extends Component
{
    public $service, $audience, $name;

    protected $rules = [
        'audience.name' => 'required'
    ];

    public function mount(Service $service){
        $this->service = $service;
        $this->audience = new Audience();
    }

    public function render()
    {
        return view('livewire.mantenance.worker.services-audiences');
    }

    public function store(){

        $this->validate([
            'name' => 'required'
        ]);

        $this->service->audiences()->create([
            'name' => $this->name
        ]);

        $this->reset('name');
        $this->service = Service::find($this->service->id);
    }

    public function edit(Audience $audience){
        $this->audience = $audience;
    }

    public function update(){
        $this->validate();

        $this->audience()->save();
        $this->audience = new Audience();
        $this->service = Service::find($this->service->id);

    }

    public function destroy(Audience $audience){
            $audience->delete();
            $this->service = Service::find($this->service->id);
    }
}
