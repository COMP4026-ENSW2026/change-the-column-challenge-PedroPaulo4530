<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('pets')) {
        Schema::create('pets', function (Blueprint $table) {
            

            $table->id();
            $table->string('name');
            $table->enum('specie', [
                'cachorro',
                'gato',
                'papagaio',
                'coelho',
                'cobra',
                'cavalo',
                'zebra',
                'tartaruga',
                'rato',
                'camaleão',
                'dragão de komodo',
                'camelo',
                'periquito'
            ]);
            $table->string('color');
            $table->enum('size', ['xs', 'sm', 'md', 'lg', 'xl']);
            $table->timestamps();
            DB::statement('UPDATE `pets` SET `specie` = "cachorro" WHERE `specie` = "dog"');
            DB::statement('UPDATE `pets` SET `specie` = "dragão de komodo" WHERE `specie` = "dragao de komodo"');
            DB::statement('UPDATE `pets` SET `specie` = "coelho" WHERE `specie` = "bunny"');
            DB::statement('UPDATE `pets` SET `specie` = "tartaruga" WHERE `specie` = "bulbassauro"');
            DB::statement('UPDATE `pets` SET `specie` = "tartaruga" WHERE `specie` = "squirtle"');
            DB::statement('UPDATE `pets` SET `specie` = "mamba-negra" WHERE `specie` = "cobra"');
            DB::statement('UPDATE `pets` SET `specie` = "rato" WHERE `specie` = "pikachu"');

            DB::statement('UPDATE `pets` SET `size` = "sm" WHERE `size` = "SM"');
            DB::statement('UPDATE `pets` SET `size` = "sm" WHERE `size` = "small"');
            DB::statement('UPDATE `pets` SET `size` = "md" WHERE `size` = "m"');
            DB::statement('UPDATE `pets` SET `size` = "md" WHERE `size` = "M"');
            DB::statement('UPDATE `pets` SET `size` = "md" WHERE `size` = "medium"');
            DB::statement('UPDATE `pets` SET `size` = "lg" WHERE `size` = "L"');
            DB::statement('UPDATE `pets` SET `size` = "lg" WHERE `size` = "large"');
        });
    }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
