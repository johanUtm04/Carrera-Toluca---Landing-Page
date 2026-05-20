<x-layouts.app title="Mi Panel de Corredor">
    <section class="auth-section">
        <div class="auth-container" style="max-width: 600px;">
            
            <div class="mini-tag">Panel Oficial del Corredor</div>

            <div class="auth-header">
                <h2>¡Bienvenido de vuelta, {{ $user->name }}!</h2>
                <p>Aquí tienes los detalles oficiales de tu participación en el circuito.</p>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 24px;">
                <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.05); padding: 16px; border-radius: 12px; text-align: center;">
                    <div style="font-size: 0.75rem; color: #718096; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Tipo de Perfil</div>
                    <div style="font-size: 1.1rem; color: #fff; font-weight: 600; text-transform: capitalize;">{{ $user->role ?? 'Atleta' }}</div>
                </div>
                <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.05); padding: 16px; border-radius: 12px; text-align: center;">
                    <div style="font-size: 0.75rem; color: #718096; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Estatus Cuenta</div>
                    <div style="font-size: 1.1rem; color: #2ecc71; font-weight: 600;">Activo</div>
                </div>
            </div>

            <div style="background: linear-gradient(90deg, rgba(52, 152, 219, 0.1) 0%, rgba(46, 204, 113, 0.05) 100%); border-left: 4px solid #3498db; padding: 16px; border-radius: 0 12px 12px 0; margin-bottom: 24px; display: flex; align-items: center; gap: 12px;">
                <div style="color: #3498db; font-size: 1.2rem;">ℹ️</div>
                <div style="font-size: 0.85rem; color: #cbd5e0; line-height: 1.4;">
                    <strong style="color: #fff;">Verificación pendiente:</strong> Tu cuenta está activa, pero los detalles de corredor e historial de tiempos se encuentran retenidos temporalmente.
                </div>
            </div>

            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 24px; border-radius: 16px; margin-bottom: 24px;">
                <h3 style="color: #fff; margin-top: 0; margin-bottom: 20px; font-family: 'Montserrat', sans-serif; font-size: 1.2rem; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px;">
                    Resumen de Inscripción
                </h3>
                
                <table style="width: 100%; color: #a0aec0; font-size: 0.95rem; border-collapse: collapse;">
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <td style="padding: 12px 0; font-weight: bold; color: #fff;">Carrera Inscrita:</td>
                        <td style="padding: 12px 0; text-align: right; color: #3498db; font-weight: 600;">lol</td>
                    </tr>
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <td style="padding: 12px 0; font-weight: bold; color: #fff;">Distancia:</td>
                        <td style="padding: 12px 0; text-align: right;"> KM</td>
                    </tr>
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <td style="padding: 12px 0; font-weight: bold; color: #fff;">Número de Corredor (BIB):</td>
                        <td style="padding: 12px 0; text-align: right; font-weight: 800; color: #f1c40f; font-size: 1.1rem;">
                            --
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <td style="padding: 12px 0; font-weight: bold; color: #fff;">Talla de Playera:</td>
                        <td style="padding: 12px 0; text-align: right; text-transform: uppercase;">...</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 0; font-weight: bold; color: #fff;">Estatus del Pago:</td>
                        <td style="padding: 12px 0; text-align: right;">
                            <span style="background: rgba(241, 196, 15, 0.15); color: #f1c40f; padding: 6px 14px; border-radius: 20px; font-weight: 700; font-size: 0.8rem; text-transform: uppercase; border: 1px solid rgba(241, 196, 15, 0.3);">
                                Pendiente
                            </span>
                        </td>
                    </tr>
                </table>
            </div>


            <div style="display: flex; gap: 16px; margin-top: 24px;">
                
                <a href="{{ route('home') }}" class="btn-submit" style="display: flex; align-items: center; justify-content: center; text-decoration: none; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255,255,255,0.1); margin-top: 0; color: #fff; width: 50%;">
                    Volver al Inicio
                </a>

                <form action="{{ route('logout') }}" method="POST" style="width: 50%; margin: 0;">
                    @csrf
                    <button type="submit" class="btn-submit" style="background: transparent; border: 1px solid rgba(231, 76, 60, 0.3); box-shadow: none; margin-top: 0; color: #e74c3c; width: 100%;">
                        Cerrar Sesión
                    </button>
                </form>

            </div>


        </div>
    </section>
</x-layouts.app>