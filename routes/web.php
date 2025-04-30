<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/adaorangbaik', [CampaignController::class, 'adaorangbaik_index']);
Route::post('/adaorangbaik_insert',[CampaignController::class, 'adaorangbaik_insert']);
Route::get('/adaorangbaik_crawl', [CampaignController::class, 'adaorangbaik_crawl']);

Route::get('/amalsholeh', [CampaignController::class, 'amalsholeh_index']);
Route::post('/amalsholeh_insert',[CampaignController::class, 'amalsholeh_insert']);
Route::get('/amalsholeh_crawl', [CampaignController::class, 'amalsholeh_crawl']);

Route::get('/baznasjabar', [CampaignController::class, 'baznasjabar_index']);
Route::post('/baznasjabar_insert',[CampaignController::class, 'baznasjabar_insert']);
Route::get('/baznasjabar_crawl', [CampaignController::class, 'baznasjabar_crawl']);

Route::get('/sandbox', [CampaignController::class, 'sandbox']);
