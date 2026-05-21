<x-layouts.app>
    <x-slot:title>
        Iniciar Sesión - 4ª Carrera 5K Toluca
    </x-slot:title>

    <section class="seccion-hero" style="min-height: 100vh; padding: 60px 0; display: flex; align-items: center;">
        <div class="hero-fondo-animado"></div>
        
        <div class="hero-contenedor" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 60px; align-items: center; width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            
            <div class="animate-izquierda" style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.08); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); padding: 40px; border-radius: 12px; box-shadow: 0 20px 50px rgba(0,0,0,0.3);">
                
                <span class="etiqueta-subtitulo" style="margin-bottom: 15px;">PORTAL DE ACCESO | SEGURIDAD</span>
                
                <div class="auth-header" style="margin-bottom: 30px;">
                    <h1 class="hero-titulo" style="font-size: 2.3rem; line-height: 1.2; margin: 0 0 10px 0;">Mi Panel<br>De Atleta</h1>
                    <p class="hero-descripcion" style="margin: 0; font-size: 0.95rem; color: rgba(255,255,255,0.6);">Ingresa tus credenciales oficiales para consultar tu chip, tiempos y estatus de competidor.</p>
                </div>

                <form action="{{ route('login') }}" method="POST" class="auth-form">
                    @csrf

                    <div class="form-group" style="margin-bottom: 22px;">
                        <label for="email" style="display: block; font-weight: 700; margin-bottom: 8px; font-size: 0.8rem; letter-spacing: 0.5px; color: rgba(255,255,255,0.8);">IDENTIDAD (CORREO ELECTRÓNICO)</label>
                        <input type="email" id="email" name="email" placeholder="usuario@corporacion.com" required autocomplete="email" 
                               style="width: 100%; padding: 14px; background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.15); border-radius: 6px; color: #fff; font-family: 'Montserrat', sans-serif; font-size: 0.9rem; box-sizing: border-box;">
                    </div>

                    <div class="form-group" style="margin-bottom: 22px;">
                        <div class="label-row" style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                            <label for="password" style="font-weight: 700; font-size: 0.8rem; letter-spacing: 0.5px; color: rgba(255,255,255,0.8);">CLAVE DE ACCESO</label>
                            <a href="/forgot-password" class="forgot-link" style="color: rgba(255,255,255,0.4); font-size: 0.8rem; text-decoration: none; font-weight: 600; transition: color 0.3s;">¿Olvidaste tu clave?</a>
                        </div>
                        <input type="password" id="password" name="password" placeholder="••••••••" required autocomplete="current-password"
                               style="width: 100%; padding: 14px; background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.15); border-radius: 6px; color: #fff; font-family: 'Montserrat', sans-serif; font-size: 0.9rem; box-sizing: border-box;">
                    </div>

                    <div class="form-options" style="margin-bottom: 30px;">
                        <label class="remember-me" style="display: flex; align-items: center; gap: 10px; font-size: 0.85rem; color: rgba(255,255,255,0.6); cursor: pointer; user-select: none;">
                            <input type="checkbox" name="remember" style="accent-color: #ff1420; width: 16px; height: 16px; margin: 0;">
                            <span>Mantener sesión segura activa</span>
                        </label>
                    </div>

                    <button type="submit" class="boton-accion" style="width: 100%; justify-content: center; border: none; cursor: pointer; padding: 16px; font-size: 0.95rem;">
                        Autenticar Código »
                    </button>
                </form>

                <div class="auth-footer" style="margin-top: 30px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; text-align: center;">
                    <p style="font-size: 0.85rem; color: rgba(255,255,255,0.5); margin: 0;">¿Aún no estás registrado? <a href="/register" style="color: #fff; font-weight: 700; text-decoration: underline;">Inscríbete aquí</a></p>
                </div>
            </div>

<div class="hero-bloque-imagen animate-derecha" style="display: flex; align-items: center; justify-content: center; width: 100%; height: 100%;">
    <div class="tarjeta-control-electronico">
        <div class="cortina-deslizable"></div>
        
        <div class="contenido-tarjeta">
            <span class="subtitulo-marca">CORPORACIÓN AZUL</span>
            <h2 class="destacado-titulo">
                Tu Esfuerzo<br><span class="texto-enfasis">Tiene Control</span><br>Electrónico
            </h2>
        </div>
    </div>
</div>

        </div>
    </section>
</x-layouts.app>