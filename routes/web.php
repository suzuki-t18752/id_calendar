<?php

use Illuminate\Support\Facades\Route;

Route::get('/{user_name}/plans', 'PlanController@index')->name('plans.index');
