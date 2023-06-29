<?php

use Answer\DcatRegion\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('region-picker', Controllers\RegionPickerController::class.'@index');