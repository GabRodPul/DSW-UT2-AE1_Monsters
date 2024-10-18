<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Carbon\Carbon;
use App\Enums\{MonsterClass, Element, Ailment};

class MonstersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('monsters')->insert([
            [
                "name"          => "Valstrax",
                "class"         => MonsterClass::ELDER_DRAGON->value,
                "element"       => Element::DRAGON->value,
                "ailment"       => Ailment::DRAGONBLIGHT->value,
                "weakness"      => Element::ICE->value,
                "info"          => "An elder dragon that soars at very high altitudes far from human habitation. Its flaming red wings are often the only visible sign of it, giving rise to its nickname, the Argent Comet. Those wings aren't just for flying, though, and are easily used to stab, rend and blow away its enemies. Occasionally, one can find the scorched shells it has left behind.",
                "created_at"    => Carbon::now(),
                "updated_at"    => Carbon::now(),
            ],
            [
                "name"      => "Magnamalo",
                "class"     => MonsterClass::FANGED_WYVERN->value,
                "element"   => Element::NONE->value,
                "ailment"   => Ailment::HELLFIREBLIGHT->value,
                "weakness"  => Element::WATER->value,
                "info"      => "A monster covered in an armour-like carapace. Feeding on the bones of corpses, it accumulates gas in its body that, when emitted, resembles ghostly flames parading around it. if struck by an attack while it is covered in this gas, you will be inflicted with hellfireblight, causing you to explode after a certain period of time.",
                "created_at"    => Carbon::now(),
                "updated_at"=> Carbon::now(),
            ],
            [
                "name"      => "Zinogre",
                "class"     => MonsterClass::FANGED_WYVERN->value,
                "element"   => Element::THUNDER->value,
                "ailment"   => Ailment::THUNDERBLIGHT->value,
                "weakness"  => Element::WATER->value,
                "info"      => "MH4U-Zinogre Icon 	Fanged wyverns whose bodies are streaked with electricity. Sharp claws and strong limbs allow them to thrive in mountainous terrain. During hunts, they gather numerous Thunderbugs to boost their power and enter a supercharged state.",
                "created_at"    => Carbon::now(),
                "updated_at"=> Carbon::now(),
            ],
        ]);
    }
}
