<?php

use App\Http\Controllers\AbsensiController;
use Auth0\Laravel\Facade\Auth0;
use Illuminate\Support\Facades\Route;

Route::get('/private', function () {
  return response('Welcome! You are logged in.');
})->middleware('auth');

Route::get('/scope', function () {
  return response('You have `read:messages` permission, and can therefore access this resource.');
})->middleware('auth')->can('read:messages');

Route::get('/', function () {
  if (!auth()->check()) {
    return response('You are not logged in. <a href="/login">Login Here!</a>');
  }

  $user = auth()->user();
  $name = $user->name ?? 'User';
  $email = $user->email ?? '';

  return view('welcome');
  // return response("Hello {$name}! Your email address is {$email}. <a href='http://localhost:8000/logout'>Logout!</a>");
});

Route::get('/absensi', function() {
  if (!auth()->check()) {
    return response('You are not logged in. <a href="/login">Login Here!</a>');
  }

  $user = auth()->user();
  $name = $user->name ?? 'User';
  $email = $user->email ?? '';

  return view('absensi');
});

Route::post('absensi', [AbsensiController::class, 'logicAbsensi'])->name('logicAbsensi')->middleware('auth');


Route::get('/colors', function () {
  $endpoint = Auth0::management()->users();

  $colors = ['red', 'blue', 'green', 'black', 'white', 'yellow', 'purple', 'orange', 'pink', 'brown'];

  $endpoint->update(
    id: auth()->id(),
    body: [
      'user_metadata' => [
        'color' => $colors[random_int(0, count($colors) - 1)]
      ]
    ]
  );

  $metadata = $endpoint->get(auth()->id()); // Retrieve the user's metadata.
  $metadata = Auth0::json($metadata); // Convert the JSON to a PHP array.

  $color = $metadata['user_metadata']['color'] ?? 'unknown';
  $name = auth()->user()->name;

  return response("Hello {$name}! Your favorite color is {$color}.");
})->middleware('auth');
