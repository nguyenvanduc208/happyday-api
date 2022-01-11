<?php

use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);

Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::apiResource('/image','Api\ImageController')->only(['store','update','destroy']);
    Route::apiResource('/booking','Api\BookingController')->only(['store','update','destroy']);
    Route::apiResource('/bookingdetail','Api\BookingDetailController')->only(['store','update','destroy']);
    Route::apiResource('/checkdate','Api\CheckDateController')->only(['store','update','destroy']);
    Route::apiResource('/contact', 'Api\ContactController')->only(['store','update','destroy']);
    Route::apiResource('/about', 'Api\AboutController')->only(['store','update','destroy']);
    Route::apiResource('/post', 'Api\PostController')->only(['store','update','destroy']);
    Route::apiResource('/blog', 'Api\BlogController')->only(['store','update','destroy']);
    Route::apiResource('/food', 'Api\FoodController')->only(['store','update','destroy']);
    Route::apiResource('/rating', 'Api\RatingController')->only(['store','update','destroy']);
    Route::apiResource('/resort', 'Api\ResortController')->only(['store','update','destroy']);
    Route::apiResource('/category', 'Api\CateController')->only(['store','update','destroy']);
    Route::apiResource('/parent_category', 'Api\ParentCategoryController')->only(['store','update','destroy']);
    Route::apiResource('/customer', 'Api\CustomerController')->only(['store','update','destroy']);
    Route::apiResource('/comment', 'Api\CommentController')->only(['store','update','destroy']);
    Route::apiResource('/users', 'Api\UsersController')->only(['store','update','destroy']);
    Route::apiResource('/bank', 'Api\BankController')->only(['store','update','destroy']);
    Route::get('/logout',[AuthController::class,'logout']);
});



Route::apiResource('/image','Api\ImageController')->only(['index','show']);
Route::apiResource('/booking','Api\BookingController')->only(['index','show']);
Route::apiResource('/bookingdetail','Api\BookingDetailController')->only(['index','show']);
Route::apiResource('/checkdate','Api\CheckDateController')->only(['index','show']);
Route::apiResource('/contact', 'Api\ContactController')->only(['index','show']);
Route::apiResource('/about', 'Api\AboutController')->only(['index','show']);
Route::apiResource('/post', 'Api\PostController')->only(['index','show']);
Route::apiResource('/blog', 'Api\BlogController')->only(['index','show']);
Route::apiResource('/food', 'Api\FoodController')->only(['index','show']);
Route::apiResource('/rating', 'Api\RatingController')->only(['index','show']);
Route::apiResource('/resort', 'Api\ResortController')->only(['index','show']);
Route::apiResource('/category', 'Api\CateController')->only(['index','show']);
Route::apiResource('/parent_category', 'Api\ParentCategoryController')->only(['index','show']);
Route::apiResource('/customer', 'Api\CustomerController')->only(['index','show']);
Route::apiResource('/comment', 'Api\CommentController')->only(['index','show']);
Route::apiResource('/users', 'Api\UsersController')->only(['index','show']);
Route::apiResource('/bank', 'Api\BankController')->only(['index','show']);
Route::get('/booking/customer/{id}',[BookingController::class,'customer']);



