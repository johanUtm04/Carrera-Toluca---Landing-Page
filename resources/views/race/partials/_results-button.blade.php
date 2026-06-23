resources/views/race/partials/_results-button.blade.php<section class="results-cta-section">
    <div class="results-cta-container">
        <a href="{{ $href ?? '#' }}" class="results-cta-button">
            <span class="results-cta-text">
                {{ $text ?? 'Ver Resultados' }}
            </span>
            <span class="results-cta-arrow">»</span>
        </a>
    </div>
</section>