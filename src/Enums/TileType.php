<?php

namespace Fvfvfvfv\CodyfightClient\Enums;

enum TileType: int
{
    case BLANK = 0;
    case OBSTACLE = 1;
    case EXIT = 2;
    case WALL = 3;
    case REGEN_ENERGY = 4;
    case REGEN_ARMOR = 5;
    case REGEN_HIT = 6;
    case DIRECTIONAL_UP = 7;
    case DIRECTIONAL_DOWN = 8;
    case DIRECTIONAL_LEFT = 9;
    case DIRECTIONAL_RIGHT = 10;
    case TELEPORT = 11;
    case DEATH_PIT = 12;
    case ZAP_TRAP = 13;
    case MINE = 14;
    case BOOBY_TRAP = 15;
    case SAW_BOT = 16;
    case LESSER_OBSTACLE = 17;
    case ICE_TRAP = 18;
    case SENTRY = 19;
    case MYSTERY_1 = 20;
    case MYSTERY_2 = 21;
}
