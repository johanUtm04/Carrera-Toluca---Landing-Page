<x-layouts.app>
    <x-slot:title>
        Crear Cuenta - 4ª Carrera 5K Toluca
    </x-slot:title>

    <div class="auth-section">
        <div class="auth-container">
            <span class="mini-tag">Registration Portal</span>
            
            <div class="auth-header">
                <h2>Crear Cuenta</h2>
                <p>Regístrate para obtener tu identidad de acceso y comenzar tu inscripción.</p>
            </div>

            <form action="/register" method="POST" class="auth-form">
                @csrf

                <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <div class="input-wrapper">
                        <span class="input-icon">👤</span>
                        <input type="text" id="name" name="name" placeholder="Juan Pérez" required autocomplete="name" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Identidad (Correo Electrónico)</label>
                    <div class="input-wrapper">
                        <span class="input-icon">✉</span>
                        <input type="email" id="email" name="email" placeholder="usuario@corporacion.com" required autocomplete="email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Clave de Acceso</label>
                    <div class="input-wrapper">
                        <span class="input-icon">🔒</span>
                        <input type="password" id="password" name="password" placeholder="Mínimo 8 caracteres" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirmar Clave</label>
                    <div class="input-wrapper">
                        <span class="input-icon">🛡️</span>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repite tu contraseña" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-options">
                    <label class="remember-me">
                        <input type="checkbox" name="terms" required>
                        <span>Acepto los términos de privacidad y seguridad</span>
                    </label>
                </div>

                <button type="submit" class="btn-submit">Registrar Identidad</button>
            </form>

            <div class="auth-footer">
                <p>¿Ya tienes una cuenta activa? <a href="/login">Inicia sesión aquí</a></p>
            </div>
        </div>
    </div>
</x-layouts.app>