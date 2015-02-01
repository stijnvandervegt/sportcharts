<?php

class StatController extends BaseController
{


    public function getPlayerStats($playerId)
    {
        $stats = PlayerStat::where('player_id', $playerId)->get();

        return $stats;

    }
    public function getGameStats($gameId)
    {
        $stats = PlayerStat::where('game_id', $gameId)->get();

        return $stats;

    }
}