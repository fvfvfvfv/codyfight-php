<?php

namespace Fvfvfvfv\CodyfightClient;

use Fvfvfvfv\CodyfightClient\Enums\SpecialAgentType;

class SpecialAgent
{
    public int $id;
    public SpecialAgentType $type;
    public string $name;
    public array $stats;
    public array $position;

    public static function fromArray(array $params): self
    {
        $specialAgent = new self();
        $specialAgent->id = $params['id'];
        $specialAgent->type = SpecialAgentType::from($params['type']);
        $specialAgent->name = $params['name'];
        $specialAgent->stats = $params['stats'];
        $specialAgent->position = $params['position'];

        return $specialAgent;
    }
}
