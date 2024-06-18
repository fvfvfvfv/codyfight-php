<?php

namespace Fvfvfvfv\CodyfightClient\Enums;

enum GameStatus: int
{
    case NON_INIT = -1;
    case INIT = 0;
    case PLAYING = 1;
    case TERMINATED = 2;
}
