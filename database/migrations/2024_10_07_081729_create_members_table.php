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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('dba');
            $table->text('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('company');
            $table->string('store_phone');
            $table->string('store_fax');
            $table->string('cell_phone');
            $table->string('cell_carrier');
            $table->string('business_type');
            $table->string('number_of_store');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
