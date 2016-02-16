<?php

$domain = Request::root();
if (starts_with($domain, 'http://'))
    $domain = substr ($domain, 7);
elseif (starts_with($domain, 'https://'))
    $domain = substr ($domain, 8);

$routing_schema = 'content';

switch($domain){
    case env('WEB') : App::setLocale('en'); $routing_schema = 'homepage'; break;
    case env('LT_WEB') : App::setLocale('lt'); break;
    case env('RU_WEB') : App::setLocale('ru'); break;
    case env('PL_WEB') : App::setLocale('pl'); break;
    default: App::setLocale('lt'); break;
}

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
if($routing_schema == 'content'){
	/*Route::get('/', function(){
	    return Redirect::to('http://'.env('WEB'), 301); 
	});*/
	Route::get('/', 'PagesController@index');
	foreach(Lang::get('routes') as $k => $v) {
	    Route::pattern($k, $v);
	}
	Route::get('/{seo}/','PagesController@seo');
	Route::get('/{programming}/','PagesController@programming');
	Route::get('/{design}/','PagesController@design');
	Route::get('/{services}/','PagesController@services');
	Route::get('/{contacts}/','PagesController@contacts');
	Route::post('send-mail', 'PagesController@sendMail');
} elseif($routing_schema == 'homepage') {
	Route::get('/', 'PagesController@index');
}
Route::get('sitemap', 'SitemapsController@index');
Route::get('robots.txt', function ()
{
	if (App::environment() == 'production') {
		// If on the live server, serve a nice, welcoming robots.txt.
		Robots::addUserAgent('*');
		Robots::addSitemap('sitemap');
	} else {
		// If you're on any other server, tell everyone to go away.
		Robots::addDisallow('*');
	}

	return Response::make(Robots::generate(), 200, ['Content-Type' => 'text/plain']);
});