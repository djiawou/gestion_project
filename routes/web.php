<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

Route::resource('projects', ProjectController::class);
Route::resource('tasks', TaskController::class);
