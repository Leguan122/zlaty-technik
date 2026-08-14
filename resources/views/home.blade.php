@extends('layouts.site')

@section('title', 'Zlatý technik | Weby, IoT, 3D a počítače')
@section('description', 'Weby, IoT projekty, 3D modelovanie a tlač, servis počítačov a notebookov vo Zvolene, Banskej Bystrici a okolí.')

@push('styles')
<style>
    .home-intro{padding:68px 0 38px}.intro-grid{display:grid;grid-template-columns:1.1fr .9fr;gap:54px;align-items:end}.intro-copy h1{max-width:760px;margin:12px 0 20px;font-size:clamp(52px,7.6vw,96px);line-height:.89;letter-spacing:-.075em}.intro-copy p{max-width:640px;margin:0;color:#5d5c57;font-size:19px}.intro-note{margin-top:32px;padding-top:14px;border-top:1px solid var(--ink);display:flex;gap:28px;flex-wrap:wrap;font-family:"Courier New",monospace;font-size:12px;font-weight:700}.intro-note span:before{content:"+";margin-right:7px;background:var(--yellow);padding:0 3px}.workbench{border:1px solid var(--ink);background:var(--sheet);padding:14px;transform:rotate(1deg);box-shadow:9px 9px 0 var(--yellow-soft)}.workbench-grid{display:grid;grid-template-columns:1fr 1fr;grid-template-rows:165px 165px;gap:10px}.workbench-tile{position:relative;overflow:hidden;background:#e5e1d6;border:1px solid var(--ink)}.workbench-tile.wide{grid-column:span 2}.workbench-label{position:absolute;left:9px;bottom:9px;background:var(--sheet);border:1px solid var(--ink);padding:4px 7px;font-family:"Courier New",monospace;font-size:10px;font-weight:900}.service-index{padding:26px 0 16px}.index-head{display:flex;justify-content:space-between;gap:20px;align-items:end;margin-bottom:12px}.index-head h2{margin:3px 0 0;font-size:30px;letter-spacing:-.045em}.index-head p{margin:0;color:var(--muted);font-size:14px}.service-row{display:grid;grid-template-columns:54px 1.2fr 1fr 34px;gap:18px;align-items:center;padding:18px 0;border-top:1px solid var(--ink)}.service-row:last-child{border-bottom:1px solid var(--ink)}.service-no{font-family:"Courier New",monospace;font-size:12px;font-weight:900;color:#5d5b54}.service-row h3{margin:0;font-size:29px;letter-spacing:-.045em}.service-row p{margin:0;color:var(--muted);font-size:14px}.service-go{font-size:24px;text-align:right}.service-row:hover h3{text-decoration:underline;text-decoration-thickness:3px;text-underline-offset:5px}.projects-strip{display:grid;grid-template-columns:1.3fr .85fr .85fr;gap:14px}.project-card{min-height:245px;border:1px solid var(--ink);background:var(--sheet);display:flex;flex-direction:column}.project-visual{flex:1;min-height:160px;border-bottom:1px solid var(--ink);background:#dfdbcf;overflow:hidden}.project-meta{padding:14px 15px}.project-meta small{display:block;margin-bottom:4px;font-family:"Courier New",monospace;font-size:10px;font-weight:900;color:#6c6a62;text-transform:uppercase}.project-meta strong{font-size:18px}.human-cta{display:grid;grid-template-columns:1.15fr .85fr;gap:24px;align-items:center;padding:31px;border:1px solid var(--ink);background:var(--yellow)}.human-cta h2{margin:0;font-size:clamp(29px,4vw,45px);line-height:1;letter-spacing:-.055em}.human-cta-right{border-left:1px solid var(--ink);padding-left:24px}.human-cta p{margin:0 0 16px;color:#4f4d45}.human-cta .btn{background:var(--ink);color:white}.mini-caption{margin:10px 0 0;color:#77746c;font-family:"Courier New",monospace;font-size:10px}.sketch-line{stroke:#181816;stroke-width:3;fill:none;stroke-linecap:round;stroke-linejoin:round}.sketch-fill{fill:#ffd43b;stroke:#181816;stroke-width:3}
    @media(max-width:900px){.intro-grid,.human-cta{grid-template-columns:1fr}.workbench{transform:none}.service-row{grid-template-columns:40px 1fr 32px}.service-row p{display:none}.projects-strip{grid-template-columns:1fr}.human-cta-right{border-left:0;border-top:1px solid var(--ink);padding-left:0;padding-top:20px}}
    @media(max-width:600px){.home-intro{padding-top:44px}.intro-copy h1{font-size:55px}.workbench-grid{grid-template-rows:135px 135px}.service-row h3{font-size:24px}.intro-note{gap:10px 18px}.index-head{align-items:start;flex-direction:column}}
</style>
@endpush

@section('content')
<section class="shell home-intro">
    <div class="intro-grid">
        <div class="intro-copy">
            <div class="eyebrow">digitálna & technická dielňa</div>
            <h1>Web. IoT. 3D. Počítače.</h1>
            <p>Navrhujem a riešim menšie technické projekty — od webstránky cez senzor alebo 3D diel až po notebook, ktorý potrebuje servis.</p>
            <div class="actions">
                <a class="btn btn-primary" href="#sluzby">Pozrieť služby</a>
                <a class="btn btn-ghost" href="{{ route('contact') }}">Kontakt</a>
            </div>
            <div class="intro-note">
                <span>Zvolen / BB a okolie</span>
                <span>menšie zákazky a prototypy</span>
                <span>osobná dohoda</span>
            </div>
        </div>

        <div>
            <div class="workbench" aria-label="Prehľad technických oblastí">
                <div class="workbench-grid">
                    <div class="workbench-tile wide">
                        <svg viewBox="0 0 600 190" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <rect x="55" y="28" width="490" height="128" rx="7" fill="#f8f6ef" stroke="#181816" stroke-width="3"/>
                            <line x1="55" y1="55" x2="545" y2="55" class="sketch-line"/>
                            <circle cx="76" cy="42" r="5" fill="#ffd43b" stroke="#181816" stroke-width="2"/><circle cx="94" cy="42" r="5" fill="#f8f6ef" stroke="#181816" stroke-width="2"/>
                            <rect x="82" y="77" width="150" height="18" class="sketch-fill"/>
                            <line x1="82" y1="112" x2="350" y2="112" class="sketch-line"/><line x1="82" y1="132" x2="286" y2="132" class="sketch-line"/>
                            <rect x="405" y="78" width="96" height="58" fill="#ded9cc" stroke="#181816" stroke-width="3"/>
                        </svg>
                        <span class="workbench-label">WEB / IT</span>
                    </div>
                    <div class="workbench-tile">
                        <svg viewBox="0 0 290 180" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <rect x="92" y="38" width="108" height="104" rx="5" fill="#f8f6ef" stroke="#181816" stroke-width="3"/>
                            <rect x="116" y="64" width="60" height="49" class="sketch-fill"/>
                            <path d="M92 58H58M92 83H45M92 108H58M200 58h34M200 83h47M200 108h34" class="sketch-line"/>
                            <circle cx="45" cy="83" r="6" fill="#ffd43b" stroke="#181816" stroke-width="3"/><circle cx="247" cy="83" r="6" fill="#ffd43b" stroke="#181816" stroke-width="3"/>
                        </svg>
                        <span class="workbench-label">IoT</span>
                    </div>
                    <div class="workbench-tile">
                        <svg viewBox="0 0 290 180" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M72 126V67l73-35 73 35v59l-73 35z" fill="#f8f6ef" stroke="#181816" stroke-width="3"/>
                            <path d="M72 67l73 38 73-38M145 105v56" class="sketch-line"/>
                            <path d="M98 80l47-23 47 23-47 24z" fill="#ffd43b" stroke="#181816" stroke-width="3"/>
                        </svg>
                        <span class="workbench-label">3D</span>
                    </div>
                </div>
            </div>
            <p class="mini-caption">Reálne ukážky projektov budú pribúdať postupne.</p>
        </div>
    </div>
</section>

<section class="shell section service-index" id="sluzby">
    <div class="index-head">
        <div><div class="eyebrow">služby</div><h2>Čo viem reálne ponúknuť</h2></div>
        <p>Bez zbytočných balíčkov. Každá zákazka začína tým, čo potrebujete vyriešiť.</p>
    </div>

    <a class="service-row" href="{{ route('web-it') }}">
        <span class="service-no">01</span><h3>Weby & IT</h3><p>Webstránky, WordPress, Laravel, hosting a technické problémy.</p><span class="service-go">→</span>
    </a>
    <a class="service-row" href="{{ route('iot') }}">
        <span class="service-no">02</span><h3>IoT & prototypy</h3><p>ESP32, senzory, zber dát a jednoduché automatizácie.</p><span class="service-go">→</span>
    </a>
    <a class="service-row" href="{{ route('3d') }}">
        <span class="service-no">03</span><h3>3D modelovanie & tlač</h3><p>Jednoduché diely, krabičky, držiaky a prototypy.</p><span class="service-go">→</span>
    </a>
    <a class="service-row" href="{{ route('repairs') }}">
        <span class="service-no">04</span><h3>Počítače & notebooky</h3><p>Diagnostika, upgrade, softvérové problémy a vybrané opravy.</p><span class="service-go">→</span>
    </a>
</section>

<section class="shell section">
    <div class="section-title">
        <div><div class="eyebrow">ukážky</div><h2>Ukážky konkrétnych projektov</h2></div>
        <p>Reálne ukážky budú pribúdať postupne podľa dokončených projektov a zákaziek.</p>
    </div>

    <div class="projects-strip">
        <article class="project-card">
            <div class="project-visual">
                <svg viewBox="0 0 620 270" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <rect width="620" height="270" fill="#ddd8cb"/>
                    <path d="M58 216h504M88 186h175v-98h228v98h43" class="sketch-line"/>
                    <rect x="288" y="104" width="130" height="86" class="sketch-fill"/>
                    <circle cx="124" cy="140" r="42" fill="#f8f6ef" stroke="#181816" stroke-width="3"/>
                    <path d="M103 140h42M124 119v42" class="sketch-line"/>
                </svg>
            </div>
            <div class="project-meta"><small>3D / prototyp</small><strong>Návrh dielu alebo krabičky</strong></div>
        </article>
        <article class="project-card">
            <div class="project-visual">
                <svg viewBox="0 0 360 270" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <rect width="360" height="270" fill="#e3ded2"/>
                    <rect x="108" y="66" width="144" height="140" fill="#f8f6ef" stroke="#181816" stroke-width="3"/>
                    <rect x="142" y="104" width="76" height="65" class="sketch-fill"/>
                    <path d="M108 93H62M108 136H44M108 178H62M252 93h46M252 136h64M252 178h46" class="sketch-line"/>
                </svg>
            </div>
            <div class="project-meta"><small>IoT</small><strong>Senzor alebo automatizácia</strong></div>
        </article>
        <article class="project-card">
            <div class="project-visual">
                <svg viewBox="0 0 360 270" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <rect width="360" height="270" fill="#e3ded2"/>
                    <rect x="58" y="52" width="244" height="145" fill="#f8f6ef" stroke="#181816" stroke-width="3"/>
                    <rect x="82" y="75" width="196" height="98" fill="#d7d2c6" stroke="#181816" stroke-width="3"/>
                    <path d="M42 213h276l-26 22H68z" class="sketch-fill"/>
                </svg>
            </div>
            <div class="project-meta"><small>servis</small><strong>Počítač alebo notebook</strong></div>
        </article>
    </div>
</section>

<section class="shell section" style="padding-top:24px">
    <div class="human-cta">
        <h2>Máte problém, nápad alebo niečo, čo potrebujete vyrobiť?</h2>
        <div class="human-cta-right">
            <p>Stačí stručne napísať, čo potrebujete. Ak sa zákazke nevenujem, poviem to rovno.</p>
            <a class="btn" href="{{ route('contact') }}">Kontaktovať ma →</a>
        </div>
    </div>
</section>
@endsection
