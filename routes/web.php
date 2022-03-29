<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\RecordController;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Facades\Route;
use PhpParser\Comment\Doc;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/input', [FormController::class, 'input'])->middleware(['auth']);
Route::post('/proses', [FormController::class, 'proses'])->middleware(['auth']);

Route::get("/record", [RecordController::class, 'index'])->middleware(['auth']);
Route::get('/record/{record:slug}', [RecordController::class, 'content'])->middleware(['auth']);

Route::get("/patient/{patient:name}", function(Patient $patient)
{
    return view('record', [
        'title' => $patient->name,
        'records' => $patient->record,
        // 'category' => $category->name
    ]);
})->middleware(['auth']);

Route::get("/doctor/{doctor:name}", function(Doctor $doctor){
    return view('record', [
        'title' => $doctor->name,
        'records' => $doctor->record,
        // 'category' => $doctor->name
    ]);
})->middleware(['auth']);

require __DIR__.'/auth.php';


