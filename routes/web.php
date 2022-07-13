<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalendarController;
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

/*courses route */
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

/*Education (PLAMENS) route*/
// Route::resource('education', 'EducationFormController' , ['except' => ['store']]);
// Route::get('/education/add', 'EducationFormController@index');
// Route::post('/education/create-form', 'EducationFormController@store')->name('education.store');
// Route::get('/education/details/{id}', ['uses' => 'EducationFormController@details', 'as' => 'education.details']);
// Route::post('/education/store-details', 'EducationFormController@storeDetails')->name('education.storeDetails');
// Route::get('/education/finance/{id}', ['uses' => 'EducationFormController@finances', 'as' => 'education.finances']);
// Route::post('/education/store-finances', 'EducationFormController@storeFinances')->name('education.storeFinances');
// Route::get('/education/justifications/{id}', ['uses' => 'EducationFormController@justifications', 'as' => 'education.justifications']);
// Route::post('/education/store-justifications', 'EducationFormController@storeJustifications')->name('education.storeJustifications');

// Route::post('/education/insert', 'EducationFormController@insert')->name('education.insert');

// Route::get('/education/questions/create', 'EducationFormDescriptionQuestionController@create');
// Route::post('/education/questions', 'EducationFormDescriptionQuestionController@store');
Route::resource('education-form', 'EducationFormController' , ['except' => ['store']]);
Route::get('/education-form/add', 'EducationFormController@index');
Route::post('/education-form/create-form', 'EducationFormController@store')->name('education-form.store');
Route::post('/education-form/insert', 'EducationFormController@insert')->name('education-form.insert');


/*Technical (PLAMTAX) route*/
Route::resource('technical-form', 'TechnicalFormController' , ['except' => ['store']]);
Route::get('/technical-form/add', 'TechnicalFormController@index');
Route::post('/technical-form/create-form', 'TechnicalFormController@store')->name('technical-form.store');
Route::post('/technical-form/insert', 'TechnicalFormController@insert')->name('technical-form.insert');


/*Goal route*/
Route::resource('goal', 'GoalFormController');
Route::get('/goal/add', 'GoalFormController@index');

/*Legislation route */

Route::resource('legislation', 'LegislationController');
Route::get('/legislation/add', 'LegislationController@index');
Route::get('/legislation/file/{id}', ['uses' => 'LegislationController@file', 'as' => 'legislation.file']);
Route::get('legislation-npa', 'LegislationController@npa')->name('legislation.npa');
Route::get('legislation-tca', 'LegislationController@tca')->name('legislation.tca');

/* Calendar route */

Route::get('fullcalendar', 'FullCalendarController@index')->name('fullcalendar');

Route::get('load-events', 'EventController@loadEvents')->name('routeLoadEvents');
Route::resource('/event-edit', 'EventController', ['except' => ['create','store','update','destroy','show','index']]);
// Route::get('event-edit/{id}', 'EventController@edit')->name('routeEventEdit');
Route::put('event-update', 'EventController@update')->name('routeEventUpdate');
Route::post('event-store', 'EventController@store')->name('routeEventStore');
Route::delete('event-destroy', 'EventController@destroy')->name('routeEventDelete');
Route::get('event-briefing', 'EventController@briefing')->name('briefing');

/* Fast Events route */

Route::put('fast-event-update', 'FastEventController@update')->name('routeFastEventUpdate');
Route::post('fast-event-store', 'FastEventController@store')->name('routeFastEventStore');
Route::delete('fast-event-destroy', 'FastEventController@destroy')->name('routeFastEventDelete');


/* Event Types route */
Route::resource('/event-types', 'EventTypeController', ['except' => ['create']]);



/*PsychoEvaluation route */

Route::resource('psycho', 'PsychoEvaluationController');
Route::get('/psycho/add', 'PsychoEvaluationController@index');
Route::get('/psycho/file/{id}', ['uses' => 'PsychoEvaluationController@file', 'as' => 'psycho.file']);
Route::get('psycho-evaluation', 'PsychoEvaluationController@evaluation')->name('psycho.evaluation');
Route::get('psycho-profile', 'PsychoEvaluationController@profile')->name('psycho.profile');