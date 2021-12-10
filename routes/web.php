<?php
use App\Http\Controllers\MigrationController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FanController;
use App\Http\Controllers\MailerController;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/migrate-spreadsheet', function () {
    return view('migrate-spreadsheet');
});

Route::post('/migrate-spreadsheet', [
    MigrationController::class,
    "migrateXlsx"
]);

Route::get('/migrate-xml', function () {
    return view('migrate-xml');
});

Route::post('/migrate-xml', [
    MigrationController::class,
    "migrateXml"
]);

Route::get('/all-fans', [
    FanController::class,
    'getAllFans'
]);

Route::get('/incomplete-fans', [
    FanController::class,
    'getIncompleteFans'
]);

Route::get('/individual-fan/{id}', [
    FanController::class,
    'getIndividualFan'
]);

Route::post('/edit-fan', [
    FanController::class,
    'editFan'
]);

Route::get('/send-email', [
    MailerController::class,
    'getSendMailScreen'
]);

Route::post('/send-email', [
    MailerController::class,
    'sendMail'
]);

Route::get('/create-new-fan', function () {
    return view("create-new-fan");
});

Route::post('/create-new-fan', [
    FanController::class,
    'createNewFan'
]);






