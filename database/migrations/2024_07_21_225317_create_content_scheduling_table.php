<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('content_scheduling', function (Blueprint $table) {
            $table->id();
            $table->foreignId('content_id')->constrained('contents')->cascadeOnDelete();
            $table->foreignId('media_organization_id')->constrained('media_organization')->cascadeOnDelete();
            $table->dateTime('schedule_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('content_scheduling');
    }
};