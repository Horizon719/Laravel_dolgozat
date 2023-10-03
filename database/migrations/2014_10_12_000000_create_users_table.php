<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('sex');
            $table->timestamps();
        });

        User::create(['name' => 'Róka Rudi', 'email' => 'Roru@valami.hu', 'sex' => 'férfi']);
        User::create(['name' => 'Kiss Pista', 'email' => 'Kipi@valami.hu', 'sex' => 'férfi']);
        User::create(['name' => 'Olga Róza', 'email' => 'Olro@valami.hu', 'sex' => 'nő']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
