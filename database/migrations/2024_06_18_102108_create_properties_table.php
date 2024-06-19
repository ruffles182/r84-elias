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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('code')->unique();
            $table->string('link');
            $table->string('name');
            $table->string('address');
            $table->string('neighboorhood')->nullable();
            $table->string('map_link')->nullable();
            $table->string('agent_link');
            $table->foreignId('vendor_id')
                ->nullable()
                ->constrained('vendors')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('agency_id')
                ->nullable()
                ->constrained('agencies')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->dateTime('date_listed');
            $table->dateTime('date_closed')->nullable();
            $table->dateTime('date_contrated')->nullable();
            $table->dateTime('date_pending')->nullable();
            $table->string('currency');
            $table->integer('market_price');
            $table->integer('final_price')->nullable();
            $table->string('type');
			$table->string('status');
            $table->integer('mts_const')->nullable();
            $table->integer('mts_lot')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
