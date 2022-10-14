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
    return view('welcome');
});

Route::get('users', 'App\Http\Controllers\UserController@index');
Route::get('products', 'App\Http\Controllers\ProductController@index');

/*
on:
  push:
    branches:
      main
name: 🚀 Deploy website on push
jobs:
  web-deploy:
    name: 🎉 Deploy
    runs-on: ubuntu-latest
    steps:
    - name: 🚚 Get latest code
      uses: actions/checkout@v2

    - name: 📂 Sync files
      uses: SamKirkland/FTP-Deploy-Action@4.3.2
      with:
        server: ftp.samkirkland.com
        username: ${{ secrets.ftp_username }}
        password: ${{ secrets.ftp_password }}
        server-dir: sub.ftp.samkirkland.com*/