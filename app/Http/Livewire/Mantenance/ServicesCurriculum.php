<?php

namespace App\Http\Livewire\Mantenance;

use App\Models\Module;
use App\Models\Service;
use Livewire\Component;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ServicesCurriculum extends Component
{
    use AuthorizesRequests;

    public $service, $module, $name;

    protected $rules = [
        'module.name' => 'required',

    ];

    public function mount(Service $service)
    {
        $this->service = $service;
        $this->module = new Module();
        $this->authorize('dicatated', $service);
    }


    public function render()
    {
        return view('livewire.mantenance.services-curriculum')->layout('layouts.mantenance', ['service' => $this->service]);
    }


    public function store()
    {
        $this->validate([
            'name' => 'requiered',
        ]);

        Module::create([
            'name' => $this->name,
            'service_id' => $this->service->id
        ]);

        $this->reset('name');

        $this->service = Service::find($this->service->id);
    }

    public function edit(Module $module)
    {
        $this->module = $module;
    }


    public function update(Module $module)
    {
        $this->validate();

        $this->module->save();
        $this->module = new Module();

        $this->service = Service::find($this->service->id);
    }


    public function destroy(Module $module){
        $module->delete();

        $this->service = Service::find($this->service->id);
    }

}
