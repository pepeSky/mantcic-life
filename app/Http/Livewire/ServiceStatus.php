<?php

namespace App\Http\Livewire;

use App\Models\Mantenance\Activity;
use App\Models\Mantenance\Service;
use Livewire\Component;

class ServiceStatus extends Component
{
    public $service, $current;

    public function mount(Service $service){
            $this->service = $service;

            foreach($service->activities as $activity){
                if(!$activity->completed){
                    $this->current = $activity;

                    break;
                }
            }
    }

    public function render()
    {
        return view('livewire.service-status');
    }

    public function changeActivity(Activity $activity){
        $this->current = $activity;

    }

    public function getIndexProperty(){
        return $this->service->activities->pluck('id')->search($this->current->id);
    }

    public function getPreviusProperty(){
        if($this->index == 0){
            return null;
        }else{
            return $this->service->activities[$this->index - 1];
        }
    }

    public function getNextProperty(){
        if($this->index == $this->service->activities->count() - 1){
            return null;
        }else{
            return $this->service->activities[$this->index + 1];
        }
    }

}
