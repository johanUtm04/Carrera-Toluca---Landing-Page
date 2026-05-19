<x-layouts.app>
    <x-slot:title>
        Iniciar Sesión - 4ª Carrera 5K Toluca
    </x-slot:title>

    <div class="auth-section">
        <div class="auth-container">
            <span class="mini-tag">Authentication Portal</span>
            
            <div class="auth-header">
                <h2>Iniciar Sesión</h2>
                <p>Ingresa tus credenciales para acceder al sistema de la 4ª Carrera</p>
            </div>

            <form action="/login" method="POST" class="auth-form">
                @csrf

                <div class="form-group">
                    <label for="email">Identidad (Correo Electrónico)</label>
                    <div class="input-wrapper">
                        <span class="input-icon">✉</span>
                        <input type="email" id="email" name="email" placeholder="usuario@corporacion.com" required autocomplete="email">
                    </div>
                </div>

                <div class="form-group">
                    <div class="label-row">
                        <label for="password">Clave de Acceso</label>
                        <a href="/forgot-password" class="forgot-link">¿Olvidaste tu clave?</a>
                    </div>
                    <div class="input-wrapper">
                        <span class="input-icon">🔒</span>
                        <input type="password" id="password" name="password" placeholder="••••••••" required autocomplete="current-password">
                    </div>
                </div>

                <div class="form-options">
                    <label class="remember-me">
                        <input type="checkbox" name="remember">
                        <span>Mantener sesión segura activa</span>
                    </label>
                </div>

                <button type="submit" class="btn-submit">Autenticar Código</button>
            </form>

            <div class="auth-footer">
                <p>¿Aún no estás registrado en la carrera? <a href="/register">Inscríbete aquí</a></p>
            </div>
        </div>
    </div>
</x-layouts.app>