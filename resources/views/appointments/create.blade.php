<form action="{{ route('appointments.store') }}" method="POST">
    @csrf

    <!-- Tipo de Documento -->
    <div class="mb-3">
        <label for="id_type" class="form-label">Tipo de Documento</label>
        <select name="id_type" class="form-select" required>
            <option value="CC">Cédula de Ciudadanía</option>
            <option value="TI">Tarjeta de Identidad</option>
            <option value="CE">Cédula de Extranjería</option>
        </select>
    </div>

    <!-- Número de Documento -->
    <div class="mb-3">
        <label for="id_number" class="form-label">Número de Documento</label>
        <input type="text" name="id_number" class="form-control" required>
    </div>

    <!-- Nombre -->
    <div class="mb-3">
        <label for="first_name" class="form-label">Nombre</label>
        <input type="text" name="first_name" class="form-control" required>
    </div>

    <!-- Apellido -->
    <div class="mb-3">
        <label for="last_name" class="form-label">Apellido</label>
        <input type="text" name="last_name" class="form-control" required>
    </div>

    <!-- Correo Electrónico -->
    <div class="mb-3">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <!-- Celular -->
    <div class="mb-3">
        <label for="phone" class="form-label">Celular</label>
        <input type="text" name="phone" class="form-control" required>
    </div>

    <!-- Fecha de Cita -->
    <div class="mb-3">
        <label for="appointment_date" class="form-label">Fecha de Cita</label>
        <input type="date" name="appointment_date" class="form-control" min="{{ now()->addDay()->toDateString() }}" required>
    </div>

    <!-- Selección de Servicio -->
<div class="mb-3">
    <label for="service_id" class="form-label">Servicio</label>
    <select name="service_id" class="form-select" required>
        <!-- Usa los IDs de servicios en lugar de los nombres directamente -->
        <option value="1">Medicina general</option>
        <option value="2">Psicología</option>
        <option value="3">Terapia ocupacional</option>
        <option value="4">Fonoaudiología</option>
        <option value="5">Fisioterapia</option>
        <option value="6">Trabajo Social</option>
        <option value="7">Atención a la primera infancia (AIPI)</option>
    </select>
</div>


    <!-- Botón para Enviar -->
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
    </div>
</form>
