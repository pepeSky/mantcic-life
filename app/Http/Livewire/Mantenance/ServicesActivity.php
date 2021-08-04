<?php

namespace App\Http\Livewire\Mantenance;

use App\Models\Activity;
use App\Models\Module;
use App\Models\Platform;
use Illuminate\Auth\Events\Validated;
use Livewire\Component;

class ServicesActivity extends Component
{

    public $module, $Job, $platforms, $name, $platform_id = 1, $url; //$Job = Labor y Work es Trabajo

    protected $rules = [
        'activity.name' => 'required',
        'activity.platform_id' => 'required',
        'activity.url' => ['required', 'regex:%^ (?:https?://)? (?:www\.)? (?: youtu\.be/ | youtube\.com (?: /embed/ | /v/ | /watch\?v= ) ) ([\w-]{10,12}) $%x'],
    ];

    public function mount(Module $module)
    {
        $this->module = $module;
        $this->platforms = Platform::all();
        $this->activity = New Activity();
    }


    public function render()
    {
        return view('livewire.mantenance.services-activity');
    }

    public function store(){
        $rules = [
            'name' => 'required',
            'platform_id' => 'required',
            'url' => ['required', 'regex:%^ (?:https?://)? (?:www\.)? (?: youtu\.be/ | youtube\.com (?: /embed/ | /v/ | /watch\?v= ) ) ([\w-]{10,12}) $%x']
        ];

        if ($this->platform == 2) {
            $rules['url'] = ['required', 'regex:/\/\/(www\.)?vimeo.com\/(\d+)($|\/)/'];
        }

        $this->validate($rules);

        Activity::create([
            'name' => $this->name,
            'platform_id' => $this->platform_id,
            'url' => $this->url,
            'section_id' => $this->section->id,
        ]);

        $this->reset(['name','platform_id','url']);
        $this->module = Module::find($this->module->id);

    }

    public function edit(Activity $activity)
    {
        $this->reset->validation();
        $this->activity = $activity;
    }

   public function update(){

    if($this->activity->platform_id == 2){
            $this->rules['activity.url'] = ['required', 'regex:/\/\/(www\.)?vimeo.com\/(\d+)($|\/)/'];
    }
       $this->validate();

       $this->activity->save();
       $this->activity = new Activity();

       $this->module = Module::find($this->module->id);
   }

   public function destroy(Activity $activity){
        $activity->delete();
        $this->module = Module::find($this->module->id);
   }

   public function cancel(){
        $this->activity = new Activity();
   }
}
