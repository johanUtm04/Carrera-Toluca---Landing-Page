<x-layouts.app title="Cupo Completo">
    <section class="johan-panel-section">
        <div class="johan-card" style="max-width: 600px;">
            
            <span class="johan-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.3);">
                Inscripciones Cerradas
            </span>

            <div class="johan-header">
                <h2>Inscripciones Agotadas<br>Circuito Toluca 2026</h2>
                <p>Hemos alcanzado el límite máximo de atletas registrados para este evento. ¡Muchas gracias por tu interés!</p>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 24px;">
                <div class="johan-grid-stat">
                    <div style="font-size: 0.7rem; color: rgba(255,255,255,0.4); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px;">Cupo Total del Evento</div>
                    <div style="font-size: 1.1rem; color: #f59e0b; font-weight: 700;">800 Atletas</div>
                </div>
                <div class="johan-grid-stat">
                    <div style="font-size: 0.7rem; color: rgba(255,255,255,0.4); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px;">Estatus Actual</div>
                    <div style="font-size: 1.1rem; color: #ef4444; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">Agotado</div>
                </div>
            </div>

            <div class="johan-alert" style="background: rgba(239, 68, 68, 0.1); border-left: 4px solid #ef4444;">
                <div style="font-size: 0.85rem; color: rgba(255, 255, 255, 0.9); line-height: 1.5;">
                    <strong style="color: #fff; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 0.5px; display: block; margin-bottom: 2px;">¡Límite de Control Alcanzado!</strong> 
                    El sistema de validación ha cerrado automáticamente los registros debido a que se completó el aforo seguro de competidores pagados en la base de datos.
                </div>
            </div>

            <div style="background: rgba(15, 23, 42, 0.4); border: 1px solid rgba(255, 255, 255, 0.05); padding: 24px; border-radius: 8px; margin-bottom: 30px;">
                <h3 class="johan-table-title">Información del Evento</h3>
                
                <table class="johan-table" style="width: 100%; color: rgba(255,255,255,0.6); font-size: 0.9rem; border-collapse: collapse;">
                    <tr>
                        <td style="font-weight: 700; color: #fff;">Organizador:</td>
                        <td style="text-align: right; color: #ff1420; font-weight: 700; text-transform: uppercase;">4ª Carrera Corporación Azul</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 700; color: #fff;">Sede del Circuito:</td>
                        <td style="text-align: right; color: #fff; font-weight: 600;">Toluca, Estado de México</td>
                    </tr>
                    <tr style="border-bottom: none;">
                        <td style="font-weight: 700; color: #fff; padding-bottom: 0;">Disponibilidad:</td>
                        <td style="text-align: right; padding-bottom: 0;">
                            <span style="background: #ef4444; color: #fff; padding: 2px 8px; border-radius: 4px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase;">Sin Lugares</span>
                        </td>
                    </tr>
                </table>
            </div>

            <div style="display: flex; gap: 16px;">
                <a href="/" class="johan-btn" style="width: 100%; background: linear-gradient(135deg, #0b3472, #002244); border: 1px solid #0b3472; text-align: center; color: white; text-decoration: none; display: flex; align-items: center; justify-content: center; font-weight: bold; border-radius: 4px; padding: 12px 0;">
                    ← Volver a la Página Principal
                </a>
            </div>

        </div>
    </section>
</x-layouts.app>