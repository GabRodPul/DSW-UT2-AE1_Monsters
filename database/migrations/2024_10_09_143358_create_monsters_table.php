<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;

use App\Enums\{MonsterClass, Element, Ailment};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('monsters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('class', MonsterClass::values());
            $table->enum('element', Element::values());
            $table->enum('ailment', Ailment::values());
            $table->enum('weakness', Element::values());
            $table->text('info');
            $table->timestamps();
        });

        Artisan::call('db:seed', [
            '--class' => 'MonstersTableSeeder'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monsters');
    }
};
