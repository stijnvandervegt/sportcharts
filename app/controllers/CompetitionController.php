<?php

class CompetitionController extends BaseController {
    
    public function showCompetition($competitionId) {
        $competition = Competition::with('seasons')->find($competitionId);

        return View::make('competition.single')->with('competition', $competition);
    }

}
