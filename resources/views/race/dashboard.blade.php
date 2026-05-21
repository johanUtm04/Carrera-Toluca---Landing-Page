<x-layouts.app title="Mi Panel de Corredor">
    <section class="johan-panel-section">
        <div class="johan-card" style="max-width: 600px;">
            
            <span class="johan-tag">Panel Oficial del Corredor</span>

            <div class="johan-header">
                <h2>¡Bienvenido de vuelta,<br>{{ $user->name }}!</h2>
                <p>Aquí tienes los detalles oficiales de tu participación en el circuito.</p>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 24px;">
                <div class="johan-grid-stat">
                    <div style="font-size: 0.7rem; color: rgba(255,255,255,0.4); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px;">Tipo de Perfil</div>
                    <div style="font-size: 1.1rem; color: #fff; font-weight: 700; text-transform: capitalize;">{{ $user->role ?? 'Atleta' }}</div>
                </div>
                <div class="johan-grid-stat">
                    <div style="font-size: 0.7rem; color: rgba(255,255,255,0.4); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px;">Estatus Cuenta</div>
                    <div style="font-size: 1.1rem; color: #fff; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">Activo</div>
                </div>
            </div>

            <div class="johan-alert">
                <div style="font-size: 0.85rem; color: rgba(255, 255, 255, 0.8); line-height: 1.5;">
                    <strong style="color: #fff; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 0.5px; display: block; margin-bottom: 2px;">Verificación pendiente:</strong> 
                    Tu cuenta está activa, pero los detalles de corredor e historial de tiempos se encuentran retenidos temporalmente.
                </div>
            </div>

            <div style="background: rgba(15, 23, 42, 0.4); border: 1px solid rgba(255, 255, 255, 0.05); padding: 24px; border-radius: 8px; margin-bottom: 30px;">
                <h3 class="johan-table-title">Resumen de Inscripción</h3>
                
                <table class="johan-table" style="width: 100%; color: rgba(255,255,255,0.6); font-size: 0.9rem; border-collapse: collapse;">
                    <tr>
                        <td style="font-weight: 700; color: #fff;">Carrera Inscrita:</td>
                        <td style="text-align: right; color: #ff1420; font-weight: 700; text-transform: uppercase;">4ª Carrera Toluca</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 700; color: #fff;">Distancia:</td>
                        <td style="text-align: right; color: #fff; font-weight: 600;">5K / 10K</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 700; color: #fff;">Número de Corredor (BIB):</td>
                        <td style="text-align: right; font-weight: 800; color: rgba(255,255,255,0.4); font-size: 1.1rem;">--</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 700; color: #fff;">Talla de Playera:</td>
                        <td style="text-align: right; text-transform: uppercase; color: #fff;">M (Dry-Fit)</td>
                    </tr>
                    <tr style="border-bottom: none;">
                        <td style="font-weight: 700; color: #fff; padding-bottom: 0;">Estatus del Pago:</td>
                        <td style="text-align: right; padding-bottom: 0;">
                            <span class="johan-badge-pending">Pendiente</span>
                        </td>
                    </tr>
                </table>
            </div>

            <div style="display: flex; gap: 16px;">
                <a href="{{ route('home') }}" class="johan-btn johan-btn-secondary" style="width: 50%;">
                    Volver al Inicio
                </a>

                <form action="{{ route('logout') }}" method="POST" style="width: 50%; margin: 0;">
                    @csrf
                    <button type="submit" class="johan-btn johan-btn-danger" style="width: 100%;">
                        Cerrar Sesión
                    </button>
                </form>
            </div>

        </div>
    </section>
</x-layouts.app>