<?php

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

Auth::routes();

Route::get('/home', 'adminController@index');

/**
 * admin
 */
Route::group(['middleware' => ['role:admin']], function() {
    Route::get('admin', 'adminController@index');

    //user
    Route::get('admin/users', 'Admin\userController@index');
    // Route::get('admin/users/create', 'Admin\UserController@create');
    Route::get('admin/users/edit/{id}', 'Admin\userController@edit');
    // Route::post('admin/users/save', 'Admin\UserController@update');
    // Route::get('admin/users/delete/{id}', 'Admin\UserController@delete');

    // //permission
    // Route::get('admin/user/permissions', 'Admin\PermissionController@index');
    // Route::get('admin/user/permission/create', 'Admin\PermissionController@create');
    // Route::post('admin/user/permission/save', 'Admin\PermissionController@update');
    // Route::get('admin/user/permission/edit/{id}', 'Admin\PermissionController@edit');
    // Route::get('admin/user/permission/delete/{id}', 'Admin\PermissionController@delete');

    // //roles
    // Route::get('admin/user/roles', 'Admin\RoleController@index');
    // Route::get('admin/user/role/create', 'Admin\RoleController@create');
    // Route::post('admin/user/role/save', 'Admin\RoleController@update');
    // Route::get('admin/user/role/edit/{id}', 'Admin\RoleController@edit');
    // Route::post('admin/user/role/update/{id}', 'Admin\RoleController@update');
    // Route::get('admin/user/role/delete/{id}', 'Admin\RoleController@delete');
});