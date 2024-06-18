<?php

namespace Fvfvfvfv\CodyfightClient\Enums;

enum Verdict: int
{
    case DRAW = 0;
    case BASED_ON_POINTS = 1;
    case BASED_ON_RYO_COUNT = 2;
    case TURN_TIMEOUT = 3;
    case MATCHMAKING_TIMEOUT = 4;
    case PLAYER_SURRENDERED = 5;
    case PLAYER_DEMOLISHED = 6;
    case GAME_TIMEOUT = 7;
    case GAME_CANCELED = 8;
}
