<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationsCtrl;
use App\Http\Controllers\ParkCtrl;
use App\Http\Controllers\SearchCtrl;
use App\Http\Controllers\ApiParkCtrl;
use App\Http\Controllers\HomepageCtrl;
use App\Http\Controllers\DestinationCtrl;
use App\Http\Controllers\RidesCtrl;

Route::get('/', [HomepageCtrl::class, 'index']);
Route::get('/destination', [DestinationsCtrl::class, 'getAll']);
route::get('/destination/{id}', [DestinationCtrl::class, 'getById']);
Route::get('/parks/{id}', [ParkCtrl::class, 'getById'])->name('park.show');
Route::get('/attractions/{id}', [ParkCtrl::class, 'getById'])->name('attraction.show');
Route::get('/search', [SearchCtrl::class, 'search']);
Route::get('/rides', [RidesCtrl::class, 'index']);
Route::get('/api/parks/{name}', [ApiParkCtrl::class, 'getByName']);

