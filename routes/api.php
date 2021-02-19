<?php

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('customers', function() {
    return Customer::all();
});

Route::post('customers', function(Request $request) {
    return Customer::create($request->all());
});

Route::put('customers/{id}', function(Request $request, $id) {
    $customer = Customer::findOrFail($id);
    $customer->update($request->all());
    return $customer;
});

Route::delete('customers/{id}', function($id) {
    Customer::find($id)->delete();
    return 204;
});

