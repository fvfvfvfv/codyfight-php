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

        foreach ($params as $row) {
            foreach ($row as $tile) {
                $tiles[] = Tile::fromArray($tile);
            }
        }

        $map = new self();
        $map->tiles = $tiles;

        return $map;
    }
}
