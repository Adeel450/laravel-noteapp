<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\NoteController@index')->name('notes.index');
// Display all notes
Route::get('/notes', 'App\Http\Controllers\NoteController@index')->name('notes.index');

// Display the form to create a new note
Route::get('/notes/create', 'App\Http\Controllers\NoteController@create')->name('notes.create');

// Store a new note in the database
Route::post('/notes', 'App\Http\Controllers\NoteController@store')->name('notes.store');

// Display a specific note
Route::get('/notes/{note}', 'App\Http\Controllers\NoteController@view')->name('notes.view');

// Display the form to edit a specific note
Route::get('/notes/{note}/edit', 'App\Http\Controllers\NoteController@edit')->name('notes.edit');

// Update a specific note in the database
Route::put('/notes/{note}', 'App\Http\Controllers\NoteController@update')->name('notes.update');

// Delete a specific note from the database
Route::delete('/notes/{note}', 'App\Http\Controllers\NoteController@ ')->name('notes. ');
