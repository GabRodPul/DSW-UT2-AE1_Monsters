<?php
namespace App\Enums;

enum Ailment: string
{
    case NONE           = "";
    case POISON         = "Poison";
    case PARALYSIS      = "Paralysis";
    case SLEEP          = "Sleep";
    case STUN           = "Stun";
    case BLASTBLIGHT    = "Blastblight";    
    case BUBBLEBLIGHT   = "Bubbleblight";    
    case HELLFIREBLIGHT = "Hellfireblight";
    case FIREBLIGHT     = "Fireblight";
    case WATERBLIGHT    = "Waterblight";
    case THUNDERBLIGHT  = "Thunderblight";
    case ICEBLIGHT      = "Iceblight";
    case DRAGONBLIGHT   = "Dragonblight";

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}