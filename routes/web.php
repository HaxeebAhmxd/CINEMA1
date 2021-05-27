<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CheckoutController;

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
/* 
  Route::get('/', function () {
    return view('welcome');
})->name('welcome'); 

Route::get('checkout','App\Http\Controllers\CheckoutController@checkout');
Route::post('checkout','App\Http\Controllers\CheckoutController@afterpayment')->name('checkout.credit-card');

Route::get('contact', function () {
    return view('contact');
});

Route::post('/auth/save',[MainController::class,'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class,'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class,'logout'])->name('auth.logout');
Route::post('/auth/login',[MainController::class,'login'])->name('auth.login');
Route::post('/auth/register',[MainController::class,'register'])->name('auth.register');


Route::group(['middleware'=>['AuthCheck']],function(){
    Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class,'register'])->name('auth.register');

    Route::get('/user/dashboard',[MainController::class, 'dashboard']);
    
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
   
});
Route::get('post/{slug}', function($slug){
	$post = App\Models\Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});
 */

Route::view('/', 'checkout');
Route::view('/vue', 'checkout-vue');

Route::post('/checkout', function(Request $request) {
    // dd($request->all());

    // validation

    try {
        $charge = Stripe::charges()->create([
            'amount' => 20,
            'currency' => 'CAD',
            'source' => $request->stripeToken,
            'description' => 'Description goes here',
            'receipt_email' => $request->email,
            'metadata' => [
                'data1' => 'metadata 1',
                'data2' => 'metadata 2',
                'data3' => 'metadata 3',
            ],
        ]);

        // save this info to your database

        // SUCCESSFUL
        return back()->with('success_message', 'Thank you! Your payment has been accepted.');
    } catch (CardErrorException $e) {
        // save info to database for failed
        return back()->withErrors('Error! ' . $e->getMessage());
    }
});
