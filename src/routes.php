<?php 

use Cms\Post\Controllers\PostController;


Route::prefix('/cms-admin')->group(function(){
    Route::resources(['PostModel' => PostController::class]);
});