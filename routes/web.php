 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SingleActionController;
use App\Models\Customer;
use App\Http\Controllers;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Mail_send;
use App\Http\Controllers\WebsiteController;
use App\Models\Website_table;

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
// Route::get('/register',[RegistrationController::class,'index']);
// Route::post('/register',[RegistrationController::class,'register']);
Route::get('/',[DemoController::class,'index']);

Route::get('/enquiry/form', [WebsiteController::class, 'index']);
Route::post('/enquiry', [WebsiteController::class, 'store']);
Route::get('/enquiry/view', [WebsiteController::class, 'view']);
Route::get('/enquiry/delete/{id}', [WebsiteController::class, 'deleteE'])->name('enquiry.delete');
Route::get('/enquiry/edit/{id}', [WebsiteController::class, 'edit'])->name('enquiry.edit');
Route::post('/enquiry/update/{id}', [WebsiteController::class, 'update'])->name('enquiry.update');



// Route::post('/customer',[CustomerController::class, 'email_send']);























