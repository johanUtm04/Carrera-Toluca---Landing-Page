<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripciones Agotadas - Circuito Toluca 2026</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex items-center justify-center font-sans antialiased">

    <div class="max-w-md w-full mx-4 text-center bg-slate-800 p-8 rounded-2xl shadow-xl border border-slate-700">
        
        <div class="w-16 h-16 bg-amber-500/10 text-amber-500 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286Zm0 13.036h.008v.008H12v-.008Z" />
            </svg>
        </div>

        <h1 class="text-2xl font-bold tracking-tight text-white mb-3">
            Cupo Completo
        </h1>
        
        <p class="text-slate-400 text-sm leading-relaxed mb-6">
            Lo sentimos, las inscripciones para la 4ª Carrera Corporación Azul (Circuito Toluca 2026) han alcanzado su límite máximo de 800 atletas pagados.
        </p>

        <div class="bg-slate-900/50 rounded-xl p-4 border border-slate-700/50 mb-6">
            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block mb-1">
                Estado del Evento
            </span>
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-rose-500/10 text-rose-400">
                Inscripciones Cerradas
            </span>
        </div>

        <a href="{{ route('home') }}" class="inline-flex w-full items-center justify-center px-5 py-3 text-sm font-medium text-slate-900 bg-white hover:bg-slate-100 rounded-xl transition duration-200 shadow-sm">
            Volver al inicio
        </a>
    </div>

</body>
</html>