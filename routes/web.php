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

// Player Profile - View
Route::get('viewplayer', function () {
    return view('/playerprofile/viewplayer');
});

//PROFILES TEMP START
Route::get('player1', function () {
    return view('/playerprofile/senior/pl1');
});

Route::get('player2', function () {
    return view('/playerprofile/senior/pl2');
});

Route::get('player3', function () {
    return view('/playerprofile/senior/pl3');
});

Route::get('player4', function () {
    return view('/playerprofile/senior/pl4');
});

Route::get('player5', function () {
    return view('/playerprofile/senior/pl5');
});

Route::get('player6', function () {
    return view('/playerprofile/senior/pl6');
});

Route::get('player7', function () {
    return view('/playerprofile/senior/pl7');
});

Route::get('player8', function () {
    return view('/playerprofile/senior/pl8');
});

Route::get('player9', function () {
    return view('/playerprofile/senior/pl9');
});

Route::get('player10', function () {
    return view('/playerprofile/senior/pl10');
});

Route::get('player11', function () {
    return view('/playerprofile/senior/pl11');
});

Route::get('player12', function () {
    return view('/playerprofile/senior/pl12');
});

Route::get('player13', function () {
    return view('/playerprofile/senior/pl13');
});

Route::get('player14', function () {
    return view('/playerprofile/senior/pl14');
});

Route::get('player15', function () {
    return view('/playerprofile/senior/pl15');
});

Route::get('player16', function () {
    return view('/playerprofile/senior/pl16');
});
Route::get('player17', function () {
    return view('/playerprofile/senior/pl17');
});

Route::get('player18', function () {
    return view('/playerprofile/senior/pl18');
});

Route::get('player19', function () {
    return view('/playerprofile/senior/pl19');
});

Route::get('player20', function () {
    return view('/playerprofile/senior/pl20');
});

Route::get('player21', function () {
    return view('/playerprofile/senior/pl21');
});

Route::get('player22', function () {
    return view('/playerprofile/senior/pl22');
});

Route::get('player23', function () {
    return view('/playerprofile/senior/pl23');
});

Route::get('player24', function () {
    return view('/playerprofile/senior/pl24');
});

Route::get('player25', function () {
    return view('/playerprofile/senior/pl25');
});


Route::get('player26', function () {
    return view('/playerprofile/senior/pl26');
});

Route::get('player27', function () {
    return view('/playerprofile/senior/pl27');
});

Route::get('player28', function () {
    return view('/playerprofile/senior/pl28');
});

Route::get('player29', function () {
    return view('/playerprofile/senior/pl29');
});



//PROFILES TEMP START ACADEMY
Route::get('player-academy1', function () {
    return view('/playerprofile/academy/pl1');
});

Route::get('player-academy2', function () {
    return view('/playerprofile/academy/pl2');
});

Route::get('player-academy3', function () {
    return view('/playerprofile/academy/pl3');
});

Route::get('player-academy4', function () {
    return view('/playerprofile/academy/pl4');
});

Route::get('player-academy5', function () {
    return view('/playerprofile/academy/pl5');
});

Route::get('player-academy6', function () {
    return view('/playerprofile/academy/pl6');
});

Route::get('player-academy7', function () {
    return view('/playerprofile/academy/pl7');
});

Route::get('player-academy8', function () {
    return view('/playerprofile/academy/pl8');
});

Route::get('player-academy9', function () {
    return view('/playerprofile/academy/pl9');
});

Route::get('player-academy10', function () {
    return view('/playerprofile/academy/pl10');
});

Route::get('player-academy11', function () {
    return view('/playerprofile/academy/pl11');
});

Route::get('player-academy12', function () {
    return view('/playerprofile/academy/pl12');
});

Route::get('player-academy13', function () {
    return view('/playerprofile/academy/pl13');
});

Route::get('player-academy14', function () {
    return view('/playerprofile/academy/pl14');
});

Route::get('player-academy15', function () {
    return view('/playerprofile/academy/pl15');
});

Route::get('player-academy16', function () {
    return view('/playerprofile/academy/pl16');
});
Route::get('player-academy17', function () {
    return view('/playerprofile/academy/pl17');
});

Route::get('player-academy18', function () {
    return view('/playerprofile/academy/pl18');
});

Route::get('player-academy19', function () {
    return view('/playerprofile/academy/pl19');
});

Route::get('player-academy20', function () {
    return view('/playerprofile/academy/pl20');
});

Route::get('player-academy21', function () {
    return view('/playerprofile/academy/pl21');
});

Route::get('player-academy22', function () {
    return view('/playerprofile/academy/pl22');
});

Route::get('player-academy23', function () {
    return view('/playerprofile/academy/pl23');
});

Route::get('player-academy24', function () {
    return view('/playerprofile/academy/pl24');
});

Route::get('player-academy25', function () {
    return view('/playerprofile/academy/pl25');
});

Route::get('match', function () {
    return view('/pages/match');
});

//PROFILES END ACADEMY

//PROFILES ACADEMY U13
Route::get('player-academy13-1', function () {
    return view('/playerprofile/academy13/pl1');
});

Route::get('player-academy13-2', function () {
    return view('/playerprofile/academy13/pl2');
});

Route::get('player-academy13-3', function () {
    return view('/playerprofile/academy13/pl3');
});

Route::get('player-academy13-4', function () {
    return view('/playerprofile/academy13/pl4');
});

Route::get('player-academy13-5', function () {
    return view('/playerprofile/academy13/pl5');
});

Route::get('player-academy13-6', function () {
    return view('/playerprofile/academy13/pl6');
});

Route::get('player-academy13-7', function () {
    return view('/playerprofile/academy13/pl7');
});

Route::get('player-academy13-8', function () {
    return view('/playerprofile/academy13/pl8');
});

Route::get('player-academy13-9', function () {
    return view('/playerprofile/academy13/pl9');
});

Route::get('player-academy13-10', function () {
    return view('/playerprofile/academy13/pl10');
});

Route::get('player-academy13-11', function () {
    return view('/playerprofile/academy13/pl11');
});

Route::get('player-academy13-12', function () {
    return view('/playerprofile/academy13/pl12');
});

Route::get('player-academy13-13', function () {
    return view('/playerprofile/academy13/pl13');
});

Route::get('player-academy13-14', function () {
    return view('/playerprofile/academy13/pl14');
});

Route::get('player-academy13-15', function () {
    return view('/playerprofile/academy13/pl15');
});

Route::get('player-academy13-16', function () {
    return view('/playerprofile/academy13/pl16');
});

Route::get('player-academy13-17', function () {
    return view('/playerprofile/academy13/pl17');
});

Route::get('player-academy13-18', function () {
    return view('/playerprofile/academy13/pl18');
});

Route::get('player-academy13-19', function () {
    return view('/playerprofile/academy13/pl19');
});

Route::get('player-academy13-20', function () {
    return view('/playerprofile/academy13/pl20');
});

Route::get('player-academy13-21', function () {
    return view('/playerprofile/academy13/pl21');
});

//PROFILES ACADEMY U15
Route::get('player-academy15-1', function () {
    return view('/playerprofile/academy15/pl1');
});

Route::get('player-academy15-2', function () {
    return view('/playerprofile/academy15/pl2');
});

Route::get('player-academy15-3', function () {
    return view('/playerprofile/academy15/pl3');
});

Route::get('player-academy15-4', function () {
    return view('/playerprofile/academy15/pl4');
});

Route::get('player-academy15-5', function () {
    return view('/playerprofile/academy15/pl5');
});

Route::get('player-academy15-6', function () {
    return view('/playerprofile/academy15/pl6');
});

Route::get('player-academy15-7', function () {
    return view('/playerprofile/academy15/pl7');
});

Route::get('player-academy15-8', function () {
    return view('/playerprofile/academy15/pl8');
});

Route::get('player-academy15-9', function () {
    return view('/playerprofile/academy15/pl9');
});

Route::get('player-academy15-10', function () {
    return view('/playerprofile/academy15/pl10');
});

Route::get('player-academy15-11', function () {
    return view('/playerprofile/academy15/pl11');
});

Route::get('player-academy15-12', function () {
    return view('/playerprofile/academy15/pl12');
});

Route::get('player-academy15-13', function () {
    return view('/playerprofile/academy15/pl13');
});

Route::get('player-academy15-14', function () {
    return view('/playerprofile/academy15/pl14');
});

Route::get('player-academy15-15', function () {
    return view('/playerprofile/academy15/pl15');
});

Route::get('player-academy15-16', function () {
    return view('/playerprofile/academy15/pl16');
});

Route::get('player-academy15-17', function () {
    return view('/playerprofile/academy15/pl17');
});

Route::get('player-academy15-18', function () {
    return view('/playerprofile/academy15/pl18');
});

Route::get('player-academy15-19', function () {
    return view('/playerprofile/academy15/pl19');
});

Route::get('player-academy15-20', function () {
    return view('/playerprofile/academy15/pl20');
});

Route::get('player-academy15-21', function () {
    return view('/playerprofile/academy15/pl21');
});

//PROFILES ACADEMY U17
Route::get('player-academy17-1', function () {
    return view('/playerprofile/academy17/pl1');
});

Route::get('player-academy17-2', function () {
    return view('/playerprofile/academy17/pl2');
});

Route::get('player-academy17-3', function () {
    return view('/playerprofile/academy17/pl3');
});

Route::get('player-academy17-4', function () {
    return view('/playerprofile/academy17/pl4');
});

Route::get('player-academy17-5', function () {
    return view('/playerprofile/academy17/pl5');
});

Route::get('player-academy17-6', function () {
    return view('/playerprofile/academy17/pl6');
});

Route::get('player-academy17-7', function () {
    return view('/playerprofile/academy17/pl7');
});

Route::get('player-academy17-8', function () {
    return view('/playerprofile/academy17/pl8');
});

Route::get('player-academy17-9', function () {
    return view('/playerprofile/academy17/pl9');
});

Route::get('player-academy17-10', function () {
    return view('/playerprofile/academy17/pl10');
});

Route::get('player-academy17-11', function () {
    return view('/playerprofile/academy17/pl11');
});

Route::get('player-academy17-12', function () {
    return view('/playerprofile/academy17/pl12');
});

Route::get('player-academy17-13', function () {
    return view('/playerprofile/academy17/pl13');
});

Route::get('player-academy17-14', function () {
    return view('/playerprofile/academy17/pl14');
});

Route::get('player-academy17-15', function () {
    return view('/playerprofile/academy17/pl15');
});

Route::get('player-academy17-16', function () {
    return view('/playerprofile/academy17/pl16');
});

Route::get('player-academy17-17', function () {
    return view('/playerprofile/academy17/pl17');
});

Route::get('player-academy17-18', function () {
    return view('/playerprofile/academy17/pl18');
});

Route::get('player-academy17-19', function () {
    return view('/playerprofile/academy17/pl19');
});

Route::get('player-academy17-20', function () {
    return view('/playerprofile/academy17/pl20');
});

Route::get('player-academy17-21', function () {
    return view('/playerprofile/academy17/pl21');
});
//Events - View
Route::get('events', function () {
    return view('/pages/events');
});

//Memberships - View
Route::get('membership', function () {
    return view('/pages/membership');
});

//Register - View
Route::get('register', function () {
    return view('/pages/register');
});

Route::get('login', function () {
    return view('/pages/login');
});

Route::get('privacy', function () {
    return view('/pages/privacy');
});

Route::get('terms-conditions', function () {
    return view('/pages/terms-conditions');
});

//Team - View
Route::get('viewteam', function () {
    return view('/pages/team');
});

//Team - View
Route::get('u20team', function () {
    return view('/pages/u20team');
});
Route::get('u17team', function () {
    return view('/pages/u17team');
});
Route::get('u15team', function () {
    return view('/pages/u15team');
});
Route::get('u13team', function () {
    return view('/pages/u13team');
});

//Post - View
Route::get('post', function () {
    return view('/posts/viewpost');
});

//About 
//Post - View
Route::get('about', function () {
    return view('/about');
});

Route::get('missionvision', function () {
    return view('/about/missionvision');
});

Route::get('history', function () {
    return view('/about/history');
});

Route::get('trophy', function () {
    return view('/about/trophy');
});

Route::get('azamcomplex', function () {
    return view('/about/azamcomplex');
});

Route::get('senior', function () {
    return view('/about/senior');
});

Route::get('board', function () {
    return view('/about/board');
});

Route::get('contact', function () {
    return view('/pages/contact');
});



//Temp POSTS
//Post - View
Route::get('post1', function () {
    return view('/posts/viewpost1');
});
Route::get('post2', function () {
    return view('/posts/viewpost2');
});
Route::get('post3', function () {
    return view('/posts/viewpost3');
});
Route::get('post4', function () {
    return view('/posts/viewpost4');
});
Route::get('post5', function () {
    return view('/posts/viewpost5');
});
Route::get('post6', function () {
    return view('/posts/viewpost6');
});

//Latest News - View
Route::get('latestnews', function () {
    return view('/pages/latestnews');
});
//Latest News - View
Route::get('newsupdates', function () {
    return view('/pages/newsupdates');
});
//Latest News - View
Route::get('breakingnews', function () {
    return view('/pages/breakingnews');
});


//Fixtures - View
Route::get('fixtures', function () {
    return view('/pages/fixtures');
});

Route::get('results', function () {
    return view('/pages/results');
});

Route::get('tables', function () {
    return view('/pages/tables');
});

//AZAMFC TV - View
Route::get('tv', function () {
    return view('/pages/tv');
});

//About Us - View
Route::get('about', function () {
    return view('/pages/about');
});