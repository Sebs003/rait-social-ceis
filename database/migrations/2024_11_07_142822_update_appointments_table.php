<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('id_type');               // Tipo de Documento (CC, TI, CE)
            $table->string('id_number');             // Número de Documento
            $table->string('first_name');            // Nombre
            $table->string('last_name');             // Apellido
            $table->string('email');                 // Correo Electrónico
            $table->string('phone');                 // Celular
            $table->date('scheduled_at');            // Fecha de Cita
            $table->string('service');               // Servicio
            $table->unsignedBigInteger('service_id')->nullable();  // ID del servicio (si se usa)
            $table->unsignedBigInteger('staff_id')->nullable();    // ID del personal (si se usa)
            $table->string('status')->default('pending');  // Estado de la cita (por defecto "pending")
            $table->text('notes')->nullable();       // Notas (opcional)
            $table->text('cancellation_reason')->nullable(); // Razón de cancelación (opcional)
            $table->timestamps();
            $table->softDeletes(); // Para manejo de eliminación lógica
        });
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}

