<?php

use App\Http\Controllers\CampaignController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::post('/campaign_insert',[CampaignController::class, 'adaorangbaik_insert']);

Route::get('/adaorangbaik', [CampaignController::class, 'adaorangbaik_index']);
