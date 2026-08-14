@extends('layouts.site')
@section('title', 'Kontakt | Zlatý technik')
@section('description', 'Kontakt pre weby, IoT, 3D modelovanie a tlač, servis počítačov a notebookov.')

@push('styles')
<style>
    .contact-direct{display:grid;grid-template-columns:.95fr 1.05fr;gap:18px}.contact-box{border:1px solid var(--ink);background:var(--sheet);padding:30px}.contact-box h1{margin:9px 0 12px;font-size:clamp(39px,5vw,58px);line-height:.98;letter-spacing:-.055em}.contact-box>p{max-width:560px;color:var(--muted);font-size:17px}.contact-methods{display:grid;gap:12px;margin-top:28px}.contact-method{display:flex;align-items:center;justify-content:space-between;gap:20px;padding:18px;border:1px solid var(--ink);background:var(--paper)}.contact-method:hover{box-shadow:5px 5px 0 var(--yellow);transform:translate(-1px,-1px)}.contact-method-label{display:block;font-family:"Courier New",monospace;font-size:10px;font-weight:900;text-transform:uppercase;color:#77746c}.contact-method-value{display:block;margin-top:3px;font-size:19px;font-weight:800}.contact-method-arrow{font-size:24px}.contact-empty{margin-top:24px;padding:16px;border:1px dashed var(--ink);color:var(--muted);font-size:14px}.contact-guide{display:grid;gap:0;margin-top:22px;border-top:1px solid var(--ink)}.contact-guide-row{display:grid;grid-template-columns:38px 1fr;gap:14px;padding:17px 0;border-bottom:1px solid var(--ink)}.contact-guide-no{font-family:"Courier New",monospace;font-size:11px;font-weight:900;background:var(--yellow);width:30px;height:24px;display:grid;place-items:center}.contact-guide-row strong{display:block;margin-bottom:3px}.contact-guide-row span{color:var(--muted);font-size:14px}.privacy-note{margin-top:18px;color:#77746c;font-size:12px}@media(max-width:900px){.contact-direct{grid-template-columns:1fr}}@media(max-width:560px){.contact-method{align-items:flex-start}.contact-method-value{font-size:16px}}
</style>
@endpush

@section('content')
@php($phone = config('contact.phone'))
@php($email = config('contact.email'))

<section class="shell section">
    <div class="contact-direct">
        <div class="contact-box">
            <div class="eyebrow">Kontakt</div>
            <h1>Máte projekt alebo technický problém?</h1>
            <p>Ozvite sa telefonicky alebo e-mailom. Pri technickom dopyte stačí stručne uviesť, čo potrebujete vyriešiť.</p>

            <div class="contact-methods">
                @if($phone)
                    <a class="contact-method" href="tel:{{ preg_replace('/[^0-9+]/', '', $phone) }}">
                        <span><span class="contact-method-label">Telefón</span><span class="contact-method-value">{{ $phone }}</span></span>
                        <span class="contact-method-arrow">→</span>
                    </a>
                @endif

                @if($email)
                    <a class="contact-method" href="mailto:{{ $email }}">
                        <span><span class="contact-method-label">E-mail</span><span class="contact-method-value">{{ $email }}</span></span>
                        <span class="contact-method-arrow">→</span>
                    </a>
                @endif
            </div>

            @if(!$phone && !$email)
                <div class="contact-empty">Kontaktné údaje sa doplnia pred spustením stránky.</div>
            @endif

            <p class="privacy-note">Na stránke nie je kontaktný formulár. Komunikácia prebieha priamo cez telefón alebo e-mail.</p>
        </div>

        <div class="contact-box">
            <div class="eyebrow">Čo uviesť v správe</div>
            <div class="contact-guide">
                <div class="contact-guide-row">
                    <span class="contact-guide-no">01</span>
                    <div><strong>Čo potrebujete</strong><span>Web, IoT projekt, 3D diel alebo servis počítača či notebooku.</span></div>
                </div>
                <div class="contact-guide-row">
                    <span class="contact-guide-no">02</span>
                    <div><strong>Stručný popis</strong><span>Napíšte, aký je cieľ alebo čo presne nefunguje.</span></div>
                </div>
                <div class="contact-guide-row">
                    <span class="contact-guide-no">03</span>
                    <div><strong>Podklady</strong><span>Ak sú k dispozícii, priložte fotografie, rozmery, model zariadenia alebo jednoduchý náčrt.</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
