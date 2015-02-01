<?php

class CompetitionController extends BaseController {

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

    public function showCompetition($competitionId) {
        $competition = Competition::with('seasons')->find($competitionId);

        return View::make('competition.single')->with('competition', $competition);
    }

}
