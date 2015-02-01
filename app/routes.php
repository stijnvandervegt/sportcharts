<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/sports/{sportId}', array('uses' => 'SportController@showList', 'as' => 'showCompetitionList'));
Route::get('/competitions/{competitionId}', array('uses' => 'CompetitionController@showCompetition', 'as' => 'showCompetition'));


Route::get('/player-stats/{playerId}', array('uses' => 'StatController@getPlayerStats', 'as' => 'playerStats'));
Route::get('/game-stats/{playerId}', array('uses' => 'StatController@getGameStats', 'as' => 'gameStats'));



Route::get('/sport', function()
{
	return Competition::with('sport')->get();

});