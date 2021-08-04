<?php

use App\Http\Controllers\Accounting\AccountingController;
use Illuminate\Support\Facades\Route;



route::redirect('', 'accounting/services');

route::resource('/services', AccountingController::class)->names('services');

?>
