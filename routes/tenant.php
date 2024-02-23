<?php

declare(strict_types=1);

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

require __DIR__ . '/tenant_auth.php';
require __DIR__ . '/tenant_api.php';

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])
    ->group(function (): void {
        //        Route::middleware([
        //            'auth',
        //            'verified',
        //        ])->group(function (): void {
        //            Route::get('dashboard', fn () => [AppController::class, 'dashboard'])
        //                ->middleware('verified')
        //                ->name('dashboard');
        //        });

        Route::get('sign-in', [AppController::class, 'index'])->name('login');
        Route::get('{any}', [AppController::class, 'index'])->where('any', '.*')->name('home');

    });
