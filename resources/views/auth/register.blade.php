<x-layouts.app>
    <x-slot:title>
        Crear Cuenta - 4ª Carrera 5K Toluca
    </x-slot:title>

    <section class="seccion-hero" style="min-height: 100vh; padding: 60px 0; display: flex; align-items: center;">
        <div class="hero-fondo-animado"></div>
        
        <div class="hero-contenedor" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 60px; align-items: center; width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            
            <div class="animate-izquierda" style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.08); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); padding: 40px; border-radius: 12px; box-shadow: 0 20px 50px rgba(0,0,0,0.3);">
                
                <span class="etiqueta-subtitulo" style="margin-bottom: 15px;">PORTAL DE ACCESO | SEGURIDAD</span>
                
                <div class="auth-header" style="margin-bottom: 30px;">
                    <h1 class="hero-titulo" style="font-size: 2.3rem; line-height: 1.2; margin: 0 0 10px 0;">Crear Cuenta<br>De Atleta</h1>
                    <p class="hero-descripcion" style="margin: 0; font-size: 0.95rem; color: rgba(255,255,255,0.6);">Regístrate para obtener tu identidad de acceso y comenzar tu inscripción al evento.</p>
                </div>

                <form action="/register" method="POST" class="auth-form">
                    @csrf

                    <div class="form-group" style="margin-bottom: 22px;">
                        <label for="name" style="display: block; font-weight: 700; margin-bottom: 8px; font-size: 0.8rem; letter-spacing: 0.5px; color: rgba(255,255,255,0.8);">NOMBRE COMPLETO</label>
                        <input type="text" id="name" name="name" placeholder="Juan Pérez" required autocomplete="name" autofocus
                               style="width: 100%; padding: 14px; background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.15); border-radius: 6px; color: #fff; font-family: 'Montserrat', sans-serif; font-size: 0.9rem; box-sizing: border-box;">
                    </div>

                    <div class="form-group" style="margin-bottom: 22px;">
                        <label for="email" style="display: block; font-weight: 700; margin-bottom: 8px; font-size: 0.8rem; letter-spacing: 0.5px; color: rgba(255,255,255,0.8);">IDENTIDAD (CORREO ELECTRÓNICO)</label>
                        <input type="email" id="email" name="email" placeholder="usuario@corporacion.com" required autocomplete="email" 
                               style="width: 100%; padding: 14px; background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.15); border-radius: 6px; color: #fff; font-family: 'Montserrat', sans-serif; font-size: 0.9rem; box-sizing: border-box;">
                    </div>

                    <div class="form-group" style="margin-bottom: 22px;">
                        <label for="password" style="display: block; font-weight: 700; margin-bottom: 8px; font-size: 0.8rem; letter-spacing: 0.5px; color: rgba(255,255,255,0.8);">CLAVE DE ACCESO</label>
                        <input type="password" id="password" name="password" placeholder="Mínimo 8 caracteres" required autocomplete="new-password"
                               style="width: 100%; padding: 14px; background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.15); border-radius: 6px; color: #fff; font-family: 'Montserrat', sans-serif; font-size: 0.9rem; box-sizing: border-box;">
                    </div>

                    <div class="form-group" style="margin-bottom: 22px;">
                        <label for="password_confirmation" style="display: block; font-weight: 700; margin-bottom: 8px; font-size: 0.8rem; letter-spacing: 0.5px; color: rgba(255,255,255,0.8);">CONFIRMAR CLAVE DE ACCESO</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repite tu contraseña" required autocomplete="new-password"
                               style="width: 100%; padding: 14px; background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.15); border-radius: 6px; color: #fff; font-family: 'Montserrat', sans-serif; font-size: 0.9rem; box-sizing: border-box;">
                    </div>

                    <div class="form-options" style="margin-bottom: 30px;">
                        <label class="remember-me" style="display: flex; align-items: center; gap: 10px; font-size: 0.85rem; color: rgba(255,255,255,0.6); cursor: pointer; user-select: none;">
                            <input type="checkbox" name="terms" required style="accent-color: #ff1420; width: 16px; height: 16px; margin: 0;">
                            <span>Acepto los términos de privacidad y seguridad</span>
                        </label>
                    </div>

                    <button type="submit" class="boton-accion" style="width: 100%; justify-content: center; border: none; cursor: pointer; padding: 16px; font-size: 0.95rem;">
                        Registrar Identidad »
                    </button>
                </form>

                <div class="auth-footer" style="margin-top: 30px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; text-align: center;">
                    <p style="font-size: 0.85rem; color: rgba(255,255,255,0.5); margin: 0;">¿Ya tienes una cuenta activa? <a href="/login" style="color: #fff; font-weight: 700; text-decoration: underline;">Inicia sesión aquí</a></p>
                </div>
            </div>

            <div class="hero-bloque-imagen animate-derecha" style="display: flex; align-items: center; justify-content: center;">
                <div class="servicios-destacado-rojo" style="width: 100%; padding: 50px 40px; border-radius: 8px; box-shadow: 0 20px 40px rgba(0,0,0,0.3); box-sizing: border-box;">
                    <span style="font-size: 0.8rem; font-weight: 900; letter-spacing: 3px; display: block; margin-bottom: 15px; color: rgba(255,255,255,0.8);">CORPORACIÓN AZUL</span>
                    <h2 class="destacado-titulo" style="font-size: 2.6rem; line-height: 1; margin: 0; font-weight: 800; color: #fff;">Tu Esfuerzo<br><span style="font-weight: 500; color: #111728;">Tiene Control</span><br>Electrónico</h2>
                </div>
            </div>

        </div>
    </section>
</x-layouts.app>