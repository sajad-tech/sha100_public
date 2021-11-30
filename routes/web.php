<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
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

Route::get('/', function (Request $request) {
    $share = DB::select('SELECT files.soft_name, files.Avatar, files.viewCounter, files.downCounter, files.uDate, files.userid, files.filehash FROM files WHERE files.isApprove = 1 ORDER BY files.uDate DESC LIMIT 25', []);
    //loop share and replace udate with year only
    foreach ($share as $key => $value) {
        $share[$key]->uDate = substr($share[$key]->uDate, 0, 4);
    }
    //validate search query
    $search = Request::get('search');
    if ($search) {
        $search = '%' . $search . '%';
        $result = DB::select('SELECT files.soft_name, files.Avatar, files.viewCounter, files.downCounter, files.uDate, files.userid, files.filehash FROM files WHERE files.isApprove = 1 AND files.soft_name LIKE ? ORDER BY files.uDate DESC LIMIT 25', [$search]);
        //loop share and replace udate with year only
        foreach ($result as $key => $value) {
            $result[$key]->uDate = substr($result[$key]->uDate, 0, 4);
        }
        return view('welcome', ['share' => [], 'search'=>[]]);
    }
    return view('welcome', ['share' => []]);
});
