<?php

namespace App\Http\Livewire\Worker;

use App\Models\Activity;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ActivityResources extends Component
{
    use WithFileUploads;

    public $activity, $file;



    public function mount(Activity $activity){
        $this->activity = $activity;
    }


    public function render()
    {
        return view('livewire.worker.activity-resources');
    }

    public function save(){
        $this->validate([
            'file' => 'required'
        ]);

        $url = $this->file->store('resources');

        $this->activity->resource()->create([
            'url' => $url
        ]);

        $this->activity = Activity::find($this->activity);

    }

    public function destroy(){
            Storage::delete($this->activity->resource->url);
            $this->activity->resource->delete();

            $this->activity = Activity::find($this->activity);
    }

    public function download(){
        return response()->download(storage_path('app/public/' . $this->activity->resource->url));
    }
}
