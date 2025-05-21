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
    Schema::create('otps', function (Blueprint $table) {
        $table->id();
        $table->string('ref_no')->unique();
        $table->string('mobile');
        $table->string('otp_code');
        $table->string('verification_status')->nullable();
        $table->timestamp('expires_at');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('otps');
    }
};
