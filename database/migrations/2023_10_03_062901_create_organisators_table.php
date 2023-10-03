<?php

use App\Models\Organisator;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('organisators', function (Blueprint $table) {
            $table->id('org_id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Organisator::create(['name' => 'Minta Anita', 'description' => 'valami valami valami']);
        Organisator::create(['name' => 'Nagy Géza', 'description' => 'akarmi akarmi akarmi']);
        Organisator::create(['name' => 'Nagy Sándor', 'description' => 'megvalami megvalami megvalami']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisators');
    }
};
