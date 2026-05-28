<x-layouts.app title="Registro Confirmado">
    <section class="johan-panel-section">
        <div class="johan-card" style="max-width: 600px;">
            
            <span class="johan-tag" style="background: rgba(16, 185, 129, 0.2); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.3);">
                Pago Confirmado Exitosamente
            </span>

            <div class="johan-header">
                <h2>¡Inscripción completa,<br>{{ auth()->user()->name ?? 'Atleta' }}!</h2>
                <p>Tu pago ha sido procesado de forma segura. ¡Tu lugar en el circuito está asegurado!</p>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 24px;">
                <div class="johan-grid-stat">
                    <div style="font-size: 0.7rem; color: rgba(255,255,255,0.4); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px;">Monto Cargado</div>
                    <div style="font-size: 1.1rem; color: #10b981; font-weight: 700;">${{ $amount }} MXN</div>
                </div>
                <div class="johan-grid-stat">
                    <div style="font-size: 0.7rem; color: rgba(255,255,255,0.4); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px;">Estatus Inscripción</div>
                    <div style="font-size: 1.1rem; color: #fff; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">Confirmado</div>
                </div>
            </div>

            <div class="johan-alert" style="background: rgba(16, 185, 129, 0.1); border-left: 4px solid #10b981;">
                <div style="font-size: 0.85rem; color: rgba(255, 255, 255, 0.9); line-height: 1.5;">
                    <strong style="color: #fff; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 0.5px; display: block; margin-bottom: 2px;">¡Validación Completa!</strong> 
                    Tu token de transacción ha sido verificado mediante el webhook asíncrono de Stripe. Tu perfil de atleta ya está actualizado.
                </div>
            </div>

            <div style="background: rgba(15, 23, 42, 0.4); border: 1px solid rgba(255, 255, 255, 0.05); padding: 24px; border-radius: 8px; margin-bottom: 30px;">
                <h3 class="johan-table-title">Resumen del Recibo Digital</h3>
                
                <table class="johan-table" style="width: 100%; color: rgba(255,255,255,0.6); font-size: 0.9rem; border-collapse: collapse;">
                    <tr>
                        <td style="font-weight: 700; color: #fff;">Carrera Inscrita:</td>
                        <td style="text-align: right; color: #ff1420; font-weight: 700; text-transform: uppercase;">4ª Carrera Toluca</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 700; color: #fff;">Email de Cuenta:</td>
                        <td style="text-align: right; color: #fff; font-weight: 600;">{{ $email }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 700; color: #fff;">ID de Referencia:</td>
                        <td style="text-align: right; font-family: monospace; font-size: 0.75rem; color: rgba(255,255,255,0.4);" class="truncate max-w-[200px]">{{ $sessionId }}</td>
                    </tr>
                    <tr style="border-bottom: none;">
                        <td style="font-weight: 700; color: #fff; padding-bottom: 0;">Estatus del Pago:</td>
                        <td style="text-align: right; padding-bottom: 0;">
                            <span style="background: #10b981; color: #fff; padding: 2px 8px; border-radius: 4px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase;">Pagado</span>
                        </td>
                    </tr>
                </table>
            </div>

            <div style="display: flex; gap: 16px;">
                <a href="/dashboard" class="johan-btn" style="width: 100%; background: linear-gradient(135deg, #0b3472, #002244); border: 1px solid #0b3472; text-align: center; color: white; text-decoration: none; display: flex; align-items: center; justify-content: center; font-weight: bold; border-radius: 4px;">
                    Ir a Mi Panel de Corredor →
                </a>
            </div>

        </div>
    </section>
</x-layouts.app>