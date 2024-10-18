<?php
namespace App\Enums;

enum Element: string
{
    case NONE       = "";
    case FIRE       = "Fire";
    case WATER      = "Water";
    case THUNDER    = "Thunder";
    case ICE        = "Ice";
    case DRAGON     = "Dragon";

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}