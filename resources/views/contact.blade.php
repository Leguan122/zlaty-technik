@extends('layouts.site')
@section('title', 'Kontakt | Zlatý technik')
@section('content')
<section class="shell section">
    <div class="contact-grid">
        <div class="contact-panel">
            <div class="eyebrow">Kontakt</div>
            <h1>Pošli problém.</h1>
            <p>Stačí stručne: čo to je, model a čo nefunguje.</p>
            <div class="contact-hints">
                <div class="hint"><span class="hint-icon">📷</span><span>Fotka zariadenia pomôže</span></div>
                <div class="hint"><span class="hint-icon">#</span><span>Napíš presný model</span></div>
                <div class="hint"><span class="hint-icon">⚡</span><span>Popíš príznak poruchy</span></div>
            </div>
        </div>
        <div class="form-panel">
            <form onsubmit="event.preventDefault();alert('Formulár zatiaľ nie je napojený.');">
                <div class="field-row"><input class="field" placeholder="Meno"><input class="field" placeholder="Telefón alebo e-mail"></div>
                <input class="field" placeholder="Zariadenie / model">
                <textarea class="field" placeholder="Čo nefunguje?"></textarea>
                <button class="btn btn-primary" type="submit">Odoslať dopyt</button>
                <span class="note">Backend formulára a reálne kontaktné údaje doplníme po odsúhlasení dizajnu.</span>
            </form>
        </div>
    </div>
</section>
@endsection
