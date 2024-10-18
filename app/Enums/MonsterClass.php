<?php
namespace App\Enums;

enum MonsterClass: string
{
    case TEMNOCERAN     = "Temnoceran";
    case BIRD_WYVERN    = "Bird Wyvern";
    case FLYING_WYVERN  = "Flying Wyvern";
    case PISCINE_WYVERN = "Piscine Wyvern";
    case CARAPACEON     = "Carapaceon";
    case AMPHIBIAN      = "Amphibian";
    case FANGED_BEAST   = "Fanged Beast";
    case LEVIATHAN      = "Leviathan";
    case SNAKE_WYVERN   = "Snake Wyvern";
    case BRUTE_WYVERN   = "Brute Wyvern";
    case FANGED_WYVERN  = "Fanged Wyvern";
    case ELDER_DRAGON   = "Elden Dragon";
    case UNKNOWN        = "Unknown";
    case RELICTS        = "Relicts";

	public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}