 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SingleActionController;

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
Route::get('/register',[RegistrationController::class,'index']);
    Route::post('/register',[RegistrationController::class,'register']);
Route::get('/',[DemoController::class,'index']);  
// Route::get('/about',[DemoController::class, 'about']);
// Route::get('/courses', SingleActionController::class);
// Route::resource('photo',PhotoController::class);
// Route::get('/demo', function () {
//      return view('demo');
// });

// //handling query with routes
// //get route with optinal field
// Route::get('/demo/{name}/{id?}', function ($name, $id=null) {
//     $data = compact('name', 'id');
//     return view('demo')->with($data);
// });


// Route::any('/test',function(){
//  echo "this is Post Route";
// });