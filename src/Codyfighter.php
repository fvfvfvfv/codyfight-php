<?php

namespace Fvfvfvfv\CodyfightClient;

use Fvfvfvfv\CodyfightClient\Enums\CodyfighterClass;
use Fvfvfvfv\CodyfightClient\Enums\CodyfighterRarity;

class Codyfighter
{
    public function __construct(public int $type,
                                public string $name,
                                public CodyfighterClass $class,
                                public CodyfighterRarity $rarity)
    {
    }

    public static function fromArray(array $params): self
    {
        return new self(
            $params['type'],
            $params['name'],
            CodyfighterClass::from($params['class']),
            CodyfighterRarity::from($params['rarity']));
    }
}
