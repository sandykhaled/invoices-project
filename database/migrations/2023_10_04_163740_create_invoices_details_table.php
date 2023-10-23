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
        Schema::create('invoices_details', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number');
            $table->foreignId('id_Invoice')->constrained('invoices')->cascadeOnDelete();
            $table->string('product',50);
            $table->string('section',999);
            $table->string('status',50);
            $table->integer('value_status');
            $table->text('note')->nullable();
            $table->string('user',300);
            $table->date('Payment_Date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices_details');
    }
};
