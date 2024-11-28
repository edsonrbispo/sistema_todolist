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
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('tarefa', 200);
            $table->text('descricao')->nullable();
            $table->char('prioridade', 10);
            $table->integer('status')->default(0);
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->dateTime('data_tarefa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};
