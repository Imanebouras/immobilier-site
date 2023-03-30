<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('test', function () {
     echo'welcome to laravel';
});
Route::get('P1', function () {
    echo'je suis la page p1';
});

Route::get('P2', function () {
    echo'je suis la page p2';
});

Route::get('P3', function () {
    echo'je suis la page p3';
});

Route::get('P4', function () {
    echo'je suis la page p4';
});
Route::get('nn/{n?}', function ($n='Page nnnn') {
    echo'je suis la page '.$n;
});
Route::get('nn/{n}/s/', function ($n) {
    echo'je suis la page subordinate '.$n;
});
Route::get('nn/{n}/s/{sid}', function ($n,$sid) {
    echo'je suis la page subordibate  detauls'.$n .'vvv' . $sid ;
});
Route::get('controller','App\Http\Controllers\Controller@cont'
);
Route::view('/index','welcome',['id'=>1,'name'=>'fati']
);
Route::fallback( function(){ 
    echo'la page ne existe pas ';
}
);
Route::get('contrl1/{a}/{b}','App\Http\Controllers\calculer@somme'
);
Route::get('contrl2/{c}/{d}','App\Http\Controllers\calculer@produit'
);
Route::get('v','App\Http\Controllers\calculer@etudiant'
);
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/pageprincipale', function () {
    return view('pageprincipale');
})->middleware('firstm');

Route::get('register', function () {
    return view('register');
});
Route::get('employee/{id?}', function ($id=0) {
    return view('emplyee');
});
Route::get('employee/{id}/subordinates/', function ($id) {
    return view('subordinates');
});
Route::get('employee/{id}/subordinates/{subordinatesId}', function ($id,$subordinatesId) {
    return view('subordinatsDetails');
});




Route::get('/loginp', function () {
    return view('loginp');
})->name('loginp');

Route::get('/registerp', function () {
    return view('registerp');
})->name('registerp');

Route::get('/nav', function () {
    return view('nav');
})->name('nav');
                          

Route::resource('etudiants', EtudiantsController::class);
     
     
 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
