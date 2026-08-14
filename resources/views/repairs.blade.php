@extends('layouts.site')
@section('title', 'Servis počítačov a notebookov | Zlatý technik')
@section('description', 'Diagnostika, upgrade a vybrané opravy počítačov a notebookov vo Zvolene, Banskej Bystrici a okolí.')
@section('content')
<section class="shell page-head">
    <div>
        <div class="eyebrow">Počítače & notebooky</div>
        <h1>Najprv zistiť problém. Potom meniť diely.</h1>
        <p>Diagnostika, upgrade, softvérové problémy a vybrané opravy počítačov a notebookov.</p>
        <div class="actions"><a class="btn btn-primary" href="{{ route('contact') }}">Mám problém s počítačom</a></div>
    </div>
    <div class="page-art">
        <svg viewBox="0 0 700 430" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <rect width="700" height="430" fill="#e0dccf"/>
            <rect x="128" y="68" width="444" height="254" rx="10" fill="#fbfaf6" stroke="#181816" stroke-width="5"/>
            <rect x="160" y="102" width="380" height="183" fill="#d7d2c6" stroke="#181816" stroke-width="4"/>
            <path d="M83 342h534l-47 40H130z" fill="#ffd43b" stroke="#181816" stroke-width="5"/>
            <circle cx="350" cy="194" r="52" fill="#fbfaf6" stroke="#181816" stroke-width="4"/>
            <path d="M323 194h54M350 167v54" stroke="#181816" stroke-width="8" stroke-linecap="round"/>
        </svg>
    </div>
</section>

<section class="shell section" style="padding-top:10px">
    <div class="visual-grid">
        <div class="visual-tile">
            <div class="card-art"><svg viewBox="0 0 500 280"><rect width="500" height="280" fill="#ded9cd"/><rect x="92" y="48" width="316" height="176" rx="9" fill="#fbfaf6" stroke="#181816" stroke-width="4"/><rect x="119" y="76" width="262" height="120" fill="#d3cec2" stroke="#181816" stroke-width="4"/><path d="M64 235h372l-35 27H99z" fill="#ffd43b" stroke="#181816" stroke-width="4"/></svg></div>
            <div class="card-body"><h3>Diagnostika</h3><p>Keď je počítač pomalý, padá, neštartuje alebo sa prehrieva.</p></div>
        </div>
        <div class="visual-tile">
            <div class="card-art"><svg viewBox="0 0 500 280"><rect width="500" height="280" fill="#ded9cd"/><rect x="110" y="55" width="280" height="170" fill="#fbfaf6" stroke="#181816" stroke-width="4"/><rect x="145" y="88" width="82" height="105" fill="#ffd43b" stroke="#181816" stroke-width="4"/><rect x="257" y="88" width="98" height="45" fill="#d0cbc0" stroke="#181816" stroke-width="4"/><rect x="257" y="148" width="98" height="45" fill="#d0cbc0" stroke="#181816" stroke-width="4"/></svg></div>
            <div class="card-body"><h3>Upgrade</h3><p>SSD, RAM a ďalšie zmeny, ktoré majú reálny prínos.</p></div>
        </div>
        <div class="visual-tile">
            <div class="card-art"><svg viewBox="0 0 500 280"><rect width="500" height="280" fill="#ded9cd"/><circle cx="250" cy="140" r="88" fill="#fbfaf6" stroke="#181816" stroke-width="4"/><path d="M191 141l39 39 83-93" fill="none" stroke="#181816" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"/><circle cx="313" cy="87" r="10" fill="#ffd43b"/></svg></div>
            <div class="card-body"><h3>Softvér</h3><p>Systém, ovládače, konfigurácia a bežné softvérové problémy.</p></div>
        </div>
    </div>
</section>

<section class="shell section" style="padding-top:18px">
    <div class="steps">
        <div class="step"><div class="step-num">01</div><strong>Popíš problém</strong><span>Model zariadenia a čo presne sa deje.</span></div>
        <div class="step"><div class="step-num">02</div><strong>Diagnostika</strong><span>Najprv hľadáme príčinu, nie zoznam dielov na výmenu.</span></div>
        <div class="step"><div class="step-num">03</div><strong>Dohoda</strong><span>Ak oprava dáva zmysel, dohodneme ďalší postup.</span></div>
    </div>
</section>
@endsection
