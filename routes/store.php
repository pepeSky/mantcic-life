<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Store\ProductController;

route::redirect('', 'store/products');

route::resource('/products', ProductController::class)->names('products');

?>
