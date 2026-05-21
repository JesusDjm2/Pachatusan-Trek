<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private function dropForeignIfExists(string $table, string $column): void
    {
        $db = DB::getDatabaseName();
        $rows = DB::select(
            'SELECT CONSTRAINT_NAME FROM information_schema.KEY_COLUMN_USAGE
             WHERE TABLE_SCHEMA = ? AND TABLE_NAME = ? AND COLUMN_NAME = ?
             AND REFERENCED_TABLE_NAME IS NOT NULL',
            [$db, $table, $column]
        );
        foreach ($rows as $row) {
            $name = $row->CONSTRAINT_NAME ?? null;
            if ($name) {
                DB::statement("ALTER TABLE `{$table}` DROP FOREIGN KEY `{$name}`");
            }
        }
    }

    public function up(): void
    {
        $this->dropForeignIfExists('tours', 'country_id');
        DB::statement('ALTER TABLE `tours` MODIFY `country_id` BIGINT UNSIGNED NULL');
        Schema::table('tours', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries')->nullOnDelete();
        });

        $this->dropForeignIfExists('estours', 'pais_id');
        DB::statement('ALTER TABLE `estours` MODIFY `pais_id` BIGINT UNSIGNED NULL');
        Schema::table('estours', function (Blueprint $table) {
            $table->foreign('pais_id')->references('id')->on('paises')->nullOnDelete();
        });
    }

    public function down(): void
    {
        $this->dropForeignIfExists('tours', 'country_id');
        DB::statement('ALTER TABLE `tours` MODIFY `country_id` BIGINT UNSIGNED NOT NULL');
        Schema::table('tours', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries')->cascadeOnDelete();
        });

        $this->dropForeignIfExists('estours', 'pais_id');
        DB::statement('ALTER TABLE `estours` MODIFY `pais_id` BIGINT UNSIGNED NOT NULL');
        Schema::table('estours', function (Blueprint $table) {
            $table->foreign('pais_id')->references('id')->on('paises')->cascadeOnDelete();
        });
    }
};
