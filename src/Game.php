<?php

namespace Fvfvfvfv\CodyfightClient;

class Game
{
    public array $state;
    public array $players;
    public array $specialAgents;
    public array $map;
    public array $verdict;

    public static function createFromArray(array $params): self
    {
        $game = new self();
        $game->state = $params['state'];
        $game->players = $params['players'];
        $game->specialAgents = $params['special_agents'];
        $game->map = $params['map'];
        $game->verdict = $params['verdict'];

        return $game;
    }
}
