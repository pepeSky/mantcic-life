<?php

use App\Http\Controllers\Dashboard\Accounting\AccountingController;
use Illuminate\Support\Facades\Route;



route::redirect('', 'accounting/services');

route::resource('/services', AccountingController::class)->names('services');

route::resource('/inputs', AccountingController::class)->names('inputs');

route::resource('/units', AccountingController::class)->names('units');

route::resource('/reports', AccountingController::class)->names('reports');

route::resource('/processes', AccountingController::class)->names('processes');

?>
