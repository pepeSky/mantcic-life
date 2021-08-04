<?php

namespace App\Http\Livewire\Worker;

use Livewire\Component;
use App\Models\Activity;
class ActivityDescription extends Component
{
    public $activity, $description, $name;

    protected $rules =[
            'description.name' => 'required'
    ];


    public function mount(Activity $activity){
            $this->activity = $activity;

            if($activity->description){
                $this->description = $activity->description;
            }
    }


    public function render()
    {
        return view('livewire.worker.activity-description');
    }


    public function store(){
        $this->description = $this->activity->description()->create([
            'name' => $this->name
        ]);

        $this->reset('name');
        $this->activity = Activity::find($this->activity->id);
    }


    public function update(){
        $this->validate();
        $this->description->save();
    }


    public function destroy(){
        $this->description->delete();
        $this->reset('description');
        $this->activity = Activity::find($this->activity->id);
    }
}
