<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "name" => "bambang hermanto",
        "nip" => "199507112020121015"]);
});
Route::get('/tambah', function () {
    return view('layanan.tambah',[
        "title" => "Tambah Pegawai",
        "nip" => "199507112020121015"]);
});