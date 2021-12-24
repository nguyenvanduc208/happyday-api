<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/image','Api\ImageController');
Route::apiResource('/booking','Api\BookingController');
Route::apiResource('/bookingdetail','Api\BookingDetailController');
Route::apiResource('/checkdate','Api\CheckDateController');
Route::apiResource('/contact', 'Api\ContactController');
Route::apiResource('/about', 'Api\AboutController');
Route::apiResource('/post', 'Api\PostController');
Route::apiResource('/blog', 'Api\BlogController');
Route::apiResource('/food', 'Api\FoodController');
Route::apiResource('/rating', 'Api\RatingController');
Route::apiResource('/resort', 'Api\ResortController');
Route::apiResource('/category', 'Api\CateController');
Route::apiResource('/parent_category', 'Api\ParentCategoryController');
Route::apiResource('/customer', 'Api\CustomerController');
Route::apiResource('/comment', 'Api\CommentController');
Route::apiResource('/users', 'Api\UsersController');

