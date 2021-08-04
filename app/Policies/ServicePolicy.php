<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Service;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function enrolled(User $user, Service $service){
        return  $service->jobs->contains($user->id);

    }

    public function published(User $user, Service $service){
        if($service->status == 3){
            return true;
        }else{
            return false;
        }
    }

    public function dicatated(User $user, Service $service){
            if($service->user_id == $user->id){
                return true;
            }else{
                return false;
            }

    }

    public function revision(User $user, Service $service){

        if($service->status == 2){
            return true;
        }else{
            return false;
        }
    }
}
