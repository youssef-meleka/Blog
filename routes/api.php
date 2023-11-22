<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//-----------Post routes---------
//GET - return all
Route::get("showAllPosts",[PostController::class,'index']);

//GET - return by ID
Route::get("showPost/{id}",[PostController::class,'show']);

// //GET - Search by title
// Route::get("searchPost/{title}",[PostController::class,'search']);

// //POST
// Route::post("createPost",[PostController::class,'store']);

// //PUT- Update
// Route::put("updatePost/{id}",[PostController::class,'update']);

// //DELETE - delete
// Route::delete("deletePost/{id}",[PostController::class,'destroy']);

//as I am using resources we can use 'apiResource' as follows and only change the stated functions in postman
Route::apiResource("post",PostController::class);

//Register
Route::post("registerNewUser",[AuthController::class,'register']);

//Login
Route::post("loginUser",[AuthController::class,'login']);


// AUTHENTICATION - protected routes
Route::group(['middleware'=>['auth:sanctum']],function() {

    //GET - Search by title
    Route::get("searchPost/{title}",[PostController::class,'search']);

    //POST
    Route::post("createPost",[PostController::class,'store']);

    //PUT- Update
    Route::put("updatePost/{id}",[PostController::class,'update']);

    //DELETE - delete
    Route::delete("deletePost/{id}",[PostController::class,'destroy']);

    //POST - Logout
    Route::post("logoutUser",[AuthController::class,'logout']);





});
