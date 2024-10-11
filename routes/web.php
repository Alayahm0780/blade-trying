<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\CheckIfNameIsAhmed;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/mahmod', [TestController::class, 'mahmod']);
Route::get('/name/{name?}', [TestController::class, 'printName']);
Route::resource('posts', PostController::class);

// Route::controller(TestController::class)->prefix('/test')->group(
//     function () {
// Route::get('/hello', SingleController::class)->middleware('check_if_ahmad');

//         Route::get('/name/{name?}', 'printName');
//     }
// );
// // Route::get('/jobs', function () {
// //     return view('jobs', [
// //         $jobs=
// //             [
// //                 [
// //                     'id' => 1,
// //                     'title' => 'director',
// //                     'salary' => '500,000sp'
// //                 ],
// //                 [
// //                     'id' => 2,
// //                     'title' => 'programmer',
// //                     'salary' => '200,000sp'
// //                 ],
// //                 [
// //                     'id' => 3,
// //                     'title' => 'teacher',
// //                     'salary' => '400,000sp'
// //                 ],
// //             ]
// //     ]);
// // });
// // Arr::first($jobs, fn($job) => $job['id'] = $id);
// // ;
// // dd($job);
// Route::get(
//     '/jobs/{id}',
//     function ($id) {
//         dd($id);
//         return view('contact');
//     }
// );
// Route::get(
//     '/contact',
//     function () {
//         return view('contact');
//     }
// );