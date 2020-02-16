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

Route::get('/home', 'HomeController@index')->name('home');


//Departments crud are here..........

Route::get('/allDepartment', 'DepartmentController@AllDepartment')->name('AllDepartment');
Route::get('/AddDepartment', 'DepartmentController@AddDepartment')->name('AddDepartment');
Route::post('/StoreDepartment', 'DepartmentController@StoreDepartment')->name('StoreDepartment');
Route::get('edit/department/{id}', 'DepartmentController@EditDepartment');
Route::post('update/department/{id}', 'DepartmentController@UpdateDepartment');
Route::get('delete/department/{id}', 'DepartmentController@DeleteDepartment');

Route::get('view/departmentById/{id}','DepartmentController@AllStudentByDepartment');


Route::get('/AddStudent', 'StudentController@AddStudent')->name('AddStudent');
Route::get('/AllStudent', 'StudentController@AllStudent')->name('AllStudent');
Route::post('/StoreStudent', 'StudentController@StoreStudent')->name('StoreStudent');
Route::get('view/student/{id}', 'StudentController@ViewStudent');
Route::get('edit/student/{id}', 'StudentController@EditStudent');
Route::post('update/student/{id}', 'StudentController@UpdateStudent');
Route::get('delete/student/{id}', 'StudentController@DeleteStudent');
