<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Store\StoreController;

route::redirect('', 'store/services');

route::resource('/services', StoreController::class)->names('services');

?>
