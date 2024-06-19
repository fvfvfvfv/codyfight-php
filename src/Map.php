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

        if (isset($params[0]) && $params[0]) {
            foreach ($params[0] as $tile) {
                $tiles[] = Tile::fromArray($tile);
            }
        }

        $map = new self();
        $map->tiles = $tiles;

        return $map;
    }
}
