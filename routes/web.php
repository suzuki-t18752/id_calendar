<?php

use Illuminate\Support\Facades\Route;

Route::get('/users/{id}/plans', 'PlanController@index')->name('plans.index');