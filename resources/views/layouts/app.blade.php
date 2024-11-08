<div class="container mt-5">
    <h2>Solicitud de Cita</h2>

    <!-- Mostrar mensaje de éxito, si existe -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulario de Solicitud de Cita -->
    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf <!-- Token de seguridad de Laravel -->

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
            <label for="service" class="form-label">Servicio</label>
            <select name="service" class="form-select" required>
                <option value="Medicina general">Medicina general</option>
                <option value="Psicología">Psicología</option>
                <option value="Terapia ocupacional">Terapia ocupacional</option>
                <option value="Fonoaudiología">Fonoaudiología</option>
                <option value="Fisioterapia">Fisioterapia</option>
                <option value="Trabajo Social">Trabajo Social</option>
                <option value="AIPI">Atención a la primera infancia (AIPI)</option>
            </select>
        </div>

        <!-- Botón para Enviar el Formulario -->
        <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
    </form>
</div>

