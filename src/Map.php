<?php

namespace Fvfvfvfv\CodyfightClient;

class Map
{
    /**
     * @var array<Tile>
     */
    public array $tiles;

    public static function fromArray(array $params): self
    {
        $tiles = [];

        foreach ($params as $param) {
            $tiles[] = Tile::fromArray($param);
        }

        $map = new self();
        $map->tiles = $tiles;

        return $map;
    }
}
