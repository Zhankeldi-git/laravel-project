<?php



Route::get('/', function () {
    return view('notes');
})->name('notes');;

Route::get('/my-notes', function () {
    return view('mynotes');
})->name('mynote');;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');;

Route::get('/login', function () {
    return view('login');
})->name('login');;

Route::post('/contact/form', 'ContactController@submit')->name('formcontact');
Route::post('/mynote/add', 'NoteController@addNote')->name('notesadd');
Route::get('/mynote', 'NoteController@allNote')->name('mynote');
Route::get('/mynote/{id}', 'NoteController@deleteNote')->name('mynote-delete');



