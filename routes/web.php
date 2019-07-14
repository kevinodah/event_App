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
Route::group(['middleware'=>'auth'], function(){
// EVENTS

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-event', 'EventsController@AddEventForm')->name('newevent');
Route::post('/add', 'EventsController@AddEvent')->name('event.save');
Route::get('/events', 'EventsController@ShowEvent')->name('events');
Route::get('/events/edit/{id}', 'EventsController@ShowEditEventForm')->name('editEventForm');
Route::put('/events/update/{id}', 'EventsController@UpdateEvent')->name('update.event');
Route::delete('/events/delete/{id}', 'EventsController@destroy')->name('destroy.event');

// EVENTDETAILS
Route::get('/eventplan/{id}', 'EventDetailsController@addEventPlan')->name('event.plan');
Route::post('/createvenue/{id}', 'VenueController@createVenue')->name('create.venue');
Route::post('/createtime/{id}', 'TimeController@createTime')->name('create.time');
Route::post('createcost/{id}', 'CostController@createCost')->name('create.cost');
Route::delete('/deletevenue/{venue_id}/{event_id}', 'VenueController@destroyvenue')->name('destroy.venue');
Route::delete('/deletetime/{time_id}/{event_id}', 'timeController@destroytime')->name('destroy.time');
Route::get('/reports/{id}', 'EventDetailsController@reports')->name('reports.votes');
Route::get('/suggestion/{id}', 'EventDetailsController@showSuggestionForm')->name('show.suggestion');
Route::post('/voted/{id}', 'EventDetailsController@voted')->name('voted.done');
Route::get('/voteverify', 'EventDetailsController@verifyvote')->name('vote.verify');
Route::get('/publishverify', 'EventDetailsController@published')->name('publish.verify');
});
// Route::get()
// Route::get('/suggestion/{id}', 'EventDetailsController@showSuggestionForm')->name('show.suggestion');
// Route::post('/voted/{id}', 'EventDetailsController@voted')->name('voted.done');