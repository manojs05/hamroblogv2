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

/*Route::get('/', function(){

	return view('welcome');

});*/

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/



//FRONTEND ROUTES
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/admin/dashboard', 'Admin\DashboardController@index');
Route::get('/posts/{id}', 'PagesController@show');

//BACKEND ROUTES
Route::resource('/admin/posts', 'Admin\PostsController');

//BACKEND ROUTES
/*Route::get('/admin/posts', 'Admin\PostsController@index');
Route::get('/admin/posts/create', 'Admin\PostsController@create');
Route::post('/posts', 'Admin\PostsController@store');
Route::get('/admin/posts/{id}/edit', 'Admin\PostsController@edit');
Route::put('/posts/{id}', 'Admin\PostsController@update');
Route::get('/admin/posts/{id}', 'Admin\PostsController@show');
Route::delete('posts/{id}', 'Admin\PostsController@destroy');
*/



