<?php

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
        Schema::create('contact_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('phone', 30);
            $table->string('email', 254)->nullable();
            $table->string('company', 160)->nullable();
            $table->string('service', 80)->nullable();
            $table->text('details')->nullable();
            $table->string('website', 255)->nullable();
            $table->string('status', 32)->default('new');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_enquiries');
    }
};
