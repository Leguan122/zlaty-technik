@extends('layouts.site')

@section('title', 'Zlatý technik | Opravy, IT a IoT')

@section('content')
<section class="shell hero">
    <div>
        <div class="eyebrow">Zvolen a okolie</div>
        <h1>Technika, ktorá má dostať <span style="color:var(--gold)">druhú šancu.</span></h1>
        <p>Opravy elektroniky, weby, IT a malé IoT riešenia.</p>
        <div class="actions">
            <a class="btn btn-primary" href="{{ route('repairs') }}">Mám pokazené zariadenie</a>
            <a class="btn btn-ghost" href="{{ route('contact') }}">Kontakt</a>
        </div>
    </div>
    <div class="hero-art" aria-hidden="true">
        <svg viewBox="0 0 700 500" xmlns="http://www.w3.org/2000/svg">
            <defs><linearGradient id="g" x1="0" x2="1"><stop stop-color="#252c34"/><stop offset="1" stop-color="#101419"/></linearGradient></defs>
            <rect width="700" height="500" fill="url(#g)"/>
            <circle cx="565" cy="85" r="125" fill="#f5c84c" opacity=".08"/>
            <rect x="120" y="95" width="465" height="300" rx="28" fill="#0c1014" stroke="#f5c84c" stroke-opacity=".25" stroke-width="2" transform="rotate(-4 350 250)"/>
            <path d="M170 165h180v55h115v105h90" stroke="#f5c84c" stroke-opacity=".35" stroke-width="4" fill="none"/>
            <path d="M205 340h95v-80h120" stroke="#f5c84c" stroke-opacity=".22" stroke-width="3" fill="none"/>
            <rect x="330" y="205" width="120" height="92" rx="14" fill="#262d35" stroke="#ffffff" stroke-opacity=".12"/>
            <g fill="#f5c84c"><circle cx="170" cy="165" r="7"/><circle cx="555" cy="325" r="7"/><circle cx="205" cy="340" r="7"/></g>
            <rect x="435" y="70" width="152" height="48" rx="14" fill="#f5c84c"/><text x="511" y="100" text-anchor="middle" fill="#111" font-size="18" font-weight="800">DIAGNOSTIKA</text>
        </svg>
    </div>
</section>

<section class="shell section" style="padding-top:20px">
    <div class="section-title">
        <div><div class="eyebrow">Služby</div><h2>Vyber, čo riešiš.</h2></div>
    </div>
    <div class="service-grid">
        <a class="service-card" href="{{ route('repairs') }}">
            <div class="card-art"><svg viewBox="0 0 500 300"><rect width="500" height="300" fill="#11161b"/><rect x="105" y="55" width="290" height="180" rx="15" fill="#252c34" stroke="#f5c84c" stroke-opacity=".32"/><rect x="132" y="82" width="236" height="126" rx="8" fill="#0a0d10"/><path d="M85 245h330l-30 24H115z" fill="#323a43"/><circle cx="250" cy="145" r="42" fill="#f5c84c" opacity=".12"/><path d="M228 145h44M250 123v44" stroke="#f5c84c" stroke-width="8" stroke-linecap="round"/></svg></div>
            <div class="card-body"><h3>Opravy elektroniky</h3><p>Notebooky, drobná elektronika a vybrané zariadenia.</p><span class="arrow">Pozrieť opravy →</span></div>
        </a>
        <a class="service-card" href="{{ route('web-it') }}">
            <div class="card-art"><svg viewBox="0 0 500 300"><rect width="500" height="300" fill="#11161b"/><rect x="72" y="52" width="356" height="205" rx="18" fill="#202730" stroke="#ffffff" stroke-opacity=".1"/><rect x="92" y="78" width="316" height="158" rx="10" fill="#0b0f13"/><circle cx="112" cy="66" r="5" fill="#f5c84c"/><path d="M150 124l-38 30 38 30M350 124l38 30-38 30M285 105l-65 100" stroke="#f5c84c" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></div>
            <div class="card-body"><h3>Weby / IT</h3><p>Webstránky, hosting, WordPress, Laravel a technické problémy.</p><span class="arrow">Pozrieť IT →</span></div>
        </a>
        <a class="service-card" href="{{ route('iot') }}">
            <div class="card-art"><svg viewBox="0 0 500 300"><rect width="500" height="300" fill="#11161b"/><rect x="165" y="70" width="170" height="160" rx="18" fill="#28313a" stroke="#f5c84c" stroke-opacity=".3"/><rect x="205" y="112" width="90" height="75" rx="9" fill="#0c1014"/><g stroke="#f5c84c" stroke-width="5"><path d="M165 105h-55M165 145h-75M165 185h-55M335 105h55M335 145h75M335 185h55"/></g><g fill="#f5c84c"><circle cx="100" cy="145" r="9"/><circle cx="410" cy="145" r="9"/></g></svg></div>
            <div class="card-body"><h3>IoT</h3><p>Senzory, ESP32, automatizácie a malé prototypy.</p><span class="arrow">Pozrieť IoT →</span></div>
        </a>
    </div>
</section>

<section class="shell section" style="padding-top:22px">
    <div class="quick">
        <div><h2>Nie si si istý, kam problém patrí?</h2><p>Pošli fotku alebo krátky popis. Zaradíme to neskôr.</p></div>
        <a class="btn btn-primary" href="{{ route('contact') }}">Napísať</a>
    </div>
</section>
@endsection
