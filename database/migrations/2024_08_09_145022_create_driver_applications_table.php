<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('driver_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('license');
            $table->date('license_expiration');
            $table->string('endorsements');
            // $table->boolean('background_check');
            $table->string('schedule');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->text('experience');
            $table->string('resume')->nullable(); // Store filename for the uploaded resume
            $table->string('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_applications');
    }
};
