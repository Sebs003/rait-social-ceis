<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // Método para mostrar el formulario de solicitud de cita
    public function create(){
        return view('appointments.create'); // Asegúrate de que la vista exista en `resources/views/appointments/create.blade.php`
    }
    // Método para manejar el envío del formulario
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'id_type' => 'required|string|max:2',           // Tipo de documento
            'id_number' => 'required|string|max:20',        // Número de documento
            'first_name' => 'required|string|max:255',      // Nombre
            'last_name' => 'required|string|max:255',       // Apellido
            'email' => 'required|email|max:255',            // Correo electrónico
            'phone' => 'required|string|max:20',            // Celular
            'appointment_date' => 'required|date',          // Fecha de cita
            'service_id' => 'required|exists:services,id',  // Validar que el ID de servicio existe
        ]);

        // Cambiar `appointment_date` a `scheduled_at` para guardarlo en la base de datos
        $validatedData['scheduled_at'] = $validatedData['appointment_date'];
        unset($validatedData['appointment_date']); // Eliminar `appointment_date` del arreglo

        // Crear la cita en la base de datos
        Appointment::create($validatedData);

        // Redirigir con un mensaje de éxito
        return redirect()->route('appointments.create')->with('success', 'Cita agendada correctamente');
    }
}


