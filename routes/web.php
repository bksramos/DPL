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

Auth::routes();

Route::group(['middleware' => ['auth', 'auth.user']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
    
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/dashboard', function(){
    return view('layouts.master');
})->middleware(['auth', 'auth.admin']);

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
    Route::resource('/roles', 'RoleController', ['except' => ['create']]);
});

Route::resource('course', 'CourseController');
Route::get('/course/add', 'CourseController@index');

Route::get('/course/dashboard/{id}', ['uses' => 'CourseController@dashboard', 'as' => 'course.dashboard']);
Route::get('/course/report/{id}', ['uses' => 'CourseController@report', 'as' => 'course.report']);

/* Sections route */
Route::resource('section', 'SectionController', ['except' => ['show']]);
Route::get('/section', ['uses' => 'SectionController@index', 'as' => 'section.index']);
Route::get('/section/headship', ['uses' => 'SectionController@headship', 'as' => 'section.headship']);
Route::get('/section/secretary', ['uses' => 'SectionController@secretary', 'as' => 'section.secretary']);
Route::get('/section/SDO', ['uses' => 'SectionController@SDO', 'as' => 'section.SDO']);
Route::get('/section/SEN', ['uses' => 'SectionController@SEN', 'as' => 'section.SEN']);
Route::get('/section/SRH', ['uses' => 'SectionController@SRH', 'as' => 'section.SRH']);
Route::get('/section/SED', ['uses' => 'SectionController@SED', 'as' => 'section.SED']);

/*Education route*/
Route::resource('education', 'EducationFormController' , ['except' => ['store']]);
Route::get('/education/add', 'EducationFormController@index');
Route::post('/education/create-form', 'EducationFormController@store')->name('education.store');
Route::get('/education/details/{id}', ['uses' => 'EducationFormController@details', 'as' => 'education.details']);
Route::post('/education/store-details', 'EducationFormController@storeDetails')->name('education.storeDetails');
Route::get('/education/finance/{id}', ['uses' => 'EducationFormController@finances', 'as' => 'education.finances']);
Route::post('/education/store-finances', 'EducationFormController@storeFinances')->name('education.storeFinances');
Route::get('/education/justifications/{id}', ['uses' => 'EducationFormController@justifications', 'as' => 'education.justifications']);
Route::post('/education/store-justifications', 'EducationFormController@storeJustifications')->name('education.storeJustifications');

Route::post('/education/insert', 'EducationFormController@insert')->name('education.insert');

Route::get('/education/questions/create', 'EducationFormDescriptionQuestionController@create');
Route::post('/education/questions', 'EducationFormDescriptionQuestionController@store');

/*Goal route*/
Route::resource('goal', 'GoalFormController' , ['except' => ['store']]);
Route::get('/goal/add', 'GoalFormController@index');