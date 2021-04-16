<?php

use ForceField\Routing\Router;
use ForceField\Network\Url;
use ForceField\Network\Navigate;
use ForceField\Security\Password;
use Hologram\Authenticate\Auth;
use App\Models\Users;

// a simple redirect
Router::get('/', function () {
	$view = view('main'); // main
	$view->title('SIMP | Welcome');
	return $view;
});

//homepage redirect
Router::get('/homepage/', function () {
	$view = view('homepage'); //[ 'message' => $message ]
	$view->title('SIMP | Homepage');
	//$view->body()->append('<h1>Welcome</h1>');
	return $view;
});

//about redirect
Router::get('/about/', function () {
	$view = view('about');
	$view->title('SIMP | About');
	return $view;
});

//login redirect
Router::get('/login/', function () {
        if (Auth::user())
        Navigate::go('https://www.simp.page/homepage');
        $view = view('login');
        $view->title('SIMP | Login');
        return $view;
});

Router::post('/login/', function() {
    $view = view('login');
    $view->title('SIMP | Login');
    if ($view->form('login')->login('username'))
    {
	Navigate::go('https://www.simp.page/homepage');
        return $view();
    }
    return $view;
});
/*
// https://www.simp.page/@Sean
// https://www.simp.page/Seans
Router::get('/{username}/', function($username) {
	$profile_user = null;
	$users = new Users();
	$profile_user = $users->get($username);
	if (!$profile_user)
		return 404; // user not found
 
	$view = view('profile', [
		'profile_user' => $profile_user
	]);
	
	return $view;
})
->limit('username', '\@[a-zA-Z_][a-zA-Z0-9]+')
;
*/

//message redirect
Router::get('/messages/', function() {
	$view = view('messages');
	$view->title('SIMP | Messages');
	return $view;
});

//settings redirect
Router::get('/settings/', function () {
	$view = view('settings');
	$view->title('SIMP | Settings');
	return $view;
});

// Default 404
Router::error404('/', function () {
    $view = view('site');
    $view->title('My Site | 404 Error');
    $view->find('h1')->text('404 Page Not Found');
    return $view;
});

/**
 * Global Routes
 */

// Images
Router::get('/img/{img}', function ($img) {
    // File exists or 404
    $url = Url::current();
    if (is_file(LIBPATH . '/images/' . $img))
        return image($img);
    $site = $url->domain(2) . '/';
    return ($file = image($site . $img)) ? $file : 404;
})->limit('img', '[a-zA-Z0-9\_\-]+\.(jpg|jpeg|bmp|png|gif|svg)');

// Font
Router::get('/font/{font}', function ($font) {
    // File exists or 404
    return ($file = font($font)) ? readfile($file->fullpath()) : 404;
})->limit('font', '[a-zA-Z0-9\_\-]+\.(otf|ttf|woff|woff2)');

// CSS
Router::get('/css/{css}', function ($css) {
    // File exists or 404
    $site = '';
    $url = Url::current();
    $globals = [
        'fonts.css',
        'main.css'
    ];
    if (! in_array($css, $globals))
        $site = $url->domain(2) . '/' . $url->domain(3) . '/';
    
    return ($file = css(str_replace('.css', '', $site . $css))) ? $file : 404;
})->limit('css', '[a-zA-Z0-9\_\-]+\.css');

// JavaScript
Router::get('/js/{js}', function ($js) {
    if ($js == 'jquery.js')
        return getfile(LIBPATH . '/js/jquery.min.js');
    
    // File exists or 404
    $site = '';
    $url = Url::current();
    
    // If not in root JS directory
    if (! is_file(LIBPATH . '/js/' . $js))
        $site = $url->domain(2) . '/';
    
    return ($file = js(str_replace('.js', '', $site . $js))) ? $file : 404;
})->limit('js', '[a-zA-Z0-9\_\-]+\.js');
