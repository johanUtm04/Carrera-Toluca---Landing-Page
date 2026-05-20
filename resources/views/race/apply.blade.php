<x-layouts.app title="Inscripción a Carrera">
    <section class="auth-section">
        <div class="auth-container">
            <div class="mini-tag">Paso 2 de Inscripción</div>
            <div class="auth-header">
                <h2>Completa tu Registro</h2>
                <p>Proporciona tus datos deportivos para asegurar tu lugar en el circuito.</p>
            </div>

            <form action="{{ route('race.store') }}" method="POST" class="auth-form">
                @csrf
                
                <div class="form-group">
                    <label for="race_id">Selecciona tu carrera</label>
                    <div class="input-wrapper">
                        <select name="race_id" id="race_id" required style="width: 100%; background: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.1); padding: 12px; border-radius: 10px; color: #fff; font-family: 'Montserrat', sans-serif;">
                            @foreach($races as $race)
                                <option value="{{ $race->id }}" style="background: #0a1b3a;">
                                    {{ $race->name }} ({{ $race->distance_km }}K) - ${{ number_format($race->price, 2) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="age">Edad</label>
                        <div class="input-wrapper">
                            <input type="number" name="age" id="age" required placeholder="Ej. 25" style="padding-left: 14px; width: 100%; background: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.1); padding: 12px 14px; border-radius: 10px; color: #fff;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender">Género</label>
                        <select name="gender" id="gender" required style="width: 100%; background: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.1); padding: 12px; border-radius: 10px; color: #fff; font-family: 'Montserrat', sans-serif;">
                            <option value="male" style="background: #0a1b3a;">Masculino</option>
                            <option value="female" style="background: #0a1b3a;">Femenino</option>
                            <option value="other" style="background: #0a1b3a;">Otro</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="t_shirt_size">Talla de Playera Conmemorativa</label>
                    <select name="t_shirt_size" id="t_shirt_size" required style="width: 100%; background: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.1); padding: 12px; border-radius: 10px; color: #fff; font-family: 'Montserrat', sans-serif;">
                        <option value="S" style="background: #0a1b3a;">Chica (S)</option>
                        <option value="M" style="background: #0a1b3a;">Mediana (M)</option>
                        <option value="L" style="background: #0a1b3a;">Grande (L)</option>
                        <option value="XL" style="background: #0a1b3a;">Extra Grande (XL)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>¿Cuándo deseas realizar tu pago?</label>
                    <div class="form-row">
                        <label class="remember-me payment-card-option">
                            <input type="radio" name="payment_timing" value="now" checked>
                            <span style="color: #fff; font-size: 0.85rem;">Pagar Ahora</span>
                        </label>
                        <label class="remember-me payment-card-option">
                            <input type="radio" name="payment_timing" value="later">
                            <span style="color: #fff; font-size: 0.85rem;">Pagar Después</span>
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn-submit">Confirmar Inscripción</button>
            </form>
        </div>
    </section>
</x-layouts.app>