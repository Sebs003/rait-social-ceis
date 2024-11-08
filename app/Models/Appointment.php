<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_type',             // Tipo de Documento
        'id_number',           // Número de Documento
        'first_name',          // Nombre
        'last_name',           // Apellido
        'email',               // Correo Electrónico
        'phone',               // Celular
        'scheduled_at',        // Fecha de Cita
        'service',             // Servicio
        'service_id',          // ID del servicio
        'staff_id',            // ID del personal
        'status',              // Estado de la cita
        'notes',               // Notas
        'cancellation_reason', // Razón de cancelación
    ];
}
