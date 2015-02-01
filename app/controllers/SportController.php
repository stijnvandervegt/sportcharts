<?php

class SportController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Competition Controller
    |--------------------------------------------------------------------------
    |
    |
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showList($sportId)
    {

        $sport = Sport::with('competitions')->find($sportId);

        return View::make('competition.list')->with('competitions', $sport->competitions);
    }
}