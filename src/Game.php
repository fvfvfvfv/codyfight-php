<?php

namespace Fvfvfvfv\CodyfightClient;

use Fvfvfvfv\CodyfightClient\Enums\GameMode;
use Fvfvfvfv\CodyfightClient\Enums\GameStatus;

class Game
{
    public int $id;
    public GameStatus $status;
    public GameMode $mode;
    public array $stake;
    public int $round;
    public int $totalTurns;
    public int $totalRounds;
    public int $maxTurnTime;
    public int $turnTimeLeft;

    public Player $bearer;
    public Player $opponent;

    /**
     * @var array<SpecialAgent>
     */
    public array $specialAgents;
    public Map $map;
    public array $verdict;

    public static function fromArray(array $params): self
    {
        $game = new self();

        $game->id = $params['state']['id'];
        $game->status = GameStatus::from($params['state']['status']);
        $game->mode = GameMode::from($params['state']['mode']);
        $game->stake = $params['state']['stake'];
        $game->round = $params['state']['round'];
        $game->totalTurns = $params['state']['total_turns'];
        $game->totalRounds = $params['state']['total_rounds'];
        $game->maxTurnTime = $params['state']['max_turn_time'];
        $game->turnTimeLeft = $params['state']['turn_time_left'];
        $game->bearer = Player::fromArray($params['players']['bearer']);
        $game->opponent = Player::fromArray($params['players']['opponent']);
        $game->specialAgents = self::specialAgentsFromArray($params['specialAgents']);
        $game->map = Map::fromArray($params['map']);
        $game->verdict = $params['verdict'];

        return $game;
    }

    public static function specialAgentsFromArray(array $params): array
    {
        $specialAgents = [];

        foreach ($params as $specialAgent) {
            $specialAgents[] = SpecialAgent::fromArray($specialAgent);
        }

        return $specialAgents;
    }
}
