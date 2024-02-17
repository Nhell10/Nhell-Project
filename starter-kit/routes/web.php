<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\Dashboard\Crm;
use App\Http\Controllers\Documentation\Documentation;
use App\Http\Controllers\Compliance\ComplianceList;
use App\Http\Controllers\Logistics\LogisticsData;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\tables\Basic as TablesBasic;
use App\Http\Controllers\tables\DatatableBasic;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;

use App\Http\Controllers\dashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Main Page Route

//Dashboard
Route::get('/', [Analytics::class, 'index'])->name('dashboards-analytics');

Route::get('/dashboard', [Crm::class, 'index'])->name('dashboards-crm');
Route::get('/Documentation', [Documentation::class, 'index'])->name('docu-documentation');
Route::get('/Compliance', [ComplianceList::class, 'index'])->name('Compliance-list');
Route::get('/Logistics', [LogisticsData::class, 'index'])->name('Logistics-data');
// locale
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

// pages
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');

// authentication
Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');
