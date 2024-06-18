<?php

namespace Fvfvfvfv\CodyfightClient\Enums;

enum GameState: int
{
    case NOT_INITIALIZED = 0;
    case PLAYERS_REGISTERING = 1;
    case IN_PROGRESS = 2;
    case ENDED = 3;
}
