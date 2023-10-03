<?php

use App\Models\Invitation;
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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id('invitation_id');
            $table->boolean('appeared');
            $table->foreignId('event_id')->references('event_id')->on('events');
            $table->foreignId('user_id')->references('user_id')->on('users');
            $table->timestamps();
        });

        Invitation::create(['appeared' => true, 'event_id' => '2', 'user_id' => '1']);
        Invitation::create(['appeared' => false, 'event_id' => '1', 'user_id' => '2']);
        Invitation::create(['appeared' => true, 'event_id' => '3', 'user_id' => '3']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
