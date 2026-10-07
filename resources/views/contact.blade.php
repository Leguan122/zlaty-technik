@extends('layouts.site')
@section('title', 'Kontakt | Zlatý technik')
@section('description', 'Kontakt pre hosting a opravy webov, IoT, 3D modelovanie a tlač, servis počítačov a notebookov.')

@push('styles')
<style>
    .contact-direct{display:grid;grid-template-columns:.95fr 1.05fr;gap:18px}.contact-box{border:1px solid var(--ink);background:var(--sheet);padding:30px}.contact-box h1{margin:9px 0 12px;font-size:clamp(39px,5vw,58px);line-height:.98;letter-spacing:-.055em}.contact-box>p{max-width:560px;color:var(--muted);font-size:17px}.contact-methods{display:grid;gap:12px;margin-top:28px}.contact-method{display:flex;align-items:center;justify-content:space-between;gap:20px;padding:18px;border:1px solid var(--ink);background:var(--paper)}.contact-method-label{display:block;font-family:"Courier New",monospace;font-size:10px;font-weight:900;text-transform:uppercase;color:#77746c}.contact-method-value{display:block;margin-top:3px;font-size:19px;font-weight:800;user-select:text;overflow-wrap:anywhere}.contact-method>span{min-width:0}.contact-copy{display:grid;place-items:center;flex-shrink:0;width:32px;height:32px;padding:6px;border:1px solid var(--ink);background:transparent;color:var(--ink);cursor:pointer}.contact-copy[hidden]{display:none}.contact-copy:hover{background:var(--yellow)}.contact-copy:focus-visible{outline:2px solid var(--ink);outline-offset:3px}.contact-copy svg{width:18px;height:18px}.contact-copy-status{min-height:18px;margin:6px 0 0;color:var(--muted);font-size:12px}.contact-empty{margin-top:24px;padding:16px;border:1px dashed var(--ink);color:var(--muted);font-size:14px}.contact-guide{display:grid;gap:0;margin-top:22px;border-top:1px solid var(--ink)}.contact-guide-row{display:grid;grid-template-columns:38px 1fr;gap:14px;padding:17px 0;border-bottom:1px solid var(--ink)}.contact-guide-no{font-family:"Courier New",monospace;font-size:11px;font-weight:900;background:var(--yellow);width:30px;height:24px;display:grid;place-items:center}.contact-guide-row strong{display:block;margin-bottom:3px}.contact-guide-row span{color:var(--muted);font-size:14px}.privacy-note{margin-top:18px;color:#77746c;font-size:12px}@media(max-width:900px){.contact-direct{grid-template-columns:1fr}}@media(max-width:560px){.contact-method{align-items:flex-start}.contact-method-value{font-size:16px}}
</style>
<style>
    .contact-profile{margin-top:26px;padding-top:20px;border-top:1px solid var(--line)}.contact-profile h2,.contact-logistics h2{margin:8px 0 12px;font-size:26px;letter-spacing:-.035em}.contact-profile p,.contact-logistics p{color:var(--muted);font-size:15px}.contact-logistics{margin-top:18px}.contact-address{font-style:normal;font-size:17px;line-height:1.7}.contact-transport{margin:20px 0}.contact-transport div{padding:12px 0;border-top:1px solid var(--line)}.contact-transport div:last-child{border-bottom:1px solid var(--line)}.contact-transport dt{font-weight:800}.contact-transport dd{margin:4px 0 0;color:var(--muted);font-size:15px}
</style>
@endpush

@section('content')
@php($email = config('contact.email'))

<section class="shell section">
    <div class="contact-direct">
        <div class="contact-box">
            <div class="eyebrow">Kontakt</div>
            <h1>Máte projekt alebo technický problém?</h1>
            <p>Ozvite sa e-mailom. Pri technickom dopyte stačí stručne uviesť, čo potrebujete vyriešiť.</p>

            <div class="contact-methods">
                @if($email)
                    <div class="contact-method">
                        <span><span class="contact-method-label">E-mail</span><span class="contact-method-value" id="contact-email">{{ $email }}</span></span>
                        <button class="contact-copy" type="button" aria-label="Skopírovať e-mailovú adresu" title="Skopírovať e-mailovú adresu" hidden>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="8" y="8" width="12" height="12" rx="1"/><path d="M16 8V4H4v12h4"/></svg>
                        </button>
                    </div>
                    <p class="contact-copy-status" role="status" aria-live="polite"></p>
                @endif
            </div>

            @if(!$email)
                <div class="contact-empty">Kontaktné údaje sa doplnia pred spustením stránky.</div>
            @endif

            <p class="privacy-note">Na stránke nie je kontaktný formulár. Komunikácia prebieha priamo cez e-mail.</p>

            <div class="contact-profile">
                <div class="eyebrow">Kto za službou stojí</div>
                <h2>Adam Kiss</h2>
                <p>IČO: 54728657 · Nie som platiteľ DPH.</p>
                <p>Pod značkou Zlatý technik riešim menšie technické zákazky: hosting a opravy webov, IoT projekty, 3D modelovanie a tlač či servis počítačov a notebookov. Pri Vašom dopyte sa dohodneme, čo viem zabezpečiť a aký bude ďalší postup.</p>
            </div>
        </div>

        <div class="contact-box">
            <div class="eyebrow">Čo uviesť v správe</div>
            <div class="contact-guide">
                <div class="contact-guide-row">
                    <span class="contact-guide-no">01</span>
                    <div><strong>Čo potrebujete</strong><span>Hosting, oprava webu, IoT projekt, 3D diel alebo servis počítača či notebooku.</span></div>
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

    <div class="contact-direct contact-logistics">
        <div class="contact-box">
            <div class="eyebrow">Zaslanie zariadenia</div>
            <h2>Kam môžete poslať zásielku</h2>
            <address class="contact-address">
                Adam Kiss<br>
                Lukavická 1361/7<br>
                962 31 Lukavica
            </address>
            <p>Pred odoslaním ma, prosím, kontaktujte e-mailom, aby sme sa dohodli na prijatí a ďalšom postupe. Zariadenie bezpečne zabaľte a priložte svoje meno, e-mail a stručný popis problému.</p>
        </div>
        <div class="contact-box">
            <div class="eyebrow">Vyzdvihnutie po dohode</div>
            <h2>Môžem prísť aj k Vám</h2>
            <p>Ak Vám zaslanie nevyhovuje, môžeme sa dohodnúť na osobnom vyzdvihnutí zariadenia.</p>
            <dl class="contact-transport">
                <div><dt>Do 20 km od Lukavice</dt><dd>Doprava pri vyzdvihnutí zdarma. Vzdialenosť sa počíta po cestnej trase jedným smerom.</dd></div>
                <div><dt>Nad 20 km od Lukavice: 0,35 €/km</dt><dd>Cena zahŕňa palivo aj opotrebovanie auta. Pri vzdialenosti nad 20 km sa účtuje celá trasa z Lukavice k Vám a späť.</dd></div>
            </dl>
            <p>Napríklad pri vzdialenosti 40 km od Lukavice sa počíta 40 km tam a 40 km späť, teda doprava stojí 28 €. Cenu dopravy Vám potvrdím pred výjazdom; cena servisu sa dohodne samostatne.</p>
        </div>
    </div>
</section>
<script>
    const copyButton = document.querySelector('.contact-copy');
    const emailText = document.getElementById('contact-email');
    const copyStatus = document.querySelector('.contact-copy-status');

    if (copyButton && emailText && copyStatus) {
        copyButton.hidden = false;
        copyButton.addEventListener('click', async () => {
            try {
                await navigator.clipboard.writeText(emailText.textContent.trim());
                copyStatus.textContent = 'E-mailová adresa bola skopírovaná.';
            } catch {
                const selection = window.getSelection();
                const range = document.createRange();
                range.selectNodeContents(emailText);
                selection.removeAllRanges();
                selection.addRange(range);
                copyStatus.textContent = 'Adresa je označená. Skopírujte ju, prosím, ručne.';
            }
        });
    }
</script>
@endsection
