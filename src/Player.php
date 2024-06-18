<?php

namespace Fvfvfvfv\CodyfightClient;

class Player
{
    public string $name;
    public string $owner;
    public array $stats;

    public int $turn;

    public bool $isPlayerTurn;

    public array $position;

    public array $possibleMoves;
    public array $skills;
    public array $score;

    public Codyfighter $codyfighter;

    public static function fromArray(array $params): self
    {
        $player = new self();
        $player->name = $params['name'];
        $player->owner = $params['owner'];
        $player->stats = $params['stats'];
        $player->turn = $params['turn'];
        $player->isPlayerTurn = $params['is_player_turn'];
        $player->position = $params['position'];
        $player->possibleMoves = $params['possible_moves'];
        $player->skills = $params['skills'];
        $player->score = $params['score'];
        $player->codyfighter = Codyfighter::fromArray($params['codyfighter']);

        return $player;
    }
}
