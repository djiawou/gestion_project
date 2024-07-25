<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
return new class extends Migration{
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamp('start_date')->default(Carbon::now());
            $table->timestamp('end_date')->default(Carbon::now()->addMonth());
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        
        Schema::dropIfExists('projects');
    }
};
