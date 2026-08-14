@extends('layouts.site')
@section('title', '3D modelovanie a tlač | Zlatý technik')
@section('description', 'Jednoduché 3D modelovanie a tlač dielov, krabičiek, držiakov a prototypov.')
@section('content')
<section class="shell page-head">
    <div>
        <div class="eyebrow">3D modelovanie & tlač</div>
        <h1>Keď potrebuješ konkrétny diel, nie katalógový kompromis.</h1>
        <p>Jednoduché krabičky, držiaky, adaptéry, náhradné diely a prototypy podľa rozmerov alebo náčrtu.</p>
        <div class="actions"><a class="btn btn-primary" href="{{ route('contact') }}">Mám diel na výrobu</a></div>
    </div>
    <div class="page-art">
        <svg viewBox="0 0 700 430" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <rect width="700" height="430" fill="#e1ddd1"/>
            <path d="M205 306V142l145-72 145 72v164l-145 72z" fill="#fbfaf6" stroke="#181816" stroke-width="5"/>
            <path d="M205 142l145 78 145-78M350 220v158" fill="none" stroke="#181816" stroke-width="5"/>
            <path d="M255 167l95-47 95 47-95 51z" fill="#ffd43b" stroke="#181816" stroke-width="5"/>
            <path d="M278 283h144" stroke="#181816" stroke-width="5" stroke-linecap="round"/>
            <circle cx="279" cy="283" r="8" fill="#ffd43b" stroke="#181816" stroke-width="4"/>
        </svg>
    </div>
</section>

<section class="shell section" style="padding-top:10px">
    <div class="visual-grid">
        <div class="visual-tile">
            <div class="card-art"><svg viewBox="0 0 500 280"><rect width="500" height="280" fill="#ded9cd"/><rect x="95" y="72" width="310" height="140" rx="8" fill="#fbfaf6" stroke="#181816" stroke-width="4"/><circle cx="180" cy="142" r="31" fill="#ffd43b" stroke="#181816" stroke-width="4"/><circle cx="320" cy="142" r="31" fill="#ded9cd" stroke="#181816" stroke-width="4"/></svg></div>
            <div class="card-body"><h3>Krabičky a kryty</h3><p>Pre elektroniku, PCB a malé zariadenia.</p></div>
        </div>
        <div class="visual-tile">
            <div class="card-art"><svg viewBox="0 0 500 280"><rect width="500" height="280" fill="#ded9cd"/><path d="M135 205V89h230v116h-55v-63H190v63z" fill="#fbfaf6" stroke="#181816" stroke-width="4"/><path d="M176 112h148" stroke="#ffd43b" stroke-width="14"/></svg></div>
            <div class="card-body"><h3>Držiaky a adaptéry</h3><p>Jednoduché diely na konkrétny rozmer.</p></div>
        </div>
        <div class="visual-tile">
            <div class="card-art"><svg viewBox="0 0 500 280"><rect width="500" height="280" fill="#ded9cd"/><path d="M112 208l72-132h132l72 132z" fill="#fbfaf6" stroke="#181816" stroke-width="4"/><circle cx="250" cy="156" r="47" fill="#ffd43b" stroke="#181816" stroke-width="4"/></svg></div>
            <div class="card-body"><h3>Prototypy</h3><p>Rýchla fyzická skúška nápadu pred finálnou verziou.</p></div>
        </div>
    </div>
</section>

<section class="shell section" style="padding-top:18px">
    <div class="steps">
        <div class="step"><div class="step-num">01</div><strong>Rozmer alebo náčrt</strong><span>Fotka, jednoduchý výkres alebo rozmery.</span></div>
        <div class="step"><div class="step-num">02</div><strong>Model</strong><span>Navrhnem jednoduchý 3D diel a skontrolujeme rozmery.</span></div>
        <div class="step"><div class="step-num">03</div><strong>Tlač</strong><span>Po odsúhlasení model vytlačíme a doladíme.</span></div>
    </div>
</section>
@endsection
