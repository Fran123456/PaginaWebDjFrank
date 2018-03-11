<?php
/*
Route::get('/', function () {
    return view('inicio');
});

Route::get('/', function () {
    return view('inicio');
})->name('Home');
*/

Route::get('/', 'Web\GaleryMejorController@galeryMejor')->name('Home');

Route::get('/', 'Web\GaleryMejorController@galeryMejor');


Route::get('/Sobre', function () {
    return view('About');
});
Route::get('/Sobre', function () {
    return view('About');
})->name('Sobre');


Route::get('/Home', function () {
    return view('inicio');
});


Route::get('/Equipo', function () {
    return view('Team');
});

Route::get('/Equipo', function () {
    return view('Team');
})->name('Equipo');

Route::get('/Contacto', function () {
    return view('Contact');
});

Route::get('/Contacto', function () {
    return view('Contact');
})->name('Contacto');

/*Route::get('/Videos', function () {
    return view('Videos');
});

Route::get('/Videos', function () {
    return view('Videos');
})->name('Videos');

Route::get('/Servicios', function () {
    return view('Services');
});

Route::get('/Servicios', function () {
    return view('Services');
})->name('Servicio');


*/
Route::get('Materiales', 'Web\ServiceController@service')->name('Materiales');

Route::get('Videos', 'Web\VideoController@videos')->name('Videos');

Route::get('mixes-remixes', 'Web\GaleryController@galery')->name('mixes-remixes');
Route::get('mixes-remixes/{slug}', 'Web\GaleryController@post')->name('post');

Route::get('Categoria/{slug}', 'Web\GaleryController@category')->name('category');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Web panel
//Route::resource('posts', 'Admin\GaleriaAdminController');
Route::resource('categories', 'Admin\CategoriaAdminController');
Route::resource('posts', 'Admin\PostController');
Route::resource('PostMejor', 'Admin\PostMejorController');
Route::resource('videos', 'Admin\VideoAdminController');
Route::resource('ofertas', 'Admin\OfertaAdminController');
Route::resource('services', 'Admin\ServiceAdminController');
