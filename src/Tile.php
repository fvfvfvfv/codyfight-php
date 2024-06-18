<?php

namespace Fvfvfvfv\CodyfightClient;

use Fvfvfvfv\CodyfightClient\Enums\TileType;

class Tile
{
    public int $x;
    public int $y;
    public TileType $type;
    public string $name;
    public array $config;

    public static function fromArray(array $params): self
    {
        $tile = new self();
        $tile->x = $params['position']['x'];
        $tile->y = $params['position']['y'];
        $tile->type = TileType::from($params['type']);
        $tile->name = $params['name'];
        $tile->config = $params['config'];
        return $tile;
    }
}
