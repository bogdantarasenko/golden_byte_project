<?php
use Illuminate\Http\Response;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'SiteController@index');

Route::get('/place/{id}', 'SiteController@viewplace');

Route::get('/placelist/{id}', 'SiteController@viewplacelist');

Route::get('/auth/login','AuthController@loginform');

Route::post('/auth/login','AuthController@authenticate');

Route::get('/auth/logout','AuthController@logout');

Route::get('/auth/signup','AuthController@signupview');

Route::post('/auth/signup','AuthController@signup');


Route::get('/user/{id}', 'HomeController@index');

Route::get('/addtomenu', 'HomeController@addtomenuview');

Route::post('/addtomenu', 'HomeController@addtomenu');

Route::post('/user/addAvatar', 'HomeController@addAvatar');

Route::get('/map', 'HomeController@map');

Route::post('/addmap', 'HomeController@postdatatomap');

Route::get('/delete/{id}', 'HomeController@deletemenucart');

Route::get('/addavatar', 'HomeController@viewaddavatar');

Route::get('/updatemenu/{id}', 'HomeController@getupdatemenu');

Route::post('/user/updatemenu', 'HomeController@postupdatemenu');

/*
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

// RSET API routes...

//get all cafe's
Route::get('/api/getallcafe/','RestController@getallcafe');

Route::get('/api/getallcafe/{id}', 'RestController@getcafe');

Route::get('/api/getmenu/{id}', 'RestController@getmenu');

Route::get('/api/getcafebytype/{type}', 'RestController@getcafebytype');



/*

Route::get('/api/v1/categories/{id?}', ['middleware' => 'auth.basic', function($id = null) {
if ($id == null) {
    $categories = App\Category::all(array('id', 'name'));
} else {
    $categories = App\Category::find($id, array('id', 'name'));
}
return Response::json(array(
            'error' => false,
            'user' => $categories,
            'status_code' => 200
        ));
}]);
*/
