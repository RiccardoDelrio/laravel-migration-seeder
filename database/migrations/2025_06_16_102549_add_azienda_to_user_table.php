<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('azienda');
            $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno')->unique();
            $table->unsignedInteger('totale_carrozze');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);

        });
    }

    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('azienda');
            $table->dropColumn('stazione_partenza');
            $table->dropColumn('stazione_arrivo');
            $table->dropColumn('orario_partenza');
            $table->dropColumn('orario_arrivo');
            $table->dropColumn('codice_treno');
            $table->dropColumn('totale_carrozze');
            $table->dropColumn('in_orario');
            $table->dropColumn('cancellato');
        });
    }
};
