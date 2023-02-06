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

Route::get('/rd/xml/a/export/{from}/{to}/{id_cam}','Admin\ToolCloneController@export_js');
Route::get('/rd/xml/a/export_txt/{from}/{to}/{id_cam}','Admin\ToolCloneController@export_txt_rd');
Route::get('/rd/xml/a/export_txt_wiki/{from}/{to}/{id_cam}','Admin\ToolCloneController@export_txt_wiki');

Route::get('/rd/xml/a/createTH_rd/{from}/{to}/{id_cam}','Admin\ToolCloneController@createTH_rd');
Route::get('/rd/xml/a/createTH_wiki/{from}/{to}/{id_cam}','Admin\ToolCloneController@createTH_wiki');
Route::get('/rd/xml/a/createTH_wiki_new/{from}/{to}/{id_cam}/{chon}','Admin\ToolCloneController@createTH_wiki_new');
Route::get('/rd/xml/a/createTH_xds/{from}/{to}/{id_cam}','Admin\ToolCloneController@createTH_xds');

