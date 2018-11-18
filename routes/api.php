<?php

use Illuminate\Http\Request;

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


/**
 * Route for Buyer Resources
 */
Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index', 'show']]);

/**
 * Route for Category Resources
 */
Route::resource('categories', 'Category\CategoryController', ['except' => ['create', 'edit']]);


/**
 * Route for Product Resources
 */
Route::resource('products', 'Product\ProductController', ['only' => ['index', 'show']]);

/**
 * Route for Seller Resources
 */
Route::resource('sellers', 'Seller\SellerController', ['only' => ['index', 'show']]);

/**
 * Route for Transaction Resources
 */
Route::resource('transactions', 'Transaction\TransactionController', ['only' => ['index', 'show']]);

/**
 * Route for User Resources
 */
Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);