<?php

namespace App\Observers;

use App\Models\Module;
use Illuminate\Support\Facades\Storage;

class ModuleObserver
{
    public function deleting(Module $module){

        foreach ($module->activities as $activity) {
            if ($activity->resource) {
                Storage::delete($activity->resource->url);
                $activity->resource->delete();
            }
        }
    }
}
