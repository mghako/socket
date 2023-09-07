<?php

use App\Events\NoticeToGenerate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $live_first = rand(1, 9);
    //     $live_second = rand(1, 9);
    //     $firstTwoNumSet = 18;
    //     $generateTwoNum = rand(10, 90);
    //     $decimal = rand(10, 90);
    //     $setNum = $firstTwoNumSet.$generateTwoNum.$live_first.'.'.$decimal;
    //     $firstTwoNum = 16;
    //     $generateTwoNum = rand(10, 90);
    //     $generateOneNum = rand(0, 9);
    //     $generateOneDecNum = rand(0, 9);
    //     $valueNum = $firstTwoNum.$generateTwoNum.$generateOneNum.'.'.$generateOneDecNum.$live_second;
    //     $set = null;
    //     $value = null;
    //     if ($live_first) {
    //         $set = number_format($setNum, 2);
    //     }
    //     if ($live_second) {
    //         $value = number_format($valueNum, 2);
    //     }
    //     $itemData = [
    //         'live_first' => $live_first,
    //         'live_second' => $live_second,
    //         'live_set' => $set,
    //         'live_value' => $value,
    //     ];
    //     NoticeToGenerate::dispatch($itemData);
    return view('welcome');
});
